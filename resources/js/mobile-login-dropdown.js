document.addEventListener('DOMContentLoaded', function () {
    const mobileLoginLink = document.querySelector('.mobile-menu .login-link');
    const mobileLoginDropdownMenu = mobileLoginLink ? mobileLoginLink.nextElementSibling : null;

    if (mobileLoginLink && mobileLoginDropdownMenu) {
        mobileLoginLink.addEventListener('click', function (event) {
            event.preventDefault();
            mobileLoginDropdownMenu.classList.toggle('hidden');
        });

        document.addEventListener('click', function (event) {
            if (!mobileLoginLink.contains(event.target) && !mobileLoginDropdownMenu.contains(event.target) && !mobileLoginDropdownMenu.classList.contains('hidden')) {
                mobileLoginDropdownMenu.classList.add('sliding-up');
                setTimeout(() => {
                    mobileLoginDropdownMenu.classList.add('hidden');
                    mobileLoginDropdownMenu.classList.remove('sliding-up');
                }, 200);
            }
        });
    }
});
