document.addEventListener('DOMContentLoaded', () => {
  function highlightActiveLink() {
    const currentPath = window.location.pathname;
    const currentHash = window.location.hash;

    const navLinks = document.querySelectorAll('.nav-link');

    navLinks.forEach((link) => link.classList.remove('active'));

    navLinks.forEach((link) => {
      const linkHref = link.getAttribute('href');

      const isActive =
        (linkHref === currentPath && currentPath !== '/') ||
        linkHref === currentHash ||
        (linkHref === '/' && currentPath === '/' && !currentHash);

      if (isActive) {
        link.classList.add('active');
      }
    });
  }

  function scrollToHash() {
    const hash = window.location.hash;
    if (hash) {
      const targetElement = document.querySelector(hash);
      if (targetElement) {
        targetElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    }
  }

  function observeSections() {
    const sections = document.querySelectorAll('[data-watch]');

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            const id = entry.target.getAttribute('id');
            if (id) {
              history.pushState(null, null, `#${id}`);
              highlightActiveLink();
            }
          }
        });
      },
      {
        threshold: 0.5
      }
    );

    sections.forEach((section) => observer.observe(section));
  }

  highlightActiveLink();
  scrollToHash();
  observeSections();

  window.addEventListener('hashchange', () => {
    highlightActiveLink();
    scrollToHash();
  });

  window.addEventListener('hashchange', highlightActiveLink);

  window.addEventListener('scroll', () => {
    observeSections();
  });
});
