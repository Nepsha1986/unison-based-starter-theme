function mobileMenuInit(){
    (function ($) {
        $(document).ready(function () {
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
}

export { mobileMenuInit }