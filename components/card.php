<?php

function sectionStart(string $title, string $icon): void
{
    ?>

    <section class="card">

        <div class="card-header">

            <i data-lucide="<?= htmlspecialchars($icon) ?>"></i>

            <h2><?= htmlspecialchars($title) ?></h2>

        </div>

        <div class="card-content">

    <?php
}

function sectionEnd(): void
{
    ?>

        </div>

    </section>

    <?php
}