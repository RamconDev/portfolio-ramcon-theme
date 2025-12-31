<footer id="contact" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12">
                <h2 class="text-start pb-5">Contact Me</h2>
                <?php
                    if (has_nav_menu('footer-menu')) {
                        wp_nav_menu([
                            'theme_location' => 'footer-menu',
                            'container'      => false,
                            'menu_class'     => 'list-contact d-flex flex-column align-items-start',
                        ]);
                    } else {
                        echo '<p>Please assign a menu to the Footer Menu location.</p>';
                    }
                ?>
            </div>
            <div class="col-md-6 col-12 contact-form">
                <?php if (do_shortcode('[contact-form-7 id="89bfd77" title="Contact form 1"]') ) : ?>
                    <?php echo do_shortcode('[contact-form-7 id="89bfd77" title="Contact form 1"]'); ?>
                <?php else : ?>
                    <?php echo do_shortcode('[contact-form-7 id="96548e5" title="Contact form"]'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer>
<?php
    wp_footer();
?>
</body>
</html>