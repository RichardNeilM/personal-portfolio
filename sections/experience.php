<?php sectionStart('Experience', 'briefcase-business'); ?>

<div class="timeline">

    <?php foreach ($portfolio['experience'] as $index => $experience): ?>

        <div class="timeline-item <?= $index === 0 ? 'current' : '' ?>">

            <div class="timeline-dot"></div>

            <div class="timeline-content">

                <div class="timeline-heading">

                    <h3>
                        <?= htmlspecialchars($experience['title']) ?>
                    </h3>

                    <span class="timeline-period">
                        <?= htmlspecialchars($experience['period']) ?>
                    </span>

                </div>

                <p class="timeline-organization">
                    <?= htmlspecialchars($experience['organization']) ?>
                </p>

                <p class="timeline-description">
                    <?= htmlspecialchars($experience['description']) ?>
                </p>

            </div>

        </div>

    <?php endforeach; ?>

</div>

<?php sectionEnd(); ?>