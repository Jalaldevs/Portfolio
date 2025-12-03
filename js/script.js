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

