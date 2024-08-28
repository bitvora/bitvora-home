document.addEventListener('DOMContentLoaded', () => {
  function setupObserver(sectionId, dotsId) {
    const container = document.querySelector(`#${sectionId}`);
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
          document.querySelector(`#${dotsId} .dot[data-dot="${index}"]`).classList.add('active');
        }
      });
    }, observerOptions);

    items.forEach((item) => observer.observe(item));
  }

  setupObserver('section-1', 'dots-1');
  setupObserver('section-2', 'dots-2');
});
