// main.js for Prime Insulation Website
// Add interactivity as needed 

document.addEventListener('DOMContentLoaded', function () {
  // Smooth scroll for nav links
  document.querySelectorAll('.nav-links a[href^="#"]').forEach(link => {
    link.addEventListener('click', function (e) {
      const targetId = this.getAttribute('href').slice(1);
      const target = document.getElementById(targetId);
      if (target) {
        e.preventDefault();
        window.scrollTo({
          top: target.offsetTop - 70, // adjust for sticky nav height
          behavior: 'smooth'
        });
      }
    });
  });

  // Mobile menu functionality
  const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
  const mainNav = document.querySelector('.main-nav');
  const body = document.body;

  if (mobileMenuBtn && mainNav) {
    mobileMenuBtn.addEventListener('click', function() {
      mobileMenuBtn.classList.toggle('active');
      mainNav.classList.toggle('active');
      body.style.overflow = mainNav.classList.contains('active') ? 'hidden' : '';
    });

    // Close menu when clicking outside
    document.addEventListener('click', function(event) {
      if (mainNav.classList.contains('active') && 
        !mainNav.contains(event.target) && 
        !mobileMenuBtn.contains(event.target)) {
        mobileMenuBtn.classList.remove('active');
        mainNav.classList.remove('active');
        body.style.overflow = '';
      }
    });

    // Close menu when clicking on a link
    const navLinks = document.querySelectorAll('.nav-links a');
    navLinks.forEach(link => {
      link.addEventListener('click', function() {
        mobileMenuBtn.classList.remove('active');
        mainNav.classList.remove('active');
        body.style.overflow = '';
      });
    });
  }

  // Set active state for bottom navigation
  const currentPage = window.location.pathname.split('/').pop();
  const bottomNavLinks = document.querySelectorAll('.bottom-nav-link');
  
  bottomNavLinks.forEach(link => {
    const linkPage = link.getAttribute('href');
    if (linkPage === currentPage) {
      link.classList.add('active');
    }
  });
}); 