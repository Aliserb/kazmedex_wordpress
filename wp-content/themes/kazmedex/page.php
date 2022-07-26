<?php

/*

	Template Name: главная страница
 	Template Post Type: page

*/

get_header();
?>

    <div class="banner-section" style="background-image: url(<? echo carbon_get_post_meta( get_the_ID(), 'banner-img' ); ?>);">
        <div class="container">
            <h1 class="banner-title">
                <? echo carbon_get_post_meta( get_the_ID(), 'banner-title' ); ?>
            </h1>

            <section class="banner-elements row">
                <div class="banner-elements-item col-lg-3 col-sm-12 col-12">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/banner-element-1.svg" alt="icon">
                    </div>

                    <div class="text">
                        <? echo carbon_get_post_meta( get_the_ID(), 'banner-item-1' ); ?>
                    </div>
                </div>

                <div class="banner-elements-item col-lg-3 col-sm-12 col-12">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/banner-element-2.svg" alt="icon">
                    </div>

                    <div class="text">
                        <? echo carbon_get_post_meta( get_the_ID(), 'banner-item-2' ); ?>
                    </div>
                </div>

                <div class="banner-elements-item col-lg-3 col-sm-12 col-12">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/banner-element-3.svg" alt="icon">
                    </div>

                    <div class="text">
                        <? echo carbon_get_post_meta( get_the_ID(), 'banner-item-3' ); ?>
                    </div>
                </div>

                <div class="banner-elements-item col-lg-3 col-sm-12 col-12">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/banner-element-4.svg" alt="icon">
                    </div>

                    <div class="text">
                        <? echo carbon_get_post_meta( get_the_ID(), 'banner-item-4' ); ?>
                    </div>
                </div>

            </section>
        </div>
    </div>

    <div class="about-section">
        <div class="container">
            <div class="about-row row">
                <div class="col-xl-4 col-lg-12 col-12">
                    <img src="<? echo carbon_get_post_meta( get_the_ID(), 'about-img' ); ?>" alt="about">
                </div>

                <div class="col-xl-8 col-lg-12 col-12">
                    <h2 class="title">
                        <? echo carbon_get_post_meta( get_the_ID(), 'about-title' ); ?>
                    </h2>

                    <div class="about-text">
                        <?php echo do_shortcode(wpautop(carbon_get_post_meta( get_the_ID(), 'about-text' ))); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="services-section">
        <div class="container">
            <h2 class="title">
                
                <?php 
                $my_lang = pll_current_language();  
                if ( $my_lang == 'ru' ) { 
                    echo 'Наши услуги';
                } elseif ( $my_lang == 'kk' ) { 
                    echo 'Біздің қызметтер';
                } else { 
                    echo 'Our services';
                }
                ?>
            </h2>

            <div class="services-row row">
                <div class="service-item col-lg-4 col-sm-6 col-12">
                    <a href="
                    <?php 
                    $my_lang = pll_current_language();  
                    if ( $my_lang == 'ru' ) { 
                        echo 'https://kazmedex.kz/services';
                    } elseif ( $my_lang == 'kk' ) { 
                        echo 'https://kazmedex.kz/kk/bizding-qyzmetterimiz';
                    } else { 
                        echo 'https://kazmedex.kz/en/our-services';
                    }
                    ?>
                    #8">
                        <img src="<? echo carbon_get_post_meta( get_the_ID(), 'services-image-1' ); ?>" alt="service">

                        <p class="service-about">
                            <? echo carbon_get_post_meta( get_the_ID(), 'services-desc-1' ); ?>
                        </p>
                    </a>
                </div>

                <div class="service-item col-lg-4 col-sm-6 col-12">
                    <a href="
                    <?php 
                    $my_lang = pll_current_language();  
                    if ( $my_lang == 'ru' ) { 
                        echo 'https://kazmedex.kz/services';
                    } elseif ( $my_lang == 'kk' ) { 
                        echo 'https://kazmedex.kz/kk/bizding-qyzmetterimiz';
                    } else { 
                        echo 'https://kazmedex.kz/en/our-services';
                    }
                    ?>
                    #7">
                        <img src="<? echo carbon_get_post_meta( get_the_ID(), 'services-image-2' ); ?>" alt="service">

                        <p class="service-about">
                            <? echo carbon_get_post_meta( get_the_ID(), 'services-desc-2' ); ?>
                        </p>
                    </a>
                </div>

                <div class="service-item col-lg-4 col-sm-6 col-12">
                    <a href="<?php 
                    $my_lang = pll_current_language();  
                    if ( $my_lang == 'ru' ) { 
                        echo 'https://kazmedex.kz/services';
                    } elseif ( $my_lang == 'kk' ) { 
                        echo 'https://kazmedex.kz/kk/bizding-qyzmetterimiz';
                    } else { 
                        echo 'https://kazmedex.kz/en/our-services';
                    }
                    ?>
                    #6">
                        <img src="<? echo carbon_get_post_meta( get_the_ID(), 'services-image-3' ); ?>" alt="service">

                        <p class="service-about">
                            <? echo carbon_get_post_meta( get_the_ID(), 'services-desc-3' ); ?>
                        </p>
                    </a>
                </div>
            </div>

            <div class="services-row row">
                <div class="col-sm-8">
                    <div class="row">
                        <div class="service-item col-lg-6 col-12">
                            <a href="<?php 
                            $my_lang = pll_current_language();  
                            if ( $my_lang == 'ru' ) { 
                                echo 'https://kazmedex.kz/services';
                            } elseif ( $my_lang == 'kk' ) { 
                                echo 'https://kazmedex.kz/kk/bizding-qyzmetterimiz';
                            } else { 
                                echo 'https://kazmedex.kz/en/our-services';
                            }
                            ?>
                            #5">
                                <img src="<? echo carbon_get_post_meta( get_the_ID(), 'services-image-4' ); ?>" alt="service">

                                <p class="service-about">
                                    <? echo carbon_get_post_meta( get_the_ID(), 'services-desc-4' ); ?>
                                </p>
                            </a>
                        </div>

                        <div class="service-item col-lg-6 col-12">
                            <a href="<?php 
                            $my_lang = pll_current_language();  
                            if ( $my_lang == 'ru' ) { 
                                echo 'https://kazmedex.kz/services';
                            } elseif ( $my_lang == 'kk' ) { 
                                echo 'https://kazmedex.kz/kk/bizding-qyzmetterimiz';
                            } else { 
                                echo 'https://kazmedex.kz/en/our-services';
                            }
                            ?>
                            #4">
                                <img src="<? echo carbon_get_post_meta( get_the_ID(), 'services-image-5' ); ?>" alt="service">

                                <p class="service-about">
                                    <? echo carbon_get_post_meta( get_the_ID(), 'services-desc-5' ); ?>
                                </p>
                            </a>
                        </div>

                        <div class="service-item col-lg-12">
                            <a href="<?php 
                            $my_lang = pll_current_language();  
                            if ( $my_lang == 'ru' ) { 
                                echo 'https://kazmedex.kz/services';
                            } elseif ( $my_lang == 'kk' ) { 
                                echo 'https://kazmedex.kz/kk/bizding-qyzmetterimiz';
                            } else { 
                                echo 'https://kazmedex.kz/en/our-services';
                            }
                            ?>
                            #3">
                                <img src="<? echo carbon_get_post_meta( get_the_ID(), 'services-image-6' ); ?>" alt="service">

                                <p class="service-about">
                                    <? echo carbon_get_post_meta( get_the_ID(), 'services-desc-6' ); ?>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="service-item col-lg-12 col-12">
                        <a href="<?php 
                        $my_lang = pll_current_language();  
                        if ( $my_lang == 'ru' ) { 
                            echo 'https://kazmedex.kz/services';
                        } elseif ( $my_lang == 'kk' ) { 
                            echo 'https://kazmedex.kz/kk/bizding-qyzmetterimiz';
                        } else { 
                            echo 'https://kazmedex.kz/en/our-services';
                        }
                        ?>
                        #2">
                            <img src="<? echo carbon_get_post_meta( get_the_ID(), 'services-image-7' ); ?>" alt="service">

                            <p class="service-about">
                                <? echo carbon_get_post_meta( get_the_ID(), 'services-desc-7' ); ?>
                            </p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="services-row row">
                <div class="service-item service-last-item col-lg-12">
                    <a href="<?php 
                    $my_lang = pll_current_language();  
                    if ( $my_lang == 'ru' ) { 
                        echo 'https://kazmedex.kz/services';
                    } elseif ( $my_lang == 'kk' ) { 
                        echo 'https://kazmedex.kz/kk/bizding-qyzmetterimiz';
                    } else { 
                        echo 'https://kazmedex.kz/en/our-services';
                    }
                    ?>
                    #1">
                        <img src="<? echo carbon_get_post_meta( get_the_ID(), 'services-image-8' ); ?>" alt="service">

                        <p class="service-about">
                            <? echo carbon_get_post_meta( get_the_ID(), 'services-desc-8' ); ?>
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="answer-section">
        <div class="container">
            <h2 class="title">
                <?php 
                $my_lang = pll_current_language();  
                if ( $my_lang == 'ru' ) { 
                    echo 'Как работает консалтинг?';
                } elseif ( $my_lang == 'kk' ) { 
                    echo 'Консалтинг қалай жұмыс істейді?';
                } else { 
                    echo 'How does consulting work?';
                }
                ?>
            </h2>

            <div class="answer-row row">
                <div class="answer-item col-lg-4 col-sm-12 col-12">
                    <div class="icon">
                        <img src="<? echo carbon_get_post_meta( get_the_ID(), 'consulting-item-icon-1' ); ?>" alt="icon">
                    </div>

                    <h3 class="answer-item-title">
                        <? echo carbon_get_post_meta( get_the_ID(), 'consulting-item-title-1' ); ?>
                    </h3>

                    <p class="answer-item-text">
                        <? echo carbon_get_post_meta( get_the_ID(), 'consulting-item-desc-1' ); ?>
                    </p>
                </div>

                <div class="answer-item answer-item-img col-lg-4 col-sm-12 col-12">
                    <img src="<? echo carbon_get_post_meta( get_the_ID(), 'consulting-image-1' ); ?>" alt="img">
                </div>

                <div class="answer-item col-lg-4 col-sm-12 col-12">
                    <div class="icon">
                        <img src="<? echo carbon_get_post_meta( get_the_ID(), 'consulting-item-icon-2' ); ?>" alt="icon">
                    </div>

                    <h3 class="answer-item-title">
                        <? echo carbon_get_post_meta( get_the_ID(), 'consulting-item-title-2' ); ?>
                    </h3>

                    <p class="answer-item-text">
                        <? echo carbon_get_post_meta( get_the_ID(), 'consulting-item-desc-2' ); ?>
                    </p>
                </div>

                <div class="answer-item answer-item-img col-lg-4 col-sm-12 col-12">
                    <img src="<? echo carbon_get_post_meta( get_the_ID(), 'consulting-image-2' ); ?>" alt="img">
                </div>

                <div class="answer-item col-lg-4 col-sm-12 col-12">
                    <div class="icon">
                        <img src="<? echo carbon_get_post_meta( get_the_ID(), 'consulting-item-icon-3' ); ?>" alt="icon">
                    </div>

                    <h3 class="answer-item-title">
                        <? echo carbon_get_post_meta( get_the_ID(), 'consulting-item-title-3' ); ?>
                    </h3>

                    <p class="answer-item-text">
                        <? echo carbon_get_post_meta( get_the_ID(), 'consulting-item-desc-3' ); ?>
                    </p>
                </div>

                <div class="answer-item answer-item-img col-lg-4 col-sm-12 col-12">
                    <img src="<? echo carbon_get_post_meta( get_the_ID(), 'consulting-image-3' ); ?>" alt="img">
                </div>

            </div>
        </div>
    </div>

    <div class="talk-about-section">
        <div class="container">
            <h2 class="title">
                <?php 
                $my_lang = pll_current_language();  
                if ( $my_lang == 'ru' ) { 
                    echo 'О нас говорят';
                } elseif ( $my_lang == 'kk' ) { 
                    echo 'Біз туралы айтады';
                } else { 
                    echo 'They talk about us';
                }
                ?>
            </h2>

            <div class="talk-about-row">
                <div class="button-left slider-button">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/slide-left.svg" alt="left">
                </div>

                <div class="swiper talk-about-slider">
                    <div class="swiper-wrapper">
                        <?php
							$aboutData = carbon_get_post_meta( get_the_ID(), 'slider' );

							if (!empty($aboutData)) :
								foreach($aboutData as $aboutDataIndex => $aboutDataItem) :
						?>
							<div class="swiper-slide">
								<div class="talk-about-item">
                                    <a href="<?= $aboutDataItem['slider-image'] ?>" data-fancybox="zoom-fullScreen-mobile">
									    <img src="<?= $aboutDataItem['slider-image'] ?>" alt="doc">
                                    </a>
								</div>
							</div>

                            <script>
                                $(document).ready(function() {

                                /* This is basic - uses default settings */

                                $("a#<?= $aboutDataIndex ?>").zoom();

                                });
                            </script>

						<?php 
							    endforeach; 
							endif; 
						?>
                    </div>
                </div>

                <div class="button-right slider-button">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/slide-right.svg" alt="right">
                </div>
            </div>
        </div>
    </div>

    <div class="warranty-section">
        <div class="container">
            <h2 class="title">
                <?php 
                $my_lang = pll_current_language();  
                if ( $my_lang == 'ru' ) { 
                    echo 'Наши гарантии';
                } elseif ( $my_lang == 'kk' ) { 
                    echo 'Біздің кепілдіктер';
                } else { 
                    echo 'Our warranty';
                }
                ?>
            </h2>

            <div class="warranty-row row">
                <?php
                    $warrantyData = carbon_get_post_meta( get_the_ID(), 'warranty' );

                    if (!empty($warrantyData)) :
                        foreach($warrantyData as $warrantyDataIndex => $warrantyDataItem) :
                ?>
                    <div class="warranty-item col-lg-4 col-sm-6 col-12">
                        <div class="warranty-item-icon">
                            <img src="<?= $warrantyDataItem['warranty-icon'] ?>" alt="icon">
                        </div>

                        <h3 class="warranty-item-title">
                            <?= $warrantyDataItem['warranty-title'] ?>
                        </h3>

                        <p class="warranty-item-text">
                            <?= $warrantyDataItem['warranty-desc'] ?>
                        </p>
                    </div>
                <?php 
                        endforeach; 
                    endif; 
                ?>
            </div>
        </div>
    </div>

    <div class="news-section">
        <div class="container">
            <h2 class="title">
                <?php 
                $my_lang = pll_current_language();  
                if ( $my_lang == 'ru' ) { 
                    echo 'Новости';
                } elseif ( $my_lang == 'kk' ) { 
                    echo 'Жаналыктар';
                } else { 
                    echo 'News';
                }
                ?>
            </h2>

            <div class="news-row row">
                <?php
                    $args = array(
                        'post_type' => 'news',
                        'posts_per_page' => 3,
                    );
                    $news_posts = get_posts( $args );
                ?>

                <?php
                    foreach($news_posts as $key => $post) :
                        setup_postdata( $post );
                ?>
                    <div class="news-item col-xl-4 col-lg-6 col-sm-12 col-12">
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

    <div class="feedback-section" id="feedback">
        <div class="feedback-row">
            <div class="feedback-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feedback.png" alt="image">
            </div>

            <div class="feedback-right">
                <div class="feedback-right-form">
                    <div class="feedback-title">
                        <?php 
                        $my_lang = pll_current_language();  
                        if ( $my_lang == 'ru' ) { 
                            echo 'Отправьте заявку на консультацию';
                        } elseif ( $my_lang == 'kk' ) { 
                            echo 'Консультацияға өтінім жіберіңіз';
                        } else { 
                            echo 'Send an application for consultation';
                        }
                        ?>
                    </div>

                    <div class="feedback-subtitle">
                        <?php 
                        $my_lang = pll_current_language();  
                        if ( $my_lang == 'ru' ) { 
                            echo 'получите все ответы на вопросы которые вас тревожат';
                        } elseif ( $my_lang == 'kk' ) { 
                            echo 'сізді алаңдататын сұрақтарға барлық жауаптарды алыңыз';
                        } else { 
                            echo 'get all the answers to the questions that concern you';
                        }
                        ?>
                    </div>

                    <form class="feedback-form">
                        
                    </form>
                    <?php echo do_shortcode('[contact-form-7 id="112" title="контактная форма"]'); ?>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
