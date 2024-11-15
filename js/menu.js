document.addEventListener('DOMContentLoaded', () => {
  const solutionsLink = document.getElementById('solutions-link');
  const dropdownMenu = document.getElementById('dropdown-menu');
  const solutionsContainer = document.getElementById('solutions-container');
  const svgIcon = document.getElementById('svg-icon');
  const solutionsText = document.getElementById('solutions-link');

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
});
