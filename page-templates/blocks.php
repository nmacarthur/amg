<?php

// check if the repeater field has rows of data
if( have_rows('blocks') ) {

  // loop through the rows of data
  while ( have_rows('blocks') ) { the_row();

    // Setup <section> for each content block
    get_template_part( 'page-templates/blocks/block-setup' );

    // check if the flexible content field has rows of data
    if( have_rows('section') ) {

      // loop through the rows of data
      while ( have_rows('section') ) { the_row();

         get_template_part( 'page-templates/page-components/splash' );
         get_template_part( 'page-templates/page-components/intro' );
         get_template_part( 'page-templates/page-components/trifield' );
         get_template_part( 'page-templates/page-components/2column' );
         get_template_part( 'page-templates/page-components/1column' );
         get_template_part( 'page-templates/page-components/icon_section' );
         get_template_part( 'page-templates/page-components/image_split_left' );
         get_template_part( 'page-templates/page-components/image_split_right' );
         get_template_part( 'page-templates/page-components/service_providers' );
         get_template_part( 'page-templates/page-components/three_column_section' );
         get_template_part( 'page-templates/page-components/small_image_slider' );
         get_template_part( 'page-templates/page-components/investment_table' );
         get_template_part( 'page-templates/page-components/people_columns' );
         get_template_part( 'page-templates/page-components/pds_and_forms' );
         get_template_part( 'page-templates/page-components/testimonials' );
         get_template_part( 'page-templates/page-components/2columns' );

      }

    }

    echo '</section>'; // Opened in block-setup.php

  }
}



?>


<?php get_footer();
