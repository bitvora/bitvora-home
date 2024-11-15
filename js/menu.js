document.addEventListener('DOMContentLoaded', () => {
  const solutionsLink = document.getElementById('solutions-link');
  const dropdownMenu = document.getElementById('dropdown-menu');
  const solutionsContainer = document.getElementById('solutions-container');

  let menuActive = false;

  function openMenu() {
    dropdownMenu.classList.remove('hidden');
    menuActive = true;
  }

  function closeMenu() {
    dropdownMenu.classList.add('hidden');
    menuActive = false;
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

  document.addEventListener('click', (event) => {
    if (!solutionsContainer.contains(event.target)) {
      closeMenu();
    }
  });

  dropdownMenu.addEventListener('mouseenter', () => {
    menuActive = true;
  });
});
