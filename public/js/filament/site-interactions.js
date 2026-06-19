document.addEventListener('DOMContentLoaded', function () {
    const filterButtons = document.querySelectorAll('#productFilter button');
    const productItems = document.querySelectorAll('.product-item-page');
    const productHeadings = document.querySelectorAll('.product-group-heading');

    filterButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            const selectedFilter = button.getAttribute('data-filter');

            filterButtons.forEach(function (btn) {
                btn.classList.remove('active');
            });

            button.classList.add('active');

            productItems.forEach(function (item) {
                const itemCategory = item.getAttribute('data-category');

                if (selectedFilter === 'all' || itemCategory === selectedFilter) {
                    item.hidden = false;
                } else {
                    item.hidden = true;
                }
            });

            productHeadings.forEach(function (heading) {
                const headingCategory = heading.getAttribute('data-category');

                if (selectedFilter === 'all' || headingCategory === selectedFilter) {
                    heading.hidden = false;
                } else {
                    heading.hidden = true;
                }
            });
        });
    });
});