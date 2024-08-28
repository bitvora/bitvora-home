document.addEventListener('DOMContentLoaded', () => {
  const items = document.querySelectorAll('.why-item');
  const dots = document.querySelectorAll('.dot');

  const observerOptions = {
    root: document.querySelector('#why-container'),
    rootMargin: '0px',
    threshold: 0.5
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      const index = entry.target.getAttribute('data-index');
      if (entry.isIntersecting) {
        dots.forEach((dot) => dot.classList.remove('active'));
        document.querySelector(`.dot[data-dot="${index}"]`).classList.add('active');
      }
    });
  }, observerOptions);

  items.forEach((item) => observer.observe(item));
});
