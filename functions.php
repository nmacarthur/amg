<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

/**
 * Initialize theme default settings
 */
require get_template_directory() . '/inc/theme-settings.php';

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Register widget area.
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/pagination.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom Comments file.
 */
require get_template_directory() . '/inc/custom-comments.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/inc/bootstrap-wp-navwalker.php';

/**
 * Load WooCommerce functions.
 */
require get_template_directory() . '/inc/woocommerce.php';

/**
 * Load Editor functions.
 */
require get_template_directory() . '/inc/editor.php';

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
	acf_add_options_sub_page('General');
	acf_add_options_sub_page('Header');
	acf_add_options_sub_page('Footer');
}

function wpb_custom_new_menu() {
	register_nav_menus(
	  array(
		'header-menu' => __( 'Header Menu' ),
		'prefooter-menu' => __( 'PreFooter Menu' ),
		'footer-menu' => __( 'Footer Menu' ),

	  )
	);
  }
  add_action( 'init', 'wpb_custom_new_menu' );


  if(function_exists("register_field_group"))
  {
	  register_field_group(array (
		  'id' => 'acf_amg-downloads',
		  'title' => 'AMG Downloads',
		  'fields' => array (
			  array (
				  'key' => 'field_592773b3783ea',
				  'label' => 'File Upload',
				  'name' => 'file_upload',
				  'type' => 'file',
				  'save_format' => 'id',
				  'library' => 'all',
			  ),
			  array (
				  'key' => 'field_5927943ed16ec',
				  'label' => 'Link Text',
				  'name' => 'link_text',
				  'type' => 'text',
				  'default_value' => '',
				  'placeholder' => '',
				  'prepend' => '',
				  'append' => '',
				  'formatting' => 'html',
				  'maxlength' => '',
			  ),
		  ),
		  'location' => array (
			  array (
				  array (
					  'param' => 'post_type',
					  'operator' => '==',
					  'value' => 'amg-downloads',
					  'order_no' => 0,
					  'group_no' => 0,
				  ),
			  ),
		  ),
		  'options' => array (
			  'position' => 'normal',
			  'layout' => 'no_box',
			  'hide_on_screen' => array (
				  0 => 'permalink',
				  1 => 'the_content',
				  2 => 'excerpt',
				  3 => 'custom_fields',
				  4 => 'discussion',
				  5 => 'comments',
				  6 => 'revisions',
				  7 => 'slug',
				  8 => 'author',
				  9 => 'format',
				  10 => 'featured_image',
				  11 => 'categories',
				  12 => 'tags',
				  13 => 'send-trackbacks',
			  ),
		  ),
		  'menu_order' => 0,
	  ));
  }