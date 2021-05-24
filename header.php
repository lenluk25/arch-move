<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php  echo bloginfo('stylesheet_directory'); ?>/assets/fonts/fonts.css">

    <title><?php echo bloginfo( 'description' ); ?></title>

    <?php wp_head(); ?>
</head>

    <body>
        <header class="header">
            <div class="header__wrapper-left">
                <a href="<?php bloginfo( 'url' ) ?>" class="header__logo-link">
                    <img class="header__logo logo" src="<?php bloginfo( 'template_url' ) ?>/assets/images/logo-arch.svg" alt="logo">
                </a>    
                <nav class="header__nav">
                    <ul class="header__list">
                        <li class="header-list__item">
                            <a class="header-list__link" href="#">Design Gallery</a>
                        </li>
                        <li class="header-list__item">
                            <a class="header-list__link" href="#">List of Architect</a>
                        </li>
                        <li class="header-list__item">
                            <a class="header-list__link" href="#">Articles</a>
                        </li>
                        <li class="header-list__item">
                            <a class="header-list__link" href="#">How it Works</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="header__wrapper-right">
                <img class="header__search-icon" src="<?php echo IMG_DIR; ?>/search.svg" alt="search">
                <button class="header__btn btn btn--sign-in">Sign In</button>
                <button class="header__btn btn btn--sign-up">Sign Up</button>
            </div>
        </header>