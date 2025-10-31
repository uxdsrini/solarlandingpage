<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// Try to load Composer autoload or local PHPMailer (we expect PHPMailer under ./src/PHPMailer)
if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require_once __DIR__ . '/vendor/autoload.php';
} else {
    $p = __DIR__ . '/src/PHPMailer/src';
    if (file_exists($p . '/PHPMailer.php')) {
        require_once $p . '/Exception.php';
        require_once $p . '/PHPMailer.php';
        require_once $p . '/SMTP.php';
    } else {
        // If PHPMailer isn't present, show a helpful message and exit
        header('Content-Type: text/plain; charset=utf-8');
        echo "PHPMailer not found. Please run `composer require phpmailer/phpmailer` or place PHPMailer in ./src/PHPMailer\n";
        exit(1);
    }
}

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

// Helper: read payload (JSON preferred)
function read_payload() {
    $raw = file_get_contents('php://input');
    $data = [];
    if ($raw) {
        $json = json_decode($raw, true);
        if ($json !== null) return $json;
    }
    if (!empty($_POST)) return $_POST;
    return [];
}

// Helper: write last_payload.json for debugging
function persist_failure($payload, $meta) {
    $out = [
        'timestamp' => date('c'),
        'payload' => $payload,
        'meta' => $meta,
    ];
    @file_put_contents(__DIR__ . '/last_payload.json', json_encode($out, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
}

// Mailgun fallback (uses env vars MAILGUN_API_KEY, MAILGUN_DOMAIN, MAILGUN_FROM, MAILGUN_TO)
function send_via_mailgun($subject, $bodyText, $bodyHtml, $from, $to) {
    $apiKey = getenv('MAILGUN_API_KEY');
    $domain = getenv('MAILGUN_DOMAIN');
    if (!$apiKey || !$domain) return [ 'ok' => false, 'error' => 'mailgun_not_configured' ];

    $url = 'https://api.mailgun.net/v3/' . $domain . '/messages';

    $post = [
        'from' => $from,
        'to' => $to,
        'subject' => $subject,
        'text' => $bodyText,
        'html' => $bodyHtml,
    ];

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERPWD, 'api:' . $apiKey);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    $resp = curl_exec($ch);
    $code = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
    $err = curl_error($ch);
    curl_close($ch);

    if ($resp === false) return [ 'ok' => false, 'error' => 'curl_error', 'message' => $err ];
    if ($code >= 200 && $code < 300) return [ 'ok' => true, 'response' => $resp ];
    return [ 'ok' => false, 'error' => 'http_error', 'code' => $code, 'response' => $resp ];
}

// Main handling
$payload = read_payload();

// Helper to safely read values
$get = function($k, $default = '') use ($payload) {
    if (!isset($payload[$k])) return $default;
    $v = is_array($payload[$k]) ? json_encode($payload[$k]) : trim((string)$payload[$k]);
    return $v;
};

$name = $get('name');
$phone = $get('phone');
$emailAddr = $get('email');
$bill = $get('bill');
$type = $get('type');
$whatsapp = $get('whatsapp') ?: $get('whatsappUpdates');

// Build message bodies
if ($name || $phone || $emailAddr) {
    $bodyHtml = '<h3>New lead from website</h3>';
    $bodyHtml .= '<table cellpadding="4" cellspacing="0">';
    $bodyHtml .= '<tr><td><strong>Name:</strong></td><td>' . htmlspecialchars($name) . '</td></tr>';
    $bodyHtml .= '<tr><td><strong>Phone:</strong></td><td>' . htmlspecialchars($phone) . '</td></tr>';
    $bodyHtml .= '<tr><td><strong>Email:</strong></td><td>' . htmlspecialchars($emailAddr) . '</td></tr>';
    $bodyHtml .= '<tr><td><strong>Avg Bill:</strong></td><td>' . htmlspecialchars($bill) . '</td></tr>';
    $bodyHtml .= '<tr><td><strong>Type:</strong></td><td>' . htmlspecialchars($type) . '</td></tr>';
    $bodyHtml .= '<tr><td><strong>WhatsApp opt-in:</strong></td><td>' . ($whatsapp ? 'Yes' : 'No') . '</td></tr>';
    $bodyHtml .= '</table>';

    $bodyText = "New lead\n";
    $bodyText .= "Name: $name\nPhone: $phone\nEmail: $emailAddr\nAvg bill: $bill\nType: $type\nWhatsApp: " . ($whatsapp ? 'Yes' : 'No') . "\n";
    $subject = 'New lead: ' . ($type ?: 'website');
} else {
    $bodyHtml = '<p>This is a test message sent from <strong>email.php</strong>.</p>';
    $bodyText = 'This is a test message sent from email.php (plain text).';
    $subject = 'Test message from debug script';
}

// Prepare PHPMailer settings
$smtpHost = getenv('SMTP_HOST') ?: 'smtp.gmail.com';
if (strtolower($smtpHost) === 'gmail') $smtpHost = 'smtp.gmail.com';
$username = getenv('SMTP_USER') ?: 'creativeboy.sri@gmail.com';
$password = getenv('SMTP_PASS') ?: 'irlnrldogjklbrxw';
$port = (int)(getenv('SMTP_PORT') ?: 587);
$secure = getenv('SMTP_SECURE') ?: 'tls';
$smtpAuth = getenv('SMTP_AUTH') !== '0';

// capture debug lines
$debug = [];
$mail->Debugoutput = function($str, $level) use (&$debug) {
    $debug[] = date('Y-m-d H:i:s') . "\t" . trim($str);
};
$mail->SMTPDebug = SMTP::DEBUG_OFF;

// build mail
try {
    $mail->isSMTP();
    $mail->Host = $smtpHost;
    $mail->SMTPAuth = $smtpAuth;
    if ($username) $mail->Username = $username;
    if ($password) $mail->Password = $password;
    if (strtolower($secure) === 'ssl') {
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    } else {
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    }
    $mail->Port = $port;

    // Recipients
    // Build a safe default domain (strip port if present)
    $rawHost = $_SERVER['HTTP_HOST'] ?? gethostname() ?: 'localhost';
    $hostNoPort = preg_replace('/:\\d+$/', '', $rawHost);
    $defaultDomain = filter_var($hostNoPort, FILTER_VALIDATE_DOMAIN, FILTER_FLAG_HOSTNAME) ? $hostNoPort : 'localhost';
    $defaultFrom = 'no-reply@' . $defaultDomain;

    // Read env overrides and sanitize (remove surrounding quotes including smart quotes)
    $envFrom = getenv('SENDMAIL_FROM');
    if ($envFrom !== false) {
        // Remove ASCII quotes and Unicode smart quotes (use Unicode codepoints)
        $envFrom = trim($envFrom);
        $envFrom = preg_replace('/^[\x{0022}\x{0027}\x{201C}\x{201D}\x{2018}\x{2019}]+|[\x{0022}\x{0027}\x{201C}\x{201D}\x{2018}\x{2019}]+$/u', '', $envFrom);
    }
    $from = $envFrom ?: ($username ?: $defaultFrom);
    // ensure $from is valid email
    if (!filter_var($from, FILTER_VALIDATE_EMAIL)) {
        $from = $defaultFrom;
    }

    $envTo = getenv('SENDMAIL_TO');
    $to = $envTo ?: ($username ?: 'admin@' . $defaultDomain);
    // sanitize to-list: remove stray quotes and split
    // remove ASCII quotes (U+0022 U+0027) and Unicode smart quotes from any recipient list
    $to = preg_replace('/[\x{0022}\x{0027}\x{201C}\x{201D}\x{2018}\x{2019}]/u', '', $to);

    $mail->setFrom($from, 'Website Lead');
    foreach (explode(',', $to) as $addr) {
        $addr = trim($addr);
        if ($addr && filter_var($addr, FILTER_VALIDATE_EMAIL)) $mail->addAddress($addr);
    }

    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $bodyHtml;
    $mail->AltBody = $bodyText;

    // try send (this may throw)
    $mail->send();

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode([ 'ok' => true, 'message' => 'Mail sent via SMTP', 'via' => 'SMTP' ]);
    exit(0);

} catch (Exception $e) {
    // classify
    $errorInfo = $mail->ErrorInfo ?: $e->getMessage();
    $errorType = 'other';
    $lower = strtolower($errorInfo . ' ' . implode(' ', $debug));
    if (strpos($lower, 'failed to connect') !== false || strpos($lower, 'could not connect') !== false || strpos($lower, 'operation timed out') !== false) {
        $errorType = 'connectivity';
    } elseif (strpos($lower, 'authenticate') !== false || strpos($lower, 'invalid credentials') !== false) {
        $errorType = 'auth';
    }

    // persist failure for debugging
    persist_failure($payload, [ 'errorType' => $errorType, 'errorInfo' => $errorInfo, 'debug' => $debug ]);

    // Attempt Mailgun fallback if connectivity failure and Mailgun configured
    if ($errorType === 'connectivity' && getenv('MAILGUN_API_KEY') && getenv('MAILGUN_DOMAIN')) {
        $fromHeader = getenv('MAILGUN_FROM') ?: $from;
        $toHeader = getenv('MAILGUN_TO') ?: $to;
        $mg = send_via_mailgun($subject, $bodyText, $bodyHtml, $fromHeader, $toHeader);
        if ($mg['ok']) {
            header('Content-Type: application/json; charset=utf-8');
            echo json_encode([ 'ok' => true, 'message' => 'Mail sent via Mailgun fallback', 'via' => 'Mailgun' ]);
            exit(0);
        } else {
            // log mailgun failure as well
            persist_failure($payload, [ 'errorType' => $errorType, 'errorInfo' => $errorInfo, 'debug' => $debug, 'mailgun' => $mg ]);
            header('Content-Type: application/json; charset=utf-8', true, 502);
            echo json_encode([ 'ok' => false, 'message' => 'SMTP failed and Mailgun fallback failed', 'error' => $mg ]);
            exit(1);
        }
    }

    // otherwise return a structured JSON error
    header('Content-Type: application/json; charset=utf-8', true, 502);
    echo json_encode([ 'ok' => false, 'message' => 'Mail send failed', 'errorType' => $errorType, 'errorInfo' => $errorInfo ]);
    exit(1);
}

?>