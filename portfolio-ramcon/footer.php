<footer id="contact" class="py-5">
    <div class="container">
        <!-- <div class="row mb-5">
            <div class="col-12">
                <h2 class="text-start pb-4">Contact Me</h2>
            </div>
        </div> -->
        <div class="row">
            <div class="col-md-6 col-12">
                <h2 class="text-start pb-5">Contact Me</h2>
                <ul class="d-flex flex-column gap-1 align-items-start">
                    <li>
                        <a href="">
                            <img src="" alt="">
                            <span>ramcondev@gmail.com</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="" alt="">
                            <span>linkedin.com/in/ramcondev/</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="" alt="">
                            <span>github.com/RamconDev</span>
                        </a>
                    </li>
                </ul>
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