<?php

declare(strict_types=1);

$dist = __DIR__ . '/dist';

if (!is_dir($dist)) {
    mkdir($dist, 0755, true);
}

// Generate HTML
ob_start();

require __DIR__ . '/index.php';

$html = ob_get_clean();

file_put_contents($dist . '/index.html', $html);

// Copy static assets
function copyDirectory($source, $destination)
{
    if (!is_dir($destination)) {
        mkdir($destination, 0755, true);
    }

    foreach (scandir($source) as $file) {

        if ($file === '.' || $file === '..') {
            continue;
        }

        $from = $source . '/' . $file;
        $to = $destination . '/' . $file;

        if (is_dir($from)) {
            copyDirectory($from, $to);
        } else {
            copy($from, $to);
        }
    }
}

copyDirectory(
    __DIR__ . '/assets',
    $dist . '/assets'
);

echo "Portfolio build completed successfully!";