(function (root, $, undefined) {
    $(document).ready(function () {

        $('.projetcs-items').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        dots: true,
        prevArrow: '<img class="prevArrow" src="' + data.templateUrl + '/assets/images/icons/arrow-left.svg">',
        nextArrow: '<img class="nextArrow" src="' + data.templateUrl + '/assets/images/icons/arrow-right.svg">',
        autoplay: true,
        autoplaySpeed: 3000,
        responsive: [
            {
            breakpoint: 992,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
            }
        ]
        });
    });
    

})(this, jQuery);