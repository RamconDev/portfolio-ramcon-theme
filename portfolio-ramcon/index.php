<?php get_header(); ?>

<div id="index-page">
    <div class="container">
        <div class="row py-5">
            <div class="col-10">
                <h1><?php echo get_the_title(); ?></h1>
                <?php the_content(); ?>
            </div>
            <div class="col-2">
                <?php echo do_shortcode('[example_shortcode message="Holas shortcode"]'); ?>
            </div>
        </div>
    </div>
</div>
    
<?php get_footer(); ?>