<?php
    /**
     * Template Name: Home Template
     */
?>
<?php get_header(); ?>


<div id="home">
    <?php /*********** 🧩 HERO SECTION ***********/ ?>
    <?php $f_hero = get_field('hero'); ?>
    <section class="hero" style="background-image: url(<?php echo !isset($f_hero['bg_image']) || !$f_hero['bg_image'] ? get_template_directory_uri() . "/assets/images/default-img/bghero.png" : $f_hero['bg_image']; ?>);">
        <div class="container">
            <div class="row">
                <?php if (isset($f_hero['title']) & $f_hero['title'] != ''): ?>
                    <h1 class="text-center"><?php echo $f_hero['title']; ?></h1>
                <?php endif; ?>
                <?php if (isset($f_hero['subtitle']) & $f_hero['subtitle'] != ''): ?>
                    <h2 class="text-center"><?php echo $f_hero['subtitle']; ?></h2>
                <?php endif; ?>
                <?php if (isset($f_hero['download_cv']['title']) || isset($f_hero['download_cv']['url'])): ?>
                    <div class="c-button mt-3">
                        <a class="btn_primary text-center" href="<?php echo $f_hero['download_cv']['url'] ?>"><?php echo $f_hero['download_cv']['title'] ?></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <?php /*********** 🧩 ABOUT ME SECTION ***********/ ?>
    <?php $f_about = get_field('about'); ?>
    <section class="about py-5" id="about-me">
        <div class="container">
            <div class="row">
                <?php if (isset($f_about['title']) & $f_about['title'] != ''): ?>
                    <h2 class="text-center"><?php echo $f_about['title']; ?></h2>
                <?php endif; ?>
            </div>
            <div class="row">
                <div class="items-about mt-5">
                    <?php foreach( $f_about['about_items'] as $item ) : ?>
                        <div class="item" style="background-image: linear-gradient(rgba(26,26,26,0.2) 70%, rgba(26,26,26,0.2) 30%), url(<?php echo $item["bg_image"]; ?>)">
                            <p><?php echo $item["description"]; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <?php /*********** 🧩 PROJECTS SECTION ***********/ ?>
    <?php $f_projects = get_field('projects'); ?>
    <?php
        $args = [
            'post_type'         => 'portafolios',
            'posts_per_page'    => -1
        ];
        
        $loop = new WP_Query($args);
    ?>
    <section class="my-proyects py-5">
        <div class="container">
            <div class="row">
                <h2>Projects when i worked</h2>
                <?php if ( $loop->have_posts() ) : ?>
                    <?php 
                        $terms = get_terms( array(
                            'taxonomy'   => 'Tecnologias',
                            'hide_empty' => false,
                        ) );
                    ?>
                    <div class="wrap-technologies">
                        <?php foreach($terms as $term) : ?>
                            <h4 class="filter-tech" data-tech="<?php echo $term->term_id; ?>"><?php echo $term->name;?></h4>
                        <?php endforeach; ?>
                    </div>
                    <div class="wrap-projetcs">
                        <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
                            <div class="item" data-tech="<?php echo $str_terms_id; ?>" style="background-image: url(<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/assets/images/default-img/center.jpg'; ?>)">
                                <div class="wrap-content">
                                    <h3 class="text-center"><?php echo get_the_title(); ?></h3>
                                    <div class="c-button">
                                        <a href="<?php echo get_the_permalink(); ?>" class="btn_primary">View More</a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                <?php else: ?>
                    <div>
                        <h3>Nothing for now.</h3>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="projects py-5" id="projects-work">
        <div class="container">
            <div class="row">
                <?php if (isset($f_projects['title']) & $f_projects['title'] != ''): ?>
                    <h2 class="text-center"><?php echo $f_projects['title']; ?></h2>
                <?php endif; ?>
            </div>
            <div class="row">
                <?php if ( $loop->have_posts() ) : ?>
                    <div class="projetcs-items">
                        <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
                            <div class="item" style="background-image: url(<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/assets/images/default-img/center.jpg'; ?>)">
                                <div class="c-content">
                                    <h3 class="text-center"><?php echo get_the_title(); ?></h3>
                                    <div class="c-button">
                                        <a href="#" class="btn_primary">View More</a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                <?php else: ?>
                    <div>
                        <h3>Nothing for now.</h3>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <?php /*********** 🧩 MY SKILLS SECTION ***********/ ?>
    <?php $f_skills = get_field('skills'); ?>
    <?php if (isset($f_skills['slider_shortcode']) & $f_skills['slider_shortcode'] != ''): ?>
        <section class="skills py-5"  id="skills">
            <div class="container-large overflow-hidden">
                <?php if (isset($f_skills['title']) & $f_skills['title'] != ''): ?>
                    <div class="row">
                        <h2 class="text-center"><?php echo $f_skills['title']; ?></h2>
                    </div>
                <?php endif; ?>
                <div class="row mt-5">
                    <?php echo do_shortcode($f_skills['slider_shortcode']); ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php /*********** 🧩 WORK EXPERIENCE SECTION ***********/ ?>
    <?php $f_experience = get_field('experience'); ?>
    <section class="experience py-5" id="experience">
        <div class="container">
            <div class="row">
                <?php if (isset($f_experience['title']) & $f_experience['title'] != ''): ?>
                    <h2 class="text-center"><?php echo $f_experience['title']; ?></h2>
                <?php endif; ?>
            </div>
            <div class="row">
                <?php
                    $args = [
                        'post_type' => 'experiencias',
                        'posts_per_page' => -1
                    ];

                    $loop = new WP_Query( $args );
                ?>
                <div class="experience-items">
                    <?php if( $loop->have_posts() ) : ?>
                        <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
                            <div class="item mt-5">                        
                                <?php $experience = get_field('experience'); ?>
                                <div class="c-principal">
                                    <?php if( has_post_thumbnail() ): ?>
                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                    <?php endif; ?>
                                    <div class="info">
                                        <?php if( get_the_title() ): ?>
                                            <h3><?php echo get_the_title(); ?> <?php echo $experience['rol'] ? '<span>'.$experience['rol'].'</span>' : ''; ?></h3>
                                        <?php endif; ?>
                                        <?php if( $experience['start_date'] ): ?>
                                            <h4><?php echo $experience['start_date']; ?> to <?php echo $experience['end_date'] ? $experience['end_date'] : 'Actuality' ?></h4>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="c-description">
                                    <?php if( the_content() ) : ?>
                                        <?php the_content(); ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else: ?>
                        <div class="item mt-5">
                            <h4>Nothing for now.</h4>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
                
    <?php /*********** 🧩 CERTIFICATIONS SECTION ***********/ ?>
    <?php $f_certifications = get_field('certifications'); ?>
    <section class="certifications py-5" id="certifications">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/medal.png'; ?>" alt="" class="bg-img">
        <div class="container">
            <div class="row">
                <?php if (isset($f_certifications['title']) & $f_certifications['title'] != ''): ?>
                    <h2 class="text-center"><?php echo $f_certifications['title']; ?></h2>
                <?php endif; ?>
            </div>
            <div class="row">
                <?php
                    $args = [
                        'post_type' => 'certificaciones',
                        'posts_per_page' => -1
                    ];

                    $loop = new WP_Query($args);
                ?>
                <div class="studies-items">
                    <?php if( $loop->have_posts() ) : ?>
                        <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
                            <?php if( get_the_title() ) : ?>
                                <div class="item mt-5">
                                    <?php $studies = get_field('estudios'); ?>
                                    <?php if( $studies['instituto'] ) : ?>
                                        <h5><?php echo $studies['instituto']; ?></h5>
                                    <?php endif; ?>
                                    <h3><?php echo $studies['tipo'] ? $studies['tipo'].': ' : ''; ?> <?php echo get_the_title(); ?></h3>
                                    <?php if ( $studies['estado'] ) : ?>
                                        <span><?php echo $studies['estado']; ?> <?php echo $studies['certificado'] ? '<a href="' . $studies["certificado"] . '" target="_blank">Certificate</a>' : '' ?></span>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else: ?>
                        <div class="item mt-5">
                            <h4>Nothing for now.</h4>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</div>
        

<?php get_footer(); ?>