// Simple JS for contact form handling and smooth scroll active link

// Contact form submission
function handleSubmit(e) {
    e.preventDefault();
    const status = document.getElementById('form-status');
    status.textContent = 'Message sent successfully!';
    e.target.reset();
    setTimeout(() => { status.textContent = ''; }, 3000);
}

// Highlight active nav link on scroll
window.addEventListener('scroll', () => {
    const sections = document.querySelectorAll('.section, .hero');
    const navLinks = document.querySelectorAll('.nav-links a');
    let current = '';

    sections.forEach(section => {
        const top = section.offsetTop - 100;
        if (window.scrollY >= top) {
            current = section.getAttribute('id');
        }
    });

    navLinks.forEach(link => {
        link.style.color = '';
        if (link.getAttribute('href') === '#' + current) {
            link.style.color = '#fff';
        }
    });
});
