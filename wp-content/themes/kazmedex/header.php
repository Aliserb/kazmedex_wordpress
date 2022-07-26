<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kazmedex
 */

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo.svg" type="image/x-icon">
    <title>Kazmedex</title>

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Risque&family=Roboto+Condensed:wght@300;400;700&family=Roboto+Mono:wght@300;400;500;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- google fonts -->

	<?php wp_head(); ?>

    <!-- connection of libraries -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/swiper.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
    <!-- connection of libraries -->

    <!-- connecting your styles -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/media.css">
    <!-- connecting your styles -->
</head>

<body>

    <header class="header <? if ( is_front_page() ) { echo ('header-main'); } ?>">
        <div class="container">
            <div class="header-row">
                <div class="logo">
                    <a href="/">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo.svg" alt="logo">

                        <span>
                            КазМед Экспертиза
                        </span>
                    </a>
                </div>

                <div class="header-right">
                    <nav class="nav-container">
                        <div class="hamburger">
                            <div class="nav-bar one"></div>
                            <div class="nav-bar two"></div>
                            <div class="nav-bar three"></div>
                        </div>
                        
                        <?php 
                        $my_lang = pll_current_language();  
                        if ( $my_lang == 'ru' ) { 
                            wp_nav_menu(
                                array(
                                    'menu'			 => 'main-menu-ru',
                                    'container'      => 'div',
                                    'container_class'=> 'dropdown',
                                )
                            );
                        } elseif ( $my_lang == 'kk' ) { 
                            wp_nav_menu(
                                array(
                                    'menu'			 => 'main-menu-kz',
                                    'container'      => 'div',
                                    'container_class'=> 'dropdown',
                                )
                            );
                        } else { 
                            wp_nav_menu(
                                array(
                                    'menu'			 => 'main-menu-en',
                                    'container'      => 'div',
                                    'container_class'=> 'dropdown',
                                )
                            );
                        }
                        ?>
                    </nav>
                    
                    <?php 
                    $my_lang = pll_current_language();  
                    if ( $my_lang == 'ru' ) { 
                        wp_nav_menu(
                            array(
                                'menu'			 => 'main-menu-ru',
                                'container'      => 'nav',
                                'container_class'=> 'menu menu-desktop',
                            )
                        );
                    } elseif ( $my_lang == 'kk' ) { 
                        wp_nav_menu(
                            array(
                                'menu'			 => 'main-menu-kz',
                                'container'      => 'nav',
                                'container_class'=> 'menu menu-desktop',
                            )
                        );
                    } else { 
                        wp_nav_menu(
                            array(
                                'menu'			 => 'main-menu-en',
                                'container'      => 'nav',
                                'container_class'=> 'menu menu-desktop',
                            )
                        );
                    }
                    ?>

                    <div class="">
                    <?php pll_the_languages(); ?>
                    </div>
                </div>
            </div>
        </div>
    </header>
