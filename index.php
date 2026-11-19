<?php

$portfolio = require __DIR__ . '/config/portfolio.php';

require_once __DIR__ . '/config/security.php';

require_once __DIR__ . '/components/card.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <?php require __DIR__ . '/components/meta.php'; ?>

    <link rel="preconnect"
          href="https://fonts.googleapis.com">

    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >

    <link rel="stylesheet"
          href="assets/css/style.css">

    <link rel="stylesheet"
          href="assets/css/animations.css">

</head>
<body>

    <div class="scroll-progress" aria-hidden="true"></div>

    <main class="container">

        <button
            type="button"
            class="back-to-top"
            id="back-to-top"
            aria-label="Back to top"
        >
            <i data-lucide="arrow-up"></i>
        </button>

        <?php require __DIR__ . '/components/header.php'; ?>

        <div class="bento-grid">

            <div class="bento-left">

                <?php require __DIR__ . '/sections/about.php'; ?>

                <?php require __DIR__ . '/sections/tech-stack.php'; ?>

            </div>

            <div class="bento-right">

                <?php require __DIR__ . '/sections/experience.php'; ?>

            </div>

        </div>

        <div class="secondary-grid">

            <?php require __DIR__ . '/sections/projects.php'; ?>

            <?php require __DIR__ . '/sections/learning.php'; ?>

        </div>

        <div class="contact-section">

            <?php require __DIR__ . '/sections/contact.php'; ?>

        </div>

        <?php require __DIR__ . '/components/footer.php'; ?>

    </main>

    <script src="https://unpkg.com/lucide@latest"></script>

    <script src="assets/js/main.js"></script>

    <script src="assets/js/animations.js"></script>

</body>
</html>