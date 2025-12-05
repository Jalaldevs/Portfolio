// HEADER SECTION STARTS
const openMenu = document.querySelector('.hamburger-menu');
const nav = document.querySelector('.nav');
const navUl = document.querySelector('.nav_ul');
const navList = document.querySelector('.nav_li');
const navLinks = document.querySelectorAll('.nav_link');
const contactLink = document.querySelector('.contact-toggle');

openMenu.addEventListener('click', () => {
    const isOpened = openMenu.classList.toggle('js-menu-opened');

    nav.classList.toggle('js-nav-menu-opened');
    navUl.classList.toggle('js-navUl-menu-opened');
    navList.classList.toggle('js-navList-menu-opened');
    navLinks.forEach((link) => link.classList.toggle('js-navLinks-menu-opened'));
    document.body.style.overflow = isOpened ? 'hidden' : 'visible';
    contactLink.classList.toggle('contact-toggle');
});

navLinks.forEach((link) => {
    link.addEventListener('click', () => {
        openMenu.classList.remove('js-menu-opened');
        nav.classList.remove('js-nav-menu-opened');
        navUl.classList.remove('js-navUl-menu-opened');
        navList.classList.remove('js-navList-menu-opened');
        navLinks.forEach((link) => link.classList.remove('js-navLinks-menu-opened'));
        document.body.style.overflow = 'visible';
    });
});

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
const projectTypeEl = document.getElementById('projectType');
const messageEl = document.getElementById('message');
const checkboxEl = document.getElementById('checkbox');

// GRAB INPUT VALUES
const name = nameEl.value.trim();
const email = emailEl.value.trim();
const projectType = projectTypeEl.value;
const message = messageEl.value.trim();
const agree = checkboxEl.checked;

// PHP ERROR MESSAGES
const nameErrorMessagePHP = document.querySelector('.js-name-error-message');
const emailErrorMessagePHP = document.querySelector('.js-emain-error-message');
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
            if (field.checkValidity()) {
                field.classList.remove('php-input-error');
                field.classList.add('js-input-valid');
                emailErrorMessagePHP.textContent = '';
            } else {
                field.classList.remove('js-input-valid');
                field.classList.add('php-input-error');
                emailErrorMessagePHP.textContent = 'Invalid email.';
            }
            break;
        case 'companyName':
            if (value.length > 30) {
                field.classList.remove('php-input-error');
                field.classList.add('js-input-valid');
                projectTypeErrorMessagePHP.textContent = '';
            } else {
                field.classList.remove('js-input-valid');
                field.classList.add('php-input-error');
                projectTypeErrorMessagePHP.textContent = 'Less than 30 chars.';
            }
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
            if (value.length >= 50) {
                field.classList.remove('php-input-error');
                field.classList.add('js-input-valid');
                messageErrorMessagePHP.textContent = '';
            } else {
                field.classList.remove('js-input-valid');
                field.classList.add('php-input-error');
                messageErrorMessagePHP.textContent = 'At least 50 characters.';
            }
            break;
    }
}


fields.forEach(field => {
    field.addEventListener('input', () => validateField(field));
})
