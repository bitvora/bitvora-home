document.addEventListener('DOMContentLoaded', () => {
  const solutionsLink = document.getElementById('solutions-link');
  const dropdownMenu = document.getElementById('dropdown-menu');
  const solutionsContainer = document.getElementById('solutions-container');
  const svgIcon = document.getElementById('svg-icon');
  const solutionsText = document.getElementById('solutions-link');
  const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
  const mobileMenuIcon = document.getElementById('mobile-menu-icon');
  const mobileMenu = document.getElementById('mobile-menu');
  const mobileSolutionsLinkText = document.getElementById('mobile-solutions-link');

  if (window.location.pathname.startsWith('/solutions')) {
    solutionsLink.style.color = '#C69A71';
    mobileSolutionsLinkText.style.color = '#C69A71';

  }

  let menuActive = false;

  function openMenu() {
    dropdownMenu.classList.remove('hidden');
    menuActive = true;

    svgIcon.innerHTML = `
      <svg id="up-icon" width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M4.42871 11.625L9.67871 6.375L14.9287 11.625" stroke="#C69A71" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    `;
    solutionsText.style.color = '#C69A71';
  }

  function closeMenu() {
    dropdownMenu.classList.add('hidden');
    menuActive = false;

    svgIcon.innerHTML = `
      <svg id="down-icon" width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M14.9287 6.375L9.67871 11.625L4.42871 6.375" stroke="#EFEDF1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    `;
    solutionsText.style.color = '#EFEDF1';
  }

  solutionsLink.addEventListener('mouseenter', () => {
    if (!menuActive) {
      openMenu();
    }
  });

  solutionsContainer.addEventListener('mouseenter', openMenu);
  solutionsContainer.addEventListener('mouseleave', () => {
    if (!menuActive) {
      closeMenu();
    }
  });

  dropdownMenu.addEventListener('mouseleave', () => {
    if (!menuActive) {
      closeMenu();
    }
  });

  document.addEventListener('click', (e) => {
    if (!solutionsContainer.contains(e.target)) {
      closeMenu();
    }
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && menuActive) {
      closeMenu();
    }
  });

  let mobileMenuActive = false;

  function openMobileMenu() {
    mobileMenu.classList.remove('hidden');
    mobileMenuIcon.src = '/assets/close.svg';
    mobileMenuActive = true;
  }

  function closeMobileMenuFunction() {
    mobileMenu.classList.add('hidden');
    mobileMenuIcon.src = '/assets/mobile-menu.svg';
    mobileMenuActive = false;
  }

  const solutionsMenu1 = document.getElementById('solutions-menu-1');
  const solutionsMenu2 = document.getElementById('solutions-menu-2');

  mobileMenuToggle.addEventListener('click', () => {
    solutionsMenu1.style.display = 'block';
    solutionsMenu2.style.display = 'none';

    if (!mobileMenuActive) {
      openMobileMenu();
    } else {
      closeMobileMenuFunction();
    }
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && mobileMenuActive) {
      closeMobileMenuFunction();
    }
  });

  const mobileMenuLinks = mobileMenu.querySelectorAll('a');
  mobileMenuLinks.forEach((link) => {
    link.addEventListener('click', closeMobileMenuFunction);
  });

  const backButton = document.getElementById('solutions-back');

  const mobileSolutionsLink = mobileMenu.querySelector('#mobile-solutions');

  mobileSolutionsLink.addEventListener('click', () => {
    solutionsMenu2.style.display = 'block';
    solutionsMenu1.style.display = 'none';
  });

  backButton.addEventListener('click', () => {
    solutionsMenu1.style.display = 'block';
    solutionsMenu2.style.display = 'none';
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && mobileMenuActive) {
      closeMobileMenuFunction();
    }
  });
});
