<?php
function filter_posts_by_tech() {

    $tech_id = isset($_POST['tech_id']) ? intval($_POST['tech_id']) : 0;

    $limit = $tech_id != 0 ? -1 : 6;

    $args = array(
        'post_type' => 'portafolios',
        'posts_per_page' => $limit,
        'order'      => 'DESC'
    );

    if ($tech_id != 0)
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'Tecnologias',
                'field'    => 'term_id',
                'terms'    => $tech_id,
            )
        );



    $loop = new WP_Query($args);

    while( $loop->have_posts() ) : $loop->the_post(); ?>
    <div class="item" data-tech="<?php echo $str_terms_id; ?>">    
        <a href="<?php echo get_the_permalink(); ?>">
            <div class="wrap-thumbnail" style="background-image: url(<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/assets/images/default-img/center.jpg'; ?>)">

            </div>
            <div class="wrap-content">
                <h3><?php echo get_the_title(); ?></h3>
                <p class="excerpt">
                    <?php echo get_the_excerpt(); ?>
                </p>
                <?php $terms = get_the_terms(get_the_ID(), 'Tecnologias'); ?>
                    <?php 
                        if ( $terms && !is_wp_error($terms) ): 
                            usort($terms, function($a, $b) {
                                return $a->term_id - $b->term_id;
                            });
                    ?>
                    <ul class="categories">
                        <?php foreach ($terms as $term): ?>
                            <?php
                                $color = get_field('text_color', 'Tecnologias_' . $term->term_id);
                                $bg_color = get_field('bg_color', 'Tecnologias_' . $term->term_id);
                            ?>
                            <li class="item-cat" style="color:<?php echo $color; ?>;background-color:<?php echo $bg_color; ?>"><?php echo esc_html($term->name); ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif ?>
            </div>
        </a>
    </div>
    <?php endwhile;
    wp_reset_postdata();
}
add_action('wp_ajax_filter_posts_by_tech', 'filter_posts_by_tech');
add_action('wp_ajax_nopriv_filter_posts_by_tech', 'filter_posts_by_tech');