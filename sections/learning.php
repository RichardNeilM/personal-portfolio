<?php sectionStart('Currently Learning', 'book-open'); ?>

<div class="learning-list">

    <?php foreach ($portfolio['learning'] as $item): ?>

        <div class="learning-item">

            <div class="learning-icon">

                <i data-lucide="<?= htmlspecialchars($item['icon']) ?>"></i>

            </div>

            <div class="learning-info">

                <h3>
                    <?= htmlspecialchars($item['title']) ?>
                </h3>

                <p>
                    <?= htmlspecialchars($item['description']) ?>
                </p>

            </div>

        </div>

    <?php endforeach; ?>

</div>

<?php sectionEnd(); ?>