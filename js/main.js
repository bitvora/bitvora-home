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
        if (entry.isIntersecting) {
          const index = entry.target.getAttribute('data-index');
          dots.forEach((dot) => dot.classList.remove('active'));
          const activeDot = document.querySelector(`#${dotsId} .dot[data-dot="${index}"]`);
          if (activeDot) {
            activeDot.classList.add('active');
          }

          if (sectionId === 'section-2') {
            setActiveItem(entry.target);
          }
        }
      });
    }, observerOptions);

    items.forEach((item) => observer.observe(item));
  }

  setupObserver('section-1', 'dots-1');
  setupObserver('section-2', 'dots-2');

  const pricingItems = document.querySelectorAll('.pricing-item');

  function setActiveItem(activeItem) {
    pricingItems.forEach((item) => {
      item.classList.remove('active-pricing');
      // item.querySelector('.active-link').classList.add('hidden');
    });
    activeItem.classList.add('active-pricing');
    // activeItem.querySelector('.active-link').classList.remove('hidden');
  }

  pricingItems.forEach((item) => {
    item.addEventListener('mouseenter', function () {
      setActiveItem(this);
    });

    item.addEventListener('click', function () {
      setActiveItem(this);
    });
  });

  const pricingSection = document.getElementById('section-2');
  pricingSection.addEventListener('mouseleave', function () {
    if (!document.querySelector('.pricing-item.active-pricing')) {
      setActiveItem(pricingItems[0]);
    }
  });

  setActiveItem(pricingItems[0]);

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

var modal = document.getElementById('contact-sales-modal');

var btns = document.querySelectorAll('.contact-sales-btn');

var span = document.getElementsByClassName('close')[0];

btns.forEach(function (btn) {
  btn.onclick = function () {
    modal.style.display = 'block';
  };
});

span.onclick = function () {
  modal.style.display = 'none';
  document.getElementById('emailForm').reset();
};

window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = 'none';
    document.getElementById('emailForm').reset();
  }
};

document.getElementById('emailForm').addEventListener('submit', function (event) {
  event.preventDefault();

  const email = document.getElementById('email').value;
  const job_title = document.getElementById('job_title').value;
  const fullname = document.getElementById('fullname').value;
  const company_url = document.getElementById('company_url').value;
  const button = document.querySelector('.join');
  const loader = document.createElement('div');
  loader.className = 'loader';
  button.appendChild(loader);
  button.classList.add('button-disabled');

  fetch('https://api.signet.bitvora.com/sales', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({
      email: email,
      job_title: job_title,
      fullname: fullname,
      company_url: company_url
    })
  })
    .then((response) => {
      if (!response.ok) {
        throw new Error('Network response was not ok');
      }
      return response.json();
    })
    .then((data) => {
      alert('Thank you! Our team will be in touch with you shortly!');
      document.getElementById('emailForm').reset();
      modal.style.display = 'none';
    })
    .catch((error) => {
      alert('Something went wrong. Please try again later.');
    })
    .finally(() => {
      loader.remove();
      button.classList.remove('button-disabled');
    });
});
