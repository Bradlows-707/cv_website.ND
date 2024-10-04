// Smooth scrolling with offset
const links = document.querySelectorAll('nav a');
const headerHeight = document.querySelector('header').offsetHeight; // Get header height

links.forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault();
        const targetId = this.getAttribute('href').substring(1);
        const targetElement = document.getElementById(targetId);
        
        // Calculate the scroll position
        const scrollPosition = targetElement.getBoundingClientRect().top + window.scrollY - headerHeight;
        
        // Scroll to the position
        window.scrollTo({
            top: scrollPosition,
            behavior: 'smooth'
        });
    });
});
