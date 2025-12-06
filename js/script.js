// HEAEDER SECTION STARTS
const openMenu = document.querySelector('.hamburger-menu');
const nav = document.querySelector('.nav');
const navUl = document.querySelector('.nav_ul');
const navList = document.querySelector('.nav_li');
const navLinks = document.querySelectorAll('.nav_link');
const contactLink = document.querySelector('.contact-toggle');

function hamburgerMenuInnerLogic() {
    openMenu.classList.toggle('js-menu-opened');
    nav.classList.toggle('js-nav-menu-opened');
    navUl.classList.toggle('js-navUl-menu-opened');
    navList.classList.toggle('js-navList-menu-opened');
    navLinks.forEach((link) => 
    link.classList.toggle('js-navLinks-menu-opened'));
    contactLink.classList.toggle('contact-toggle');
}

openMenu.addEventListener('click', () => {
    document.body.classList.toggle('js-body-state');
    hamburgerMenuInnerLogic();
});

navLinks.forEach((link) => {
    link.addEventListener('click', () => {
        if (openMenu.classList.contains('js-menu-opened')) {
            document.body.style.overflow = 'visible';
            hamburgerMenuInnerLogic();
        }
    });
});

const mediaQuery = window.matchMedia("(min-width: 850px)");

mediaQuery.addEventListener("change", () => {
    if (mediaQuery.matches) {
        if (openMenu.classList.contains('js-menu-opened')) {
            document.body.style.overflow = 'visible';
            hamburgerMenuInnerLogic();
        }
    }
})

// ABOUT SECTION STARTS
const githubLogo = document.querySelector('.js-about-github-link');

githubLogo.style.cursor = 'pointer';

githubLogo.addEventListener('click', () => {
    window.open('https://github.com/Jalaldevs/', '_blank');
});


// CONTACT SECTION STARTS
const form = document.getElementById('form');
const fields = document.querySelectorAll('.js-form-element')
const nameEl = document.getElementById('name');
const emailEl = document.getElementById('email');
const companyNameEl = document.getElementById('companyName');
const projectTypeEl = document.getElementById('projectType');
const messageEl = document.getElementById('message');
const checkboxEl = document.getElementById('checkbox');

// GRAB INPUT VALUES
const name = nameEl.value.trim();
const email = emailEl.value.trim();
const projectType = projectTypeEl.value;
const message = messageEl.value.trim();
const agree = checkboxEl.checked;
const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

// PHP ERROR MESSAGES
const nameErrorMessagePHP = document.querySelector('.js-name-error-message');
const emailErrorMessagePHP = document.querySelector('.js-email-error-message');
const companyNameErrorMessagePHP = document.querySelector('.js-companyName-error-message');
const projectTypeErrorMessagePHP = document.querySelector('.js-projectType-error-message');
const messageErrorMessagePHP = document.querySelector('.js-message-error-message');
const checkBoxErrorMessagePHP = document.querySelector('.js-checkBox-error-message');


function validateField(field) {
    const value = field.value.trim();
    switch (field.id) {
        case 'name':
            if (value.length >= 2) {
                field.classList.remove('php-input-error');
                field.classList.add('js-input-valid');
                nameErrorMessagePHP.textContent = '';
            } else {
                field.classList.remove('js-input-valid');
                field.classList.add('php-input-error');
                nameErrorMessagePHP.textContent = 'At least 2 characters.';
            }
            break;
        case 'email':
            if (emailPattern.test(value)) {
                field.classList.remove('php-input-error');
                field.classList.add('js-input-valid');
                emailErrorMessagePHP.textContent = '';
            } else {
                field.classList.remove('js-input-valid');
                field.classList.add('php-input-error');
                emailErrorMessagePHP.textContent = 'Invalid email.';
            }
            break;
        case 'projectType':
            if (value !== '') {
                field.classList.remove('php-input-error');
                field.classList.add('js-input-valid');
                projectTypeErrorMessagePHP.textContent = '';
            } else {
                field.classList.remove('js-input-valid');
                field.classList.add('php-input-error');
                projectTypeErrorMessagePHP.textContent = 'Must select project.';
            }
            break;
        case 'message':
            if (value.length <= 50) {
                field.classList.remove('php-input-error');
                field.classList.add('js-input-valid');
                messageErrorMessagePHP.textContent = 'At least 50 characters.';
            } else {
                field.classList.remove('js-input-valid');
                field.classList.add('php-input-error');
                messageErrorMessagePHP.textContent = '';
            }
            break;
        case 'checkbox':
            if (field.checked) {
                checkBoxErrorMessagePHP.textContent = '';
            } else {
                checkBoxErrorMessagePHP.textContent = '<-- Must agree!!';
            }
            break;
    }
}

fields.forEach(field => {
    [nameEl, emailEl, companyNameEl, messageEl].forEach(el => el.addEventListener('input', () => validateField(field)));
    [projectTypeEl, checkboxEl].forEach(el => el.addEventListener('click', () => validateField(field)));
});


