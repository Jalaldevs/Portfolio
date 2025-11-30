// // Hero Mouse Pointer
// let mouseX = 0;
// let mouseY = 0;

// const pointer = document.querySelector('.pointer');

// if (pointer) {
    
//     window.addEventListener('mousemove', (e) => {
//         mouseX = e.clientX;
//         mouseY = e.clientY;

//         pointer.style.setProperty('--mouseX', `${mouseX}px`);
//         pointer.style.setProperty('--mouseY', `${mouseY}px`);
//     });
// }
// Header section script 

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

// About section script

const githubLogo = document.querySelector('.js-about-github-link');

githubLogo.style.cursor = 'pointer';

githubLogo.addEventListener('click', () => {
    window.open('https://github.com/Jalaldevs/', '_blank');
});


// Contact section script 

const form = document.getElementById('form');

form.addEventListener('submit', (e) => {
    e.preventDefault();

    // Grab elements
    if (!form) return;
    // select only form controls (exclude submit buttons and checkboxes from field border handling)
    const fields = form.querySelectorAll('input:not([type=submit]):not([type=checkbox]), select, textarea');
    const spanError = document.getElementById('js-validations-errors');
    const fullNameEl = document.getElementById('fullName');
    const emailEl = document.getElementById('email');
    const projectTypeEl = document.getElementById('projectType');
    const messageEl = document.getElementById('message');
    const checkboxEl = document.getElementById('checkbox');

    // Grab values
    const fullName = fullNameEl.value.trim();
    const email = emailEl.value.trim();
    const projectType = projectTypeEl.value;
    const message = messageEl.value.trim();
    const agree = checkboxEl.checked;
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    fields.forEach(el => {
        el.style.border = '';
    });

    function validateField(field) {
        const value = field.value.trim();
        switch(field.id) {
            case 'fullName':
                field.style.border = value.length >= 2 ? '' : '1px solid red';
                break;
            case 'email':
                field.style.border = emailRegex.test(value) ? '' : '1px solid red';
                break;
            case 'projectType':
                field.style.border = value ? '' : '1px solid red';
                break;
            case 'message':
                field.style.border = value.length >= 20 ? '' : '1px solid red';
                break;
        }
    }

    fields.forEach(field => {
        field.addEventListener('input', () => validateField(field));
    });

    // Validating values

    let isValid = true;
    const errors = [];

    if(fullName.length < 2){
        isValid = false;
        errors.push("Full Name must be at least 2 characters.");
        fullNameEl.style.border = "1px solid red";
    }
    if(!emailRegex.test(email)){
        isValid = false;
        errors.push("Please enter a valid email address.");
        emailEl.style.border = "1px solid red";
    }
    if(!projectType){
        isValid = false;
        errors.push("Please select a project type.");
        projectTypeEl.style.border = "1px solid red";
    }
    if(message.length < 20){
        isValid = false;
        errors.push("Message must be at least 20 characters.");
        messageEl.style.border = "1px solid red";
    }
    if(!agree){
        isValid = false;
        errors.push("You must agree to the Privacy Policy.");
    }

});
