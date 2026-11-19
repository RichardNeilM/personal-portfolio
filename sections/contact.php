<?php sectionStart('Contact & Socials', 'contact-round'); ?>

<p class="contact-description">
    Let's connect and explore opportunities to collaborate.
</p>

<?php

$contacts = [

    [
        'title' => 'Email',
        'description' => 'Send me a message',
        'icon' => 'mail',
        'url' => !empty($portfolio['email'])
            ? 'mailto:' . $portfolio['email']
            : '',
    ],

    [
        'title' => 'Phone',
        'description' => 'Contact me directly',
        'icon' => 'phone',
        'url' => !empty($portfolio['phone'])
            ? 'tel:' . $portfolio['phone']
            : '',
    ],

];

$socialPlatforms = [

    'github' => [
        'GitHub',
        'Explore my repositories',
        'github',
    ],

    'linkedin' => [
        'LinkedIn',
        'Professional connections',
        'linkedin',
    ],

    'facebook' => [
        'Facebook',
        'Connect with me',
        'facebook',
    ],

    'instagram' => [
        'Instagram',
        'Follow my journey',
        'instagram',
    ],

];

foreach ($socialPlatforms as $key => $platform) {

    $url = $portfolio['socials'][$key] ?? '';

    if (
        !filter_var($url, FILTER_VALIDATE_URL) ||
        parse_url($url, PHP_URL_SCHEME) !== 'https'
    ) {
        continue;
    }

    $contacts[] = [
        'title' => $platform[0],
        'description' => $platform[1],
        'icon' => $platform[2],
        'url' => $url,
    ];

}

?>

<div class="social-grid">

    <?php foreach ($contacts as $contact): ?>

        <?php if (empty($contact['url'])) continue; ?>

        <a
            class="social-card"
            href="<?= htmlspecialchars($contact['url']) ?>"
            <?php if (str_starts_with($contact['url'], 'https://')): ?>
                target="_blank"
                rel="noopener noreferrer"
            <?php endif; ?>
        >

            <div class="social-card-header">

                <i data-lucide="<?= htmlspecialchars($contact['icon']) ?>"></i>

                <i data-lucide="arrow-up-right"></i>

            </div>

            <div class="social-card-info">

                <h3>
                    <?= htmlspecialchars($contact['title']) ?>
                </h3>

                <p>
                    <?= htmlspecialchars($contact['description']) ?>
                </p>

            </div>

        </a>

    <?php endforeach; ?>

</div>

<div class="contact-location">

    <i data-lucide="map-pin"></i>

    <span>
        <?= htmlspecialchars($portfolio['location']) ?>
    </span>

</div>

<?php sectionEnd(); ?>