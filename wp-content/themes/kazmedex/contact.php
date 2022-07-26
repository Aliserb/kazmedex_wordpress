<?php
/*

	Template Name: Контакты
 	Template Post Type: page

*/

get_header();
?>

    <div class="contact-page-section">
        <div class="container">
            <h2 class="page-title">
                <?php the_title(); ?>
           </h2>

           <?php the_content(); ?>
        </div>
    </div>

<?php get_footer(); ?>