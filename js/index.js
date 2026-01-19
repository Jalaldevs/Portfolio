function toggleTheme() {
    const html = document.documentElement;
    const current = html.getAttribute('data-theme');
    const next = current === 'dark' ? 'light' : 'dark';
    html.setAttribute('data-theme', next);
    localStorage.setItem('theme', next);
    
    const icon = document.querySelector('.theme-btn i');
    icon.className = next === 'dark' ? 'fas fa-sun' : 'fas fa-moon';
}
function toggleNav() {
    const nav = document.getElementById('nav');
    const toggle = document.querySelector('.mobile-toggle');
    nav.classList.toggle('active');
    toggle.classList.toggle('active');
}
// Load saved theme
const savedTheme = localStorage.getItem('theme') || 'dark';
document.documentElement.setAttribute('data-theme', savedTheme);
document.querySelector('.theme-btn i').className = savedTheme === 'dark' ? 'fas fa-sun' : 'fas fa-moon';
// Close mobile menu on link click
document.querySelectorAll('nav a').forEach(link => {
    link.addEventListener('click', () => {
        document.getElementById('nav').classList.remove('active');
        document.querySelector('.mobile-toggle').classList.remove('active');
    });
});
function toggleFaq(element) {
    const faqItem = element.parentElement;
    const allFaqs = document.querySelectorAll('.faq-item');
    
    // Cerrar todos los demás FAQs
    allFaqs.forEach(item => {
        if (item !== faqItem) {
            item.classList.remove('active');
        }
    });
    
    // Toggle el FAQ clickeado
    faqItem.classList.toggle('active');
}