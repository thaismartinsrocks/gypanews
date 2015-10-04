$(document).ready(function() {

    var Main = Main || {};

    Main = {
        init:  function() {
            this.slides();
        },
        slides: function() {
            $('.featured').specialSlider();
            $('.slide').specialSlider({animation: 'fade'});
        },
    };

    Main.init();
});