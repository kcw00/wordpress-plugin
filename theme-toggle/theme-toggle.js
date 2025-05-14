document.addEventListener("DOMContentLoaded", () => {
  const toggleButton = document.getElementById('theme-toggle');
  const icon = document.getElementById('theme-icon');
  const body = document.body;

  const basePath = window.location.origin + '/wp-content/plugins/theme-toggle/icons';
  const moonIcon = `${basePath}/moon.svg`;
  const sunIcon = `${basePath}/sun.svg`;

  const setTheme = (mode) => {
    if (mode === 'dark') {
      body.classList.add('dark-mode');
      icon.src = sunIcon;
    } else {
      body.classList.remove('dark-mode');
      icon.src = moonIcon;
    }
    localStorage.setItem('theme', mode);
  };

  const saved = localStorage.getItem('theme') || 'light';
  setTheme(saved);

  toggleButton.addEventListener('click', () => {
    const current = body.classList.contains('dark-mode') ? 'dark' : 'light';
    setTheme(current === 'dark' ? 'light' : 'dark');
  });
});
