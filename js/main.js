$(document).ready(function() {

    var Main = Main || {};

    Main = {
        init:  function() {
            this.featuredSlide();
        },
        featuredSlide: function() {

            // Hide Others
            $('.featured ul li').each(function(index, elem) {
                if(index > 0)
                    elem.style.display = 'none';
                else
                    elem.setAttribute("class", "active");
            });

            var currentIndex = $('.featured ul li.active').index();
            var totalIndexes =  parseInt($('.featured ul li').length) - 1;

            // Prev Button
            $('.featured .button-prev').click(function() {

                var newIndex = currentIndex - 1;

                if(newIndex < 0)
                    newIndex = totalIndexes;

                showIndex(newIndex);
                currentIndex = newIndex;
            });

            // Next Button
            $('.featured .button-next').click(function() {
                nextCurrent();
            });

            var showIndex = function(newIndex) {
                $('.featured ul li.active').removeClass('active').hide();
                $('.featured ul li:eq(' + newIndex + ')').addClass('active').slideDown();
            };

            var nextCurrent = function() {

                var newIndex = currentIndex + 1;
                if(newIndex > totalIndexes)
                    newIndex = 0;

                showIndex(newIndex);
                currentIndex = newIndex;
            };

            // Slide Play
            setInterval(nextCurrent, 5000);
        },

    };

    Main.init();
});