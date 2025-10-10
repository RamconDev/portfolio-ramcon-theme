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
    <section class="about py-5">
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
    <section class="projects py-5">
        <div class="container">
            <div class="row">
                <?php if (isset($f_projects['title']) & $f_projects['title'] != ''): ?>
                    <h2 class="text-center"><?php echo $f_projects['title']; ?></h2>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <?php /*********** 🧩 MY SKILLS SECTION ***********/ ?>
    <?php $f_skills = get_field('skills'); ?>
    <?php if (isset($f_skills['slider_shortcode']) & $f_skills['slider_shortcode'] != ''): ?>
        <section class="skills py-5">
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
    <section class="experience py-5">
        <div class="container">
            <div class="row">
                <?php if (isset($f_experience['title']) & $f_experience['title'] != ''): ?>
                    <h2 class="text-center"><?php echo $f_experience['title']; ?></h2>
                <?php endif; ?>
            </div>
        </div>
    </section>
                
    <?php /*********** 🧩 CERTIFICATIONS SECTION ***********/ ?>
    <?php $f_certifications = get_field('certifications'); ?>
    <section class="certifications py-5">
        <div class="container">
            <div class="row">
                <?php if (isset($f_certifications['title']) & $f_certifications['title'] != ''): ?>
                    <h2 class="text-center"><?php echo $f_certifications['title']; ?></h2>
                <?php endif; ?>
            </div>
        </div>
    </section>
</div>
        

<?php get_footer(); ?>