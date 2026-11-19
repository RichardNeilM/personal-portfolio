<?php

$seo = $portfolio['seo'];

$siteUrl = rtrim($portfolio['site_url'], '/');

$socialImage = $siteUrl . '/' . $seo['image'];

$isProduction = $portfolio['environment'] === 'production';

?>

<meta charset="UTF-8">

<meta name="viewport"
      content="width=device-width, initial-scale=1.0">

<title><?= htmlspecialchars($seo['title']) ?></title>

<meta name="description"
      content="<?= htmlspecialchars($seo['description']) ?>">

<meta name="author"
      content="<?= htmlspecialchars($seo['author']) ?>">

<meta name="robots"
      content="<?= $isProduction ? 'index, follow' : 'noindex, nofollow' ?>">

<meta name="theme-color" content="#f5f5f7">

<?php if ($isProduction): ?>

<link rel="canonical"
      href="<?= htmlspecialchars($siteUrl . '/') ?>">

<?php endif; ?>

<!-- Open Graph -->

<meta property="og:type" content="website">

<meta property="og:title"
      content="<?= htmlspecialchars($seo['title']) ?>">

<meta property="og:description"
      content="<?= htmlspecialchars($seo['description']) ?>">

<meta property="og:url"
      content="<?= htmlspecialchars($siteUrl . '/') ?>">

<meta property="og:image"
      content="<?= htmlspecialchars($socialImage) ?>">

<!-- Social Media Card -->

<meta name="twitter:card" content="summary_large_image">

<meta name="twitter:title"
      content="<?= htmlspecialchars($seo['title']) ?>">

<meta name="twitter:description"
      content="<?= htmlspecialchars($seo['description']) ?>">

<meta name="twitter:image"
      content="<?= htmlspecialchars($socialImage) ?>">

<!-- Favicon -->

<link rel="icon"
      type="image/svg+xml"
      href="assets/images/favicon.svg">