document.addEventListener('DOMContentLoaded', function () {
    const reviewsToggle = document.getElementById('reviews-toggle');
    const reviewsDropdownMenu = reviewsToggle.nextElementSibling;

    if (reviewsToggle && reviewsDropdownMenu) {
        reviewsToggle.addEventListener('click', function (event) {
            event.preventDefault();
            reviewsDropdownMenu.classList.toggle('hidden');
        });

        document.addEventListener('click', function (event) {
            if (!reviewsToggle.contains(event.target) && !reviewsDropdownMenu.contains(event.target) && !reviewsDropdownMenu.classList.contains('hidden')) {
                reviewsDropdownMenu.classList.add('sliding-up');
                setTimeout(() => {
                    reviewsDropdownMenu.classList.add('hidden');
                    reviewsDropdownMenu.classList.remove('sliding-up');
                }, 200);
            }
        });
    }
});
