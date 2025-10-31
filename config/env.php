<?php
// env.example.php
// Example file showing how to set environment variables using putenv().
// Copy this file to a location outside public_html (for example: /home/yourcpaneluser/config/env.php)
// Edit values and keep the file private (do not commit real credentials to git).

// SMTP settings (example for an SMTP provider or cPanel mail server)
putenv('SMTP_HOST=smtp.gmail.com');
putenv('SMTP_PORT=587');
putenv('SMTP_USER=creativeboy.sri@gmail.com');
putenv('SMTP_PASS=irlnrldogjklbrxw');
putenv('SMTP_SECURE=tls');   // tls or ssl or empty
putenv('SMTP_AUTH=1');      // set to 0 to disable

// Optional: From/To overrides
putenv('SENDMAIL_FROM=creativeboy.sri@gmail.com');
putenv('SENDMAIL_TO=creativeboy.sri@gmail.com');

// Optional PHPMailer debug during testing only (0=off, 2=client+server)
// putenv('SMTP_DEBUG=0');

// Mailgun is not required for SMTP, but kept here if you want HTTP fallback later
// putenv('MAILGUN_API_KEY=key-xxxxxxxxxxxx');
// putenv('MAILGUN_DOMAIN=mg.yourdomain.com');

// End of example
