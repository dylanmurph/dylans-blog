document.addEventListener('DOMContentLoaded', function () {
    const loginLink = document.querySelector('.login-link');
    const loginDropdownMenu = loginLink.nextElementSibling;

    if (loginLink && loginDropdownMenu) {
        loginLink.addEventListener('click', function (event) {
            event.preventDefault();
            loginDropdownMenu.classList.toggle('hidden');
        });

        document.addEventListener('click', function (event) {
            if (!loginLink.contains(event.target) && !loginDropdownMenu.contains(event.target) && !loginDropdownMenu.classList.contains('hidden')) {
                loginDropdownMenu.classList.add('sliding-up');
                setTimeout(() => {
                    loginDropdownMenu.classList.add('hidden');
                    loginDropdownMenu.classList.remove('sliding-up');
                }, 200);
            }
        });
    }
});
