<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?php bloginfo('charset'); ?>">

    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo(); ?></title>

    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="container-fluid container-md">
            <div class="row">
                <div class="col-6 d-flex align-items-center">
                    <a href="<?php echo get_home_url(); ?>" class="logo-url"><span class="logo">Hector Ramirez</span></a>
                </div>
                <div class="col-6">
                    <nav>
                        <div class="burguer">
                            <img src="<?php echo get_template_directory_uri() . "/assets/images/icons/menu.png"?>" alt="">
                        </div>
                        <?php
                        if (has_nav_menu('navbar-menu')) {
                            wp_nav_menu([
                                'theme_location' => 'navbar-menu',
                                'container'      => false,
                                'menu_class'     => 'nav-menu',
                            ]);
                        } else {
                            echo '<p>Please assign a menu to the Navbar Menu location.</p>';
                        }
                        ?>
                    </nav>
                </div>
            </div>
        </div>
    </header>
