import A11yDialog from 'a11y-dialog';

const getNextSibling = (elem, selector) => {
  const sibling = elem.nextElementSibling;

  if (!selector) {
    return sibling;
  };

  while (sibling) {
    if (sibling.matches(selector)) {
      return sibling;
    }

    sibling = sibling.nextElementSibling
  }
};

const init = element => {
  element.addEventListener('click', event => {
    event.preventDefault();

    const clonedDialogElement = getNextSibling(element, '.js-dialog').cloneNode(true);

    // clone element and append it to <body>
    document.body.append(clonedDialogElement);

    const dialog = new A11yDialog(clonedDialogElement);

    dialog.show();

    dialog.on('hide', () => {
      clonedDialogElement.remove();
    });
  });
};

export default init;
