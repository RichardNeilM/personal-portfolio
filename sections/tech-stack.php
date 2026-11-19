<?php sectionStart('Tech Stack', 'layers'); ?>

<div class="tech-stack">

    <?php foreach ($portfolio['tech_stack'] as $category => $skills): ?>

        <div class="skill-group">

            <h3><?= htmlspecialchars($category) ?></h3>

            <div class="skill-list">

                <?php foreach ($skills as $skill): ?>

                    <span class="skill-tag">

                        <?= htmlspecialchars($skill) ?>

                    </span>

                <?php endforeach; ?>

            </div>

        </div>

    <?php endforeach; ?>

</div>

<?php sectionEnd(); ?>