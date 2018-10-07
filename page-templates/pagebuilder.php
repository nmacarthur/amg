<?php 

/**
 * Template Name: Page Builder
 *
 * @package understrap
 */

    get_header();

    while ( have_posts() ) : the_post();

    ?>

    <?php get_template_part( 'page-templates/blocks' ); ?>



<?php 
    endwhile; // end of the loop.

    get_footer();

?>