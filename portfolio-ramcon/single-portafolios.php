<?php get_header(); ?>
<div id="single-portfolio">
    <?php /*********** 🧩 HERO SECTION ***********/ ?>
    <?php $bg_image = has_post_thumbnail() ? get_the_post_thumbnail_url() : get_template_directory_uri() . "/assets/images/default-img/bghero.png";?>
    <section class="hero" style="background-image: linear-gradient(180deg, rgba(26, 26, 26, 0.1) 0%, rgba(26, 26, 26, 0.1) 50%, rgba(26, 26, 26, 80%) 90%, rgba(26, 26, 26, 1) 100%),url(<?php echo $bg_image; ?>)">
        <div class="filter-gradient"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-left"><?php echo get_the_title(); ?></h1>          
                </div>
            </div>
        </div>
    </section>

    <?php /*********** 🧩 HERO DESCRIPTION ***********/ ?>
    <?php $gallery = get_field('slider_gallery'); ?>
    <section class="description py-5">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-12 col-md-6">
                    <h2>Technologies:</h2>

                    <?php $terms = get_the_terms(get_the_ID(), 'Tecnologias'); ?>
                    <?php if ($terms && !is_wp_error($terms)) : ?>
                        <ul class="portfolio-categories pt-3 pb-5">
                        <?php foreach ($terms as $term) : ?>
                            <?php
                            $color = get_field('text_color', 'Tecnologias_' . $term->term_id);
                            $bg_color = get_field('bg_color', 'Tecnologias_' . $term->term_id);
                            ?>
                            <li style="color:<?php echo $color; ?>;background-color:<?php echo $bg_color; ?>;"><?php echo esc_html($term->name); ?></li>
                        <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <h2>Description:</h2>
                    <?php the_content(); ?>
                </div>
                <!-- <div class="col-12 col-md-6 d-flex justify-content-center align-items-center mt-3 mt-md-0">
                    <div id="slider-single">

                    </div>
                </div> -->
                <div class="col-12 mt-3 mt-md-0">
                    <div id="slider-for">
                        <?php foreach($gallery as $item) : ?>
                            <?php if ( $item ) : ?>
                                <div>
                                    <img src="<?php echo $item; ?>" alt="" class="item">
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>

                    <div id="slider-nav" class="mt-3">
                        <?php foreach($gallery as $item) : ?>
                            <?php if ( $item ) : ?>
                                <div>
                                    <img src="<?php echo $item; ?>" alt="" class="item">
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>