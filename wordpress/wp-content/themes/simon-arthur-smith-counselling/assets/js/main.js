// Globals
const GLOBALS = {
	scrollYPosition: 0,
	headerHideShowThreshold: 100,
  cookieBannerShowTimeout: 1000,
  acceptanceCookieLifetime: 7, //days
  acceptanceCookieName: 'sas-cookies-acceptance',
  emailRegex: new RegExp(/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/)
};
const updateScrollYPosition = () => GLOBALS.scrollYPosition = window.scrollY;
const getScrollDirection = () => window.scrollY > GLOBALS.scrollYPosition ? 'down' : 'up';
//props: { input: string }
const sanitiseInput = (input) => input.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;').replace(/'/g, '&#039;');

// Navigation
//props: { index: number }
const subNavigationShow = (index) => {
	const mainNavigation = document.getElementById('main-navigation'); 
	const subNavigations = mainNavigation.getElementsByClassName('sub-level-navigation');

	for (var a = 0; a < subNavigations.length; a++) {
		subNavigations[a].classList.add('-translate-y-full');
	}

	if (subNavigations[index]) {
    mainNavigation.classList.remove('shadow-lg');
		subNavigations[index].classList.remove('-translate-y-full');
	}
}
const subNavigationHide = () => {
	const mainNavigation = document.getElementById('main-navigation');
	const subNavigations = mainNavigation.getElementsByClassName('sub-level-navigation');

	for (var a = 0; a < subNavigations.length; a++) {
		subNavigations[a].classList.add('-translate-y-full');
	}

  mainNavigation.classList.add('shadow-lg');
}

// Header
const headerHideShow = () => {
	const header = document.getElementById('header');

	if (GLOBALS.scrollYPosition > GLOBALS.headerHideShowThreshold && getScrollDirection() === 'down') {
		header.classList.add('-translate-y-full');
	} else {
		header.classList.remove('-translate-y-full');
	}
}

// Cookie Banner
const cookieBannerShow = () => {
  const acceptanceCookieExists = getCookie(GLOBALS.acceptanceCookieName);

  if (!acceptanceCookieExists) {
    const cookieBanner = document.getElementById('cookie-banner');
    const cookieBannerContent = document.getElementById('cookie-banner-content');

    cookieBanner.classList.add('opacity-0');
    cookieBanner.classList.remove('hidden');

    setTimeout(() => {
      cookieBanner.classList.remove('opacity-0');
    }, 100);

    setTimeout(() => {
      cookieBannerContent.classList.remove('translate-y-full');
    }, GLOBALS.cookieBannerShowTimeout);
  }
}
const cookieBannerAccept = () => {
	const cookieBanner = document.getElementById('cookie-banner');

	cookieBanner.classList.add('opacity-0');

  setCookie(GLOBALS.acceptanceCookieName, 'true', GLOBALS.acceptanceCookieLifetime);
	setTimeout(() => {
		cookieBanner.classList.add('hidden');
	}, 500);
}
const cookieBannerDecline = () => {
	const cookieBanner = document.getElementById('cookie-banner');

	cookieBanner.classList.add('opacity-0');

  setCookie(GLOBALS.acceptanceCookieName, 'false', GLOBALS.acceptanceCookieLifetime);
	setTimeout(() => {
		cookieBanner.classList.add('hidden');
	}, 500);
}

// Cookies
//props: { name: string, value: string, days: number }
const setCookie = (name, value, days) => {
  var expires = "";

  if (days) {
    const date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    expires = "; expires=" + date.toUTCString();
  }

  document.cookie = name + "=" + (value || "") + expires + "; path=/";
}
// props: { name: string }
const getCookie = (name) => {
  const nameEQ = name + "=";
  const ca = document.cookie.split(';');

  for(var i = 0; i < ca.length; i++) {
    var c = ca[i];

    while (c.charAt(0) === ' ') {
      c = c.substring(1, c.length);
    }

    if (c.indexOf(nameEQ) === 0) {
      return c.substring(nameEQ.length, c.length);
    }
  }

  return null;
}

// Forms
//props: { event: Event }
const handleInputFocus = (event) => {
  const input = event.currentTarget || event.target;

  const form = input.closest('form');
  const errorMessage = input.nextElementSibling;
  const inputs = form.getElementsByTagName('input');
  const textAreas = form.getElementsByTagName('textarea');
  const allInputs = [...inputs, ...textAreas];

  if (errorMessage) {
    errorMessage.classList.remove('opacity-100');
    errorMessage.classList.add('opacity-0');
    setTimeout(() => {
      errorMessage.classList.add('hidden');
    }, 200);
  }

  for (const input of allInputs) {
    input.classList.remove('border-blue-200');
  }

  input.classList.remove('border-red-200');
  input.classList.remove('border-green-200');
  input.classList.remove('border-slate-200');
  input.classList.add('border-blue-200');
};
//props: { event: Event }
const handleInputBlur = (event) => {
  const input = event.currentTarget || event.target;
  const value = input.value;
  const form = input.closest('form');
  const inputType = input.getAttribute('type');
  const errorMessage = input.nextElementSibling;
  const hasError = getInputHasError(value, inputType);

  if (hasError) {
    if (errorMessage) {
      errorMessage.classList.remove('hidden');

      setTimeout(() => {
        errorMessage.classList.add('opacity-100');
        errorMessage.classList.remove('opacity-0');
      }, 10);
    }

    input.classList.remove('border-blue-200');
    input.classList.remove('border-green-200');
    input.classList.remove('border-slate-200');
    input.classList.add('border-red-200');

    return;
  }

  if (errorMessage) {
    errorMessage.classList.remove('opacity-100');
    errorMessage.classList.add('opacity-0');
    
    setTimeout(() => {
      errorMessage.classList.add('hidden');
    }, 200);
  }

  input.classList.remove('border-red-200');
  input.classList.remove('border-blue-200');
  input.classList.remove('border-slate-200');
  input.classList.add('border-green-200');
};
//props: { value: string, inputType: string }
const getInputHasError = (value, inputType) => {
  switch (inputType) {
    case 'email':
      return !GLOBALS.emailRegex.test(value)
    case 'text':
      return value.length <= 2;
    default:
      return true;
  }
};
//props: { event: Event }
const handleContactFormSubmit = (event) => {
  event.preventDefault();

  const form = event.currentTarget || event.target;
  const loadingScreen = form.getElementsByClassName('loading')[0];
  const successScreen = form.getElementsByClassName('success')[0];
  const errorScreen = form.getElementsByClassName('error')[0];
  const formData = new FormData(form);
  const submissionData = {};
  const error = false;

  loadingScreen.classList.remove('hidden');

  setTimeout(() => {
    loadingScreen.classList.remove('opacity-0');
    loadingScreen.classList.add('opacity-100');

    for (const [key, value] of formData.entries()) {
      submissionData[key] = sanitiseInput(value);
    }

    console.log(submissionData);
  }, 10);

  setTimeout(() => {
    loadingScreen.classList.remove('opacity-100');
    loadingScreen.classList.add('opacity-0');

    setTimeout(() => {
      loadingScreen.classList.add('hidden');

      if (error) {
        errorScreen.classList.remove('hidden');

        setTimeout(() => {
          errorScreen.classList.remove('opacity-0');
          errorScreen.classList.add('opacity-100');
        }, 10);
      } else {
        successScreen.classList.remove('hidden');

        setTimeout(() => {
          successScreen.classList.remove('opacity-0');
          successScreen.classList.add('opacity-100');
        }, 10);
      }
    }, 200);
    
  }, 1000);
};
//props: { event: Event }
const handleSuccessClose = (event) => {
  const target = event.currentTarget || event.target;
  const form = target.closest('form');
  const inputs = form.getElementsByTagName('input');
  const textAreas = form.getElementsByTagName('textarea');
  const success = form .getElementsByClassName('success')[0];
  const allInputs = [...inputs, ...textAreas];

  for (const input of allInputs) {
    input.value = '';
    input.classList.remove('border-red-200');
    input.classList.remove('border-blue-200');
    input.classList.remove('border-green-200');
    input.classList.add('border-slate-200');
  }

  success.classList.remove('opacity-100');
  success.classList.add('opacity-0');

  setTimeout(() => {
    success.classList.add('hidden');
  }, 200);
}
//props: { event: Event }
const handleErrorClose = (event) => {
  const target = event.currentTarget || event.target;
  const form = target.closest('form');
  const error = form.getElementsByClassName('error')[0];

  error.classList.remove('opacity-100');
  error.classList.add('opacity-0');

  setTimeout(() => {
    error.classList.add('hidden');
  }, 200);
}

// Event Listeners
window.addEventListener('DOMContentLoaded', () => {
	cookieBannerShow();
});
window.addEventListener('scroll', () => {
	headerHideShow();
	updateScrollYPosition();
});