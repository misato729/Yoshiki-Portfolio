document.addEventListener('DOMContentLoaded', () => {
    const menuBtn = document.querySelector('.menu-button');
    const mobileNav = document.querySelector('.mobile-nav');

    menuBtn?.addEventListener('click', () => {
      mobileNav?.classList.toggle('active');
    });
  });