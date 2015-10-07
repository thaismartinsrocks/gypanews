$(document).ready(function() {

    var Main = Main || {};

    Main = {
        init:  function() {
            this.slides();
            this.mobile();
        },
        slides: function() {
            $('.featured').specialSlider();
            $('.slide').specialSlider({animation: 'fade'});
        },
        mobile: function () {

            $(document).on('click', '.mobile-menu', function() {

                if(!$(this).hasClass('active')) {
                    $(this).parent().find('ul').stop().slideDown();
                    $(this).addClass('active');
                } else {
                    $(this).parent().find('ul').stop().slideUp();
                    $(this).removeClass('active');
                }
            });
        }
    };

    Main.init();
});