document.addEventListener('DOMContentLoaded', () => {
  function setupObserver(sectionId, dotsId) {
    const container = document.querySelector(`#${sectionId}`);
    if (!container) {
      return;
    }
    const items = container.querySelectorAll('.scroll-item');
    const dots = document.querySelectorAll(`#${dotsId} .dot`);

    const observerOptions = {
      root: container,
      rootMargin: '0px',
      threshold: 0.5
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        const index = entry.target.getAttribute('data-index');
        if (entry.isIntersecting) {
          dots.forEach((dot) => dot.classList.remove('active'));
          const activeDot = document.querySelector(`#${dotsId} .dot[data-dot="${index}"]`);
          if (activeDot) {
            activeDot.classList.add('active');
          }
        }
      });
    }, observerOptions);

    items.forEach((item) => observer.observe(item));
  }

  setupObserver('section-1', 'dots-1');
  setupObserver('section-2', 'dots-2');

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

  highlightActiveLink();
  scrollToHash();

  window.addEventListener('hashchange', () => {
    highlightActiveLink();
    scrollToHash();
  });

  window.addEventListener('hashchange', highlightActiveLink);
});
