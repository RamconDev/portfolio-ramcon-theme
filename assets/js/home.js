(function (root, $, undefined) {
    $('.filter-tech').on('click', function() {
        let techID = $(this).data('tech');

        $.ajax({
            url: data.ajax_url,
            type: 'POST',
            data: {
                action: 'filter_posts_by_tech',
                tech_id: techID
            },
            // beforeSend: function() {
            //     // $('.wrap-projetcs').html('<p style="color:#fff;">Loading...</p>');
            //     $('.wrap-projetcs').css({
            //         'filter': 'blur(5px)',
            //     })
            // },
            // success: function(response) {
            //     $('.wrap-projetcs').html(response);
            //     $('.wrap-projetcs').css({
            //         'filter': 'blur(0px)'
            //     })
            // }
            beforeSend: function() {
                $('.wrap-projetcs .item').css({ 'filter': 'blur(5px)' });
                $('.wrap-projetcs').append('<p class="loading-overlay" >Loading...</p>');
                $('.wrap-projetcs .item').css({ 
                    'filter': 'blur(5px)' 
                });
                $('.wrap-projetcs .loading-overlay').css({ 
                    'position': 'absolute', 
                    'top': '200px',
                    'left': '50%',
                    'transform': 'translate(-50%)',
                    'filter': 'blur(-5px)',
                    'color': '#fff',
                });
            },
            success: function(response) {
            $('.wrap-projetcs').html(response);
            $('.wrap-projetcs .item').css({ 'filter': 'blur(0px)' });
            $('.loading-overlay').remove();
            }

        });
    });


    $(document).ready(function () {


    });

})(this, jQuery);