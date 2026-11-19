<?php sectionStart('Professional Work', 'folder-code'); ?>

<div class="project-list">

    <?php foreach ($portfolio['projects'] as $project): ?>

        <article class="project-item">

            <div class="project-heading">

                <div class="project-icon">

                    <i data-lucide="<?= htmlspecialchars($project['icon']) ?>"></i>

                </div>

                <div>

                    <h3>
                        <?= htmlspecialchars($project['title']) ?>
                    </h3>

                    <span class="project-category">
                        <?= htmlspecialchars($project['category']) ?>
                    </span>

                </div>

            </div>

            <p class="project-description">
                <?= htmlspecialchars($project['description']) ?>
            </p>

            <div class="project-technologies">

                <?php foreach ($project['technologies'] as $technology): ?>

                    <span class="technology-tag">
                        <?= htmlspecialchars($technology) ?>
                    </span>

                <?php endforeach; ?>

            </div>

        </article>

    <?php endforeach; ?>

</div>

<p class="project-disclaimer">

    <i data-lucide="info"></i>

    These projects were undertaken as part of my
    professional responsibilities. Ownership remains
    with the respective institution.

</p>

<?php sectionEnd(); ?>