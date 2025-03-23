document.addEventListener('DOMContentLoaded', function () {
    const mobileMenuButton = document.querySelector('.mobile-menu-button');
    const mobileMenu = document.querySelector('.mobile-menu');

    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', function () {
            mobileMenu.classList.toggle('show');
            document.body.classList.toggle('no-scroll');
        });
    }
});
