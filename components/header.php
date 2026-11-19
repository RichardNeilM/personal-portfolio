<header class="profile-header">

    <div class="profile-image">
        <img
            src="<?= htmlspecialchars($portfolio['profile_image']) ?>"
            alt="Profile photo"
        >
    </div>

    <div class="profile-info">

        <h1>
            <?= htmlspecialchars($portfolio['name']) ?>
        </h1>

        <div class="profile-location">
            <i data-lucide="map-pin"></i>

            <?= htmlspecialchars($portfolio['location']) ?>
        </div>

        <p class="profile-title">
            <?= htmlspecialchars($portfolio['title']) ?>
        </p>

        <div class="profile-actions">

            <a
                href="<?= htmlspecialchars($portfolio['resume']) ?>"
                class="btn btn-primary"
                target="_blank"
                rel="noopener noreferrer"
            >
                <i data-lucide="file-text"></i>
                View Resume
            </a>

            <a
                href="mailto:<?= htmlspecialchars($portfolio['email']) ?>"
                class="btn btn-secondary"
            >
                <i data-lucide="mail"></i>
                Send Email
            </a>

        </div>

    </div>

    <button
        class="theme-toggle"
        id="theme-toggle"
        aria-label="Switch color theme"
        type="button"
    >
        <i data-lucide="moon"></i>
    </button>

</header>