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
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <span class="logo">Hector Ramirez</span>
                </div>
                <div class="col-6">
                    <nav>
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
