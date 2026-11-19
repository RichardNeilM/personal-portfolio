const themeToggle = document.getElementById('theme-toggle');

const savedTheme = localStorage.getItem('theme') || 'light';

function applyTheme(theme) {

    document.documentElement.setAttribute('data-theme', theme);

    localStorage.setItem('theme', theme);

    themeToggle.innerHTML = theme === 'dark'
        ? '<i data-lucide="sun"></i>'
        : '<i data-lucide="moon"></i>';

    if (window.lucide) {
        lucide.createIcons();
    }

}

applyTheme(savedTheme);

themeToggle.addEventListener('click', () => {

    const currentTheme =
        document.documentElement.getAttribute('data-theme');

    const nextTheme =
        currentTheme === 'dark' ? 'light' : 'dark';

    applyTheme(nextTheme);

});