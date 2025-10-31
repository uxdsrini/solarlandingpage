# Deployment guide for cPanel (public_html) — SMTP-safe setup

This guide shows the minimal, safe steps to deploy this landing page and `email.php` to a cPanel account and configure SMTP credentials without placing secrets inside `public_html`.

Overview
- Place application files under your domain folder (usually `public_html` or an addon domain directory).
- Keep SMTP credentials outside the webroot (recommended) in a PHP file that calls `putenv()`.
- Install composer dependencies (or upload a prepared `vendor/` folder).
- Create a writable `last_payload.json` for debugging (optional).
- Configure permissions and disable `display_errors` in production.

1) Recommended file layout

/home/yourcpaneluser/
  ├─ public_html/                 # webroot (your domain)
  │   ├─ index.php
  │   ├─ email.php                # this file expects getenv() values
  │   ├─ solarquote.php
  │   └─ (assets...)
  └─ config/                      # OUTSIDE public_html
      └─ env.php                  # putenv() lines with SMTP creds

2) Create `env.php` outside webroot
- Using cPanel File Manager, create a directory `/home/yourcpaneluser/config/` (outside `public_html`).
- Upload a file named `env.php` with the same format as `config/env.example.php` in this repo, but with real values.

Example (`/home/yourcpaneluser/config/env.php`):
```php
<?php
putenv('SMTP_HOST=smtp.yourprovider.com');
putenv('SMTP_PORT=587');
putenv('SMTP_USER=you@yourdomain.com');
putenv('SMTP_PASS=supersecretpassword');
putenv('SMTP_SECURE=tls');
putenv('SMTP_AUTH=1');
putenv('SENDMAIL_FROM=you@yourdomain.com');
putenv('SENDMAIL_TO=admin@yourdomain.com');
```

3) Ensure `email.php` loads the env file
- `email.php` already attempts to load `../config/env.php` (one level above `public_html`). If your `config/` directory is in a different location, update the `email.php` include path accordingly.

4) Upload app files to `public_html`
- Zip the project locally and upload via cPanel File Manager, or use FTP/SFTP to transfer files to `public_html`.

5) Install dependencies
Option A — If you have SSH & Composer available on cPanel:
```bash
cd /home/yourcpaneluser/public_html
php -v
composer install --no-dev --optimize-autoloader
```
Option B — If composer is not available on the server:
- Run `composer install` locally and upload the generated `vendor/` folder to the server preserving paths.

6) Permissions
- PHP files: 644
- Directories: 755
- `last_payload.json` (optional debug file) must be writable by the webserver. Create the file in `public_html` and set its permissions:
```bash
cd /home/yourcpaneluser/public_html
touch last_payload.json
chmod 660 last_payload.json   # or 666 if 660 fails due to ownership
```

7) Protect sensitive directories via `.htaccess`
- Add a `.htaccess` in `vendor/` (or `src/PHPMailer`) to block web access to library code:
```
# vendor/.htaccess
<IfModule mod_authz_core.c>
  Require all denied
</IfModule>
<IfModule !mod_authz_core.c>
  Deny from all
</IfModule>
```

8) PHP settings
- Use cPanel MultiPHP INI Editor to set:
  - display_errors = Off
  - log_errors = On
  - error_log = /home/yourcpaneluser/logs/php-error.log (or default)

9) Test the endpoint
- From your machine run:
```bash
curl -v -X POST https://yourdomain.com/email.php \
  -H "Content-Type: application/json" \
  -d '{"name":"Test User","phone":"9999999999","email":"test@example.com","bill":"below-2000","type":"residential","whatsapp":1}'
```
- Expected: JSON response: `{ "ok": true, "message": "Mail sent via SMTP", "via": "SMTP" }` or a structured error JSON. If you see connectivity/auth errors, check SMTP settings and server outgoing port restrictions.

10) Troubleshooting
- If you get connectivity errors: your host blocks outbound SMTP. Ask your host if SMTP to remote hosts is allowed or use their SMTP relay. If blocked, consider Mailgun (HTTP) or host SMTP relay.
- If authentication errors: verify `SMTP_USER` & `SMTP_PASS`. For Gmail use App Passwords or use the host SMTP.
- Look at server error logs (cPanel → Metrics → Errors) and the `last_payload.json` persisted by the script.

11) Security checklist
- Keep `env.php` outside `public_html` and never commit credentials.
- Set correct file permissions and deny web access to libraries.
- Disable `display_errors`.

If you want, I can produce the exact `env.php` text (without secrets) and the `.htaccess` files as ready-to-upload examples — tell me your cPanel username and where you will place `config/env.php` relative to `public_html` (for example: `/home/yourcpaneluser/config/env.php`) and I'll tailor the include path and instructions.

