<?php sectionStart('About Me', 'user-round'); ?>

<div class="about-content">

    <?php foreach ($portfolio['about'] as $paragraph): ?>

        <p><?= htmlspecialchars($paragraph) ?></p>

    <?php endforeach; ?>

</div>

<?php sectionEnd(); ?>