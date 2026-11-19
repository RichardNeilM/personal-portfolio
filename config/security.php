<?php

declare(strict_types=1);

/* Prevent MIME type sniffing */

header('X-Content-Type-Options: nosniff');

/* Prevent clickjacking */

header('X-Frame-Options: DENY');

/* Limit referrer information */

header('Referrer-Policy: strict-origin-when-cross-origin');

/* Restrict unnecessary browser permissions */

header(
    'Permissions-Policy: camera=(), microphone=(), geolocation=()'
);

/* Content Security Policy */

header(
    "Content-Security-Policy: " .
    "default-src 'self'; " .
    "script-src 'self' https://unpkg.com; " .
    "style-src 'self' https://fonts.googleapis.com; " .
    "font-src 'self' https://fonts.gstatic.com; " .
    "img-src 'self' data:; " .
    "connect-src 'self'; " .
    "object-src 'none'; " .
    "base-uri 'self'; " .
    "form-action 'self'; " .
    "frame-ancestors 'none';"
);

/* Error handling */

ini_set('log_errors', '1');

ini_set(
    'display_errors',
    $portfolio['environment'] === 'production' ? '0' : '1'
);

error_reporting(E_ALL);