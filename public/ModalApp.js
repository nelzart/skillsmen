const triggers = document.querySelectorAll('[aria-haspopup="dialog"]');
const doc = document.querySelector('.js-document');
const focusableElementsArray = [
  '[href]',
  'button:not([disabled])',
  'input:not([disabled])',
  'select:not([disabled])',
  'textarea:not([disabled])',
  '[tabindex]:not([tabindex="-1"])',
];
const keyCodes = {
  tab: 9,
  enter: 13,
  escape: 27,
};

const open = function (dialog) {
  const focusableElements = dialog.querySelectorAll(focusableElementsArray);
  const firstFocusableElement = focusableElements[1];
  const lastFocusableElement = focusableElements[focusableElements.length -5];

  dialog.setAttribute('aria-hidden', false);
  doc.setAttribute('aria-hidden', true);

  // return if no focusable element
  if (!firstFocusableElement) {
    return;
  }

  window.setTimeout( () => {
    firstFocusableElement.focus();

    // trapping focus inside the dialog
    focusableElements.forEach((focusableElement) => {
      if (focusableElement.addEventListener) {
        focusableElement.addEventListener('keydown', (event) => {
          const tab = event.which === keyCodes.tab;

          if (!tab) {
            return;
          }

          if (event.shiftKey) {
            if (event.target === firstFocusableElement) { // shift + tab
              event.preventDefault();

              lastFocusableElement.focus();
            }
          } else if (event.target === lastFocusableElement) { // tab
            event.preventDefault();

            firstFocusableElement.focus();
          }
        });
      }
    });
  }, 1);
};

const close = function (dialog, trigger) {
  dialog.setAttribute('aria-hidden', true);
  doc.setAttribute('aria-hidden', false);

  // restoring focus
  trigger.focus();
};

triggers.forEach((trigger) => {
  const dialog = document.getElementById(trigger.getAttribute('aria-controls'));
  const dismissTriggers = dialog.querySelectorAll('[data-dismiss]');

  // open dialog
  trigger.addEventListener('click', (event) => {
    event.preventDefault();

    open(dialog);
  });

  trigger.addEventListener('keydown', (event) => {
    if (event.which === keyCodes.enter) {
      event.preventDefault();

      open(dialog);
    }  
  });

  // close dialog
  dialog.addEventListener('keydown', (event) => {
    if (event.which === keyCodes.escape) {
      close(dialog, trigger);
    }      
  });

  dismissTriggers.forEach((dismissTrigger) => {
    const dismissDialog = document.getElementById(dismissTrigger.dataset.dismiss);

    dismissTrigger.addEventListener('click', (event) => {
      event.preventDefault();

      close(dismissDialog, trigger);
    });
  });

  window.addEventListener('click', (event) => {
    if (event.target === dialog) {
      close(dialog, trigger);
    }
  }); 
});

const login = document.getElementById('login');
const signup = document.getElementById('signup');
const change1 = document.getElementById('change1');
const change2 = document.getElementById('change2');

change1.addEventListener('click', (e) => {
signup.style.display = 'none';
login.style.display = 'flex';
});

change2.addEventListener('click', (e) => {
login.style.display = 'none';
signup.style.display = 'flex';
});