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
            beforeSend: function() {
                $('.wrap-projetcs').html('<p style="color:#fff;">Loading...</p>');
            },
            success: function(response) {
                $('.wrap-projetcs').html(response);
            }
        });
    });


    $(document).ready(function () {


    });

})(this, jQuery);