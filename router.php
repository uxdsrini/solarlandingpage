<?php
// Simple router for PHP built-in server.
// Usage: php -S localhost:8000 router.php
// Serves static files when they exist; otherwise serves solarquote.html.
// Also provides a lightweight /send_mail.php POST handler for local dev.

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = __DIR__ . $uri;

// If the requested resource exists as a file, let the server serve it.
if ($uri !== '/' && file_exists($path) && is_file($path)) {
    return false;
}

// Handle local send_mail.php POST for development.
if ($uri === '/send_mail.php') {
    // Allow CORS for quick testing in dev
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST, OPTIONS');
    header('Access-Control-Allow-Headers: Content-Type');

    if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
        http_response_code(204);
        exit;
    }

    $raw = file_get_contents('php://input');
    $payload = json_decode($raw, true);

    if (!$payload) {
        // fallback to form-encoded body
        $payload = $_POST ?: null;
    }

    if (!$payload) {
        http_response_code(400);
        header('Content-Type: text/plain');
        echo 'No payload received';
        exit;
    }

    // For local dev: save last payload to a file for inspection
    @file_put_contents(__DIR__ . '/last_payload.json', json_encode($payload, JSON_PRETTY_PRINT));

    // TODO: integrate with mail() or other mail provider in production.

    header('Content-Type: text/plain');
    echo 'OK';
    exit;
}

// Fallback: serve the main HTML page
$index = __DIR__ . '/solarquote.html';
if (file_exists($index)) {
    header('Content-Type: text/html; charset=utf-8');
    readfile($index);
    exit;
}

// If nothing found, respond 404
http_response_code(404);
echo 'Not Found';
