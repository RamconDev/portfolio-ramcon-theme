<?php
function filter_posts_by_tech() {

    $tech_id = intval($_POST['tech_id']);

    $args = array(
        'post_type' => 'portafolios',
        'posts_per_page' => -1,
        'tax_query' => array(
            array(
                'taxonomy' => 'Tecnologias',
                'field'    => 'term_id',
                'terms'    => $tech_id,
            )
        )
    );

    $loop = new WP_Query($args);

    while( $loop->have_posts() ) : $loop->the_post();
    ?>
    <div class="item" data-tech="<?php echo $str_terms_id; ?>" style="background-image: url(<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/assets/images/default-img/center.jpg'; ?>)">
        <div class="wrap-content">
            <h3 class="text-center"><?php echo get_the_title(); ?></h3>
            <div class="c-button">
                <a href="<?php echo get_the_permalink(); ?>" class="btn_primary">View More</a>
            </div>
        </div>
    </div>
    <?php endwhile;
    wp_reset_postdata();
}
add_action('wp_ajax_filter_posts_by_tech', 'filter_posts_by_tech');
add_action('wp_ajax_nopriv_filter_posts_by_tech', 'filter_posts_by_tech');