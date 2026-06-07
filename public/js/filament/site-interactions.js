document.addEventListener('DOMContentLoaded', function () {
    const filterWrap = document.getElementById('productFilter');

    if (filterWrap) {
        const buttons = filterWrap.querySelectorAll('button[data-filter]');
        const products = document.querySelectorAll('.product-item-page[data-category]');

        buttons.forEach(function (button) {
            button.addEventListener('click', function () {
                const filter = button.dataset.filter;

                buttons.forEach(function (item) {
                    item.classList.remove('active');
                });

                button.classList.add('active');

                products.forEach(function (product) {
                    const isMatch = filter === 'all' || product.dataset.category === filter;
                    product.classList.toggle('is-hidden', !isMatch);
                });
            });
        });
    }

    document.querySelectorAll('.product-card').forEach(function (card) {
        card.setAttribute('tabindex', '0');

        card.addEventListener('click', function () {
            window.location.href = '/produk';
        });

        card.addEventListener('keydown', function (event) {
            if (event.key === 'Enter') {
                window.location.href = '/produk';
            }
        });
    });

    document.querySelectorAll('.article-card-page').forEach(function (card) {
        card.setAttribute('tabindex', '0');

        card.addEventListener('click', function () {
            window.location.href = '/artikel/detail';
        });

        card.addEventListener('keydown', function (event) {
            if (event.key === 'Enter') {
                window.location.href = '/artikel/detail';
            }
        });
    });
});