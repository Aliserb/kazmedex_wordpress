<?php

/*

	Template Name: новости
 	Template Post Type: post, page

*/

get_header();
?>

    <div class="news-page-section">
        <div class="container">
            <h2 class="page-title">
                <?php the_title(); ?>
            </h2>

            <div class="news-row row">
                <?php
                    $args = array(
                        'post_type' => 'news',
                        'numberposts' => -1,
                    );
                    $news_posts = get_posts( $args );
                ?>

                <?php
                    foreach($news_posts as $key => $post) :
                        setup_postdata( $post );
                ?>
                    <div class="news-item col-lg-4 col-sm-12 col-12">
                        <div class="news-image">
                            <a>
                                <img src="<?php echo the_post_thumbnail_url( 'full' ); ?>" alt="news image">
                            </a>    
                        </div>

                        <a class="news-link">
                            <h3 class="news-title">
                                <?php the_title(); ?>
                            </h3>
                        </a>

                        <p class="news-desc">
                            <?php the_content(); ?>
                        </p>

                        <div class="news-date">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/calendar.svg" alt="calendar">

                            <span>
                                <?php the_time('F jS, Y') ?>
                            </span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>