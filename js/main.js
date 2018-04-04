(function ($) {
    $(document).ready(function () {
        /**
         * Mobile menu
         */

        $('.open-menu-btn').on('click', function (e) {
            e.preventDefault();
            $('.main-navigation').addClass('mobile-active');
        });

        $('.close-menu-btn').on('click', function (e) {
            e.preventDefault();
            $('.main-navigation').removeClass('mobile-active');
        })
    });
})(jQuery);