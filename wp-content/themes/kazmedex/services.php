<?php

/*

	Template Name: Наши услуги
 	Template Post Type: page, post

*/

get_header();
?>

    <div class="services-page-section">
        <div class="container">
            <h2 class="page-title">
                <?php the_title(); ?>
            </h2>

            <div class="services-all">
                <?php
                    $args = array(
                        'post_type' => 'services',
                        'numberposts' => -1,
                    );
                    $services_posts = get_posts( $args );
                ?>

                <?php
                    foreach($services_posts as $key => $post) :
                        setup_postdata( $post );
                ?>
                    <div class="services-item" id="<?= $key ?>">
                        <div class="services-item-image">
                            <img src="<?php echo the_post_thumbnail_url( 'full' ); ?>" alt="services image">
                        </div>

                        <div class="services-item-right">
                            <div class="services-item-text">
                                <h3>
                                    <?php the_title(); ?>
                                </h3>

                                <p>
                                    <?php the_content(); ?>
                                </p>
                            </div>

                            <div class="services-item-feedback">
                                <a href="<?php 
                                $my_lang = pll_current_language();  
                                if ( $my_lang == 'ru' ) { 
                                    echo 'https://kazmedex.kz/';
                                } elseif ( $my_lang == 'kk' ) { 
                                    echo 'https://kazmedex.kz/kk/glavnaya-stranica-qazaq-tili';
                                } else { 
                                    echo 'https://kazmedex.kz/en/glavnaya-stranicza-english';
                                }
                                ?>#feedback">
                                    <button>
                                        отправить заявку
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>