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

            // Menu Mobile
            $(document).on('click', '.mobile-menu .menu', function() {
                var menu = $(this).parent();
                var parent = menu.parent();

                if(!menu.hasClass('active')) {
                    parent.find('ul').stop().slideDown();
                    menu.addClass('active');
                } else {
                    parent.find('ul').stop().slideUp();
                    menu.removeClass('active');
                }
            });

            if(Main.isMobile()) {
                Main.reorderAds();
            }
        },
        reorderAds: function() {
            $('.ads').each(function() {

                var content = $(this);
                var ads = $(this).find('.ad');
                var total = ads.length - 1;
                var current = 0;

                ads.hide();
                ads.eq(current).show();

                setInterval(function() {

                    var next = current + 1;
                    if(next > total)
                        next = 0;

                    content.find('.ad:eq(' + current + ')').fadeOut(100);
                    content.find('.ad:eq(' + next + ')').fadeIn(300);

                    current = next;

                }, 5000);
            });
        },
        isMobile: function() {
            var widthPage = $(window).width() + 17;
            return (widthPage < 768);
        }
    };

    Main.init();
});