(function (root, $, undefined) {
    $(document).ready(function () {
        console.log("Single script loaded");
        
        // $('#slider-single').slick({
        //     dots: true,
        //     arrows: false,
        //     infinite: false,
        //     speed: 300,
        //     slidesToShow: 1,
        //     adaptiveHeight: true,
        // });

         $('#slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '#slider-nav'
        });
        $('#slider-nav').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            asNavFor: '#slider-for',
            dots: false,
            centerMode: true,
            focusOnSelect: true
        });
  })
})(this, jQuery);