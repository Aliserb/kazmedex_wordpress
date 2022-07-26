<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kazmedex
 */

?>

	<footer class="footer">
        <div class="container">
            <div class="footer-row row">
                <div class="col-lg-5 col-sm-10 col-12">
                    <div class="logo">
                        <a href="/">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo.svg" alt="logo">

                            <span>
                                КазМед Экспертиза
                            </span>
                        </a>
                    </div>

                    <div class="logo-desc">
                        Товарищество с ограниченной ответственностью «КазМед Экспертиза»
                    </div>
                </div>

                <div class="col-lg-2 col-12">
                    <div class="footer-menu-wrap">
                        <div class="footer-menu-title">
                            Меню
                        </div>

                        <?php 
                        $my_lang = pll_current_language();  
                        if ( $my_lang == 'ru' ) { 
                            wp_nav_menu(
                                array(
                                    'menu'			 => 'main-menu-ru',
                                    'container'      => 'nav',
                                    'container_class'=> 'footer-menu',
                                )
                            );
                        } elseif ( $my_lang == 'kk' ) { 
                            wp_nav_menu(
                                array(
                                    'menu'			 => 'main-menu-kz',
                                    'container'      => 'nav',
                                    'container_class'=> 'footer-menu',
                                )
                            );
                        } else { 
                            wp_nav_menu(
                                array(
                                    'menu'			 => 'main-menu-en',
                                    'container'      => 'nav',
                                    'container_class'=> 'footer-menu',
                                )
                            );
                        }
                        ?>
                    </div>
                </div>

                <div class="col-lg-5 col-sm-10 col-12">
                    <div class="footer-contact">
                        <div class="footer-contact-title">
                            <?php 
                                $my_lang = pll_current_language();  
                                if ( $my_lang == 'ru' ) { 
                                    echo ('Контакты');
                                } elseif ( $my_lang == 'kk' ) { 
                                    echo ('Контактілер');
                                } else { 
                                    echo ('Contacts');
                                }
                                ?>
                        </div>

                        <div class="footer-contact-list">
                            <div class="footer-contact-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/footer-icon-1.svg" alt="phone">

                                <span>
                                    8 705 233 67 83
                                </span>
                            </div>

                            <div class="footer-contact-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/footer-icon-2.svg" alt="pin">

                                <span>
                                    <?php 
                                    $my_lang = pll_current_language();  
                                    if ( $my_lang == 'ru' ) { 
                                        echo ('Республика Казахстан
                                        010000, город Нур-Султан, район Алматы, 
                                        ул. Бейімбет Майлина, дом 4/1, офис 121.');
                                    } elseif ( $my_lang == 'kk' ) { 
                                        echo ('Қазақстан Республикасы
										010000, Нұр-Сұлтан қаласы, Алматы ауданы,
										ст. Бейімбет Майлина, 4/1 үй, 121 кабинет.');
                                    } else { 
                                        echo ('The Republic of Kazakhstan
                                        010000, Nur-Sultan city, Almaty district,
                                        st. Beyimbet Mailina, house 4/1, office 121.');
                                    }
                                    ?>
                                </span>
                            </div>

                            <div class="footer-contact-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/footer-icon-3.svg" alt="mail">

                                <span>
                                    info@kazmedex.kz
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- connection of libraries -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <!-- connection of libraries -->

    <!-- connecting your scripts -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
    <!-- connecting your scripts -->
</body>

</html>
