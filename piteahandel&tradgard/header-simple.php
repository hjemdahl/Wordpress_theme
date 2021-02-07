<!-- Projekt Webbdesign för CMS - Moa Hjemdahl 2019 -->
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="top-bar">
            <!-- Logo -->
            <a href="<?php echo get_home_url(); ?>"><img class="logo" src="<?php echo get_template_directory_uri() . '/pictures/pht_logo.png' ?>" alt="Piteå Handel & Trädgård logotyp."></a>
            <!-- Toggle nav -->
            <nav class="toggle-nav">
                <p class="menu-p" onclick="toggleNav()">Meny</p>
                <div class="menu-dropdown">
                    <?php
                        wp_nav_menu(array('theme_location' => 'main-menu'));
                    ?>
                </div>
            </nav>
            <!-- Social media block -->
            <div class="header-social">
                <div class="header-phone-nr">
                    <img class="phone-icon" src="<?php echo get_template_directory_uri() . '/pictures/icon_phone.png' ?>" alt="Telefon ikon.">
                    <p>0911-600 15</p>
                </div>
                <a href="https://www.facebook.com/www.piteahandeltradgard.se/" target="_blank"><img src="<?php echo get_template_directory_uri() . '/pictures/icon_fb.png' ?>" alt="Facebook ikon."></a>
                <a href="https://www.instagram.com/piteahandeltradgard/" target="_blank"><img src="<?php echo get_template_directory_uri() . '/pictures/icon_insta.png' ?>" alt="Instagram ikon."></a>
            </div>
        </div>
    </header>
