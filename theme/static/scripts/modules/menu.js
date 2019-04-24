const getToggleLinks = menu => {
  const submenus = Array.from(menu.querySelectorAll('.sub-menu-container'));

  return submenus.map(submenu => {
    return submenu.previousElementSibling;
  });
};

export default menu => {
  const toggleSubmenuLinks = getToggleLinks(menu);

  // don't rely on hover (makes the menu accessible through keyboard)
  toggleSubmenuLinks.forEach(link => {
    link.addEventListener('click', event => {
      event.preventDefault();

      const submenu = link.nextElementSibling;

      submenu.classList.toggle('sub-menu-container--is-open');
    })
  });
};
