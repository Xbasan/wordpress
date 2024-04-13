<?php

if ( ! defined( 'LMS_EDUCATION_PREMIUM_THEME_LINK' ) ) {
	define( 'LMS_EDUCATION_PREMIUM_THEME_LINK', 'https://www.misbahwp.com/themes/education-lms-wordpress-theme/' );
}
if ( ! defined( 'LMS_EDUCATION_PREMIUM_THEME_DEMO_LINK' ) ) {
    define( 'LMS_EDUCATION_PREMIUM_THEME_DEMO_LINK', 'https://misbahwp.com/demo/lms-training-institute/' );
}
if ( ! defined( 'LMS_EDUCATION_DOCS_FREE' ) ) {
define('LMS_EDUCATION_DOCS_FREE',__('https://www.misbahwp.com/docs/lms-training-institute-free-docs/','lms-training-institute'));
}
if ( ! defined( 'LMS_EDUCATION_DOCS_PRO' ) ) {
define('LMS_EDUCATION_DOCS_PRO',__('https://www.misbahwp.com/docs/lms-training-institute-pro-docs/','lms-training-institute'));
}
if ( ! defined( 'LMS_EDUCATION_BUY_NOW' ) ) {
define('LMS_EDUCATION_BUY_NOW',__('https://www.misbahwp.com/themes/education-lms-wordpress-theme/','lms-training-institute'));
}
if ( ! defined( 'LMS_EDUCATION_SUPPORT_FREE' ) ) {
define('LMS_EDUCATION_SUPPORT_FREE',__('https://wordpress.org/support/theme/lms-training-institute','lms-training-institute'));
}
if ( ! defined( 'LMS_EDUCATION_REVIEW_FREE' ) ) {
define('LMS_EDUCATION_REVIEW_FREE',__('https://wordpress.org/support/theme/lms-training-institute/reviews/#new-post','lms-training-institute'));
}
if ( ! defined( 'LMS_EDUCATION_DEMO_PRO' ) ) {
define('LMS_EDUCATION_DEMO_PRO',__('https://www.misbahwp.com/demo/lms-training-institute/','lms-training-institute'));
}

/*-----------------------------------------------------------------------------------*/
/* Enqueue script and styles */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('lms_training_institute_enqueue_scripts')) {

	function lms_training_institute_enqueue_scripts() {

	    $my_theme = wp_get_theme();
	    $version = $my_theme['Version'];

	    wp_enqueue_style(
			'bootstrap-css',
				esc_url( get_template_directory_uri() ) . '/css/bootstrap.css',
				array(),'4.5.0'
			);

	    wp_enqueue_style( 'lms-education-style', get_template_directory_uri() . '/style.css' );

	    wp_enqueue_style( 'lms-training-institute-style', get_stylesheet_directory_uri() . '/style.css', array('lms-education-woocommerce-css'), $version );

	    wp_enqueue_style( 'lms-training-institute-style', get_stylesheet_directory_uri() . '/style.css', array('lms-education-style'), $version );

		if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

	}

	add_action( 'wp_enqueue_scripts', 'lms_training_institute_enqueue_scripts' );

}

/*-----------------------------------------------------------------------------------*/
/* Setup theme */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('lms_training_institute_after_setup_theme')) {

	function lms_training_institute_after_setup_theme() {

		if ( ! isset( $content_width ) ) $content_width = 900;

		add_theme_support( 'align-wide' );
		add_theme_support( 'woocommerce' );
		add_theme_support('title-tag');
		add_theme_support('automatic-feed-links');
		add_theme_support('post-thumbnails');
		add_theme_support( "responsive-embeds" );
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'custom-background', array(
		  'default-color' => 'ffffff'
		));

		add_theme_support( 'custom-logo', array(
			'height'      => 70,
			'width'       => 70,
		) );

		add_theme_support( 'custom-header', array(
			'width' => 1920,
			'height' => 100
		));

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_editor_style( array( '/css/editor-style.css' ) );
	}

	add_action( 'after_setup_theme', 'lms_training_institute_after_setup_theme', 999 );

}

if (!function_exists('lms_training_institute_widgets_init')) {

	function lms_training_institute_widgets_init() {

		register_sidebar(array(

			'name' => esc_html__('Sidebar','lms-training-institute'),
			'id'   => 'lms-education-sidebar',
			'description'   => esc_html__('This sidebar will be shown next to the content.', 'lms-training-institute'),
			'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

		register_sidebar(array(

			'name' => esc_html__('Footer sidebar','lms-training-institute'),
			'id'   => 'lms-education-footer-sidebar',
			'description'   => esc_html__('This sidebar will be shown next at the bottom of your content.', 'lms-training-institute'),
			'before_widget' => '<div id="%1$s" class="col-lg-3 col-md-3 %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

	}

	add_action( 'widgets_init', 'lms_training_institute_widgets_init' );

}

function lms_training_institute_remove_custom($wp_customize) {
  $wp_customize->remove_setting('lms_education_slider_phone_heading');
  $wp_customize->remove_setting('lms_education_slider_phone_text');
 	$wp_customize->remove_setting('lms_education_phone_detail_unable_disable');
 	$wp_customize->remove_setting('lms_education_text_unable_disable');
 	$wp_customize->remove_setting('lms_education_slider_xcerpt_heading');
 	$wp_customize->remove_setting('lms_education_slide_excerpt_number');
	$wp_customize->remove_setting('lms_education_slider_content_alignment');
	$wp_customize->remove_setting('lms_education_footer_text_heading_1');
	$wp_customize->remove_section('lms_education_section_color');
	$wp_customize->remove_setting('lms_education_slider_opacity_color');
	$wp_customize->remove_setting('lms_education_overlay_option');
	$wp_customize->remove_setting('lms_education_slider_image_overlay_color');
}
add_action( 'customize_register', 'lms_training_institute_remove_custom', 1000 );


/*-----------------------------------------------------------------------------------*/
/* Customizer */
/*-----------------------------------------------------------------------------------*/

if ( class_exists("Kirki")){

	// ABOUT US SECTION

	Kirki::add_section( 'lms_training_institute_aboutus_section', array(
    'title'          => esc_html__( 'About Us Settings', 'lms-training-institute' ),
    'description'    => esc_html__( 'You have to select page to show about us section.', 'lms-training-institute' ),
    'panel'          => 'lms_education_panel_id',
    'priority'       => 170,
  ) );

  Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'lms_training_institute_services_enable_heading',
		'section'     => 'lms_training_institute_aboutus_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Our Story Section', 'lms-training-institute' ) . '</h3>',
		'priority'    => 10,
	] );

  Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'lms_training_institute_aboutus_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'lms-training-institute' ),
		'section'     => 'lms_training_institute_aboutus_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'lms-training-institute' ),
			'off' => esc_html__( 'Disable', 'lms-training-institute' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'lms_training_institute_aboutus_section_title_heading',
		'section'     => 'lms_training_institute_aboutus_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Section Title', 'lms-training-institute' ) . '</h3>',
		'priority'    => 10,
	] );

  Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'lms_training_institute_aboutus_section_title',
		'section'  => 'lms_training_institute_aboutus_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'lms_training_institute_aboutus_image1_heading',
		'section'     => 'lms_training_institute_aboutus_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Image 1', 'lms-training-institute' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'image',
		'settings'    => 'lms_training_institute_aboutus_image1',
		'section'     => 'lms_training_institute_aboutus_section',
		'default'     => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'lms_training_institute_aboutus_image2_heading',
		'section'     => 'lms_training_institute_aboutus_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Image 2', 'lms-training-institute' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'image',
		'settings'    => 'lms_training_institute_aboutus_image2',
		'section'     => 'lms_training_institute_aboutus_section',
		'default'     => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'lms_training_institute_aboutus_page_heading',
		'section'     => 'lms_training_institute_aboutus_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Page Dropdown', 'lms-training-institute' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'dropdown-pages',
		'settings'    => 'lms_training_institute_aboutus',
		'section'     => 'lms_training_institute_aboutus_section',
		'default'     => 42,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'lms_training_institute_aboutus_xcerpt_heading',
		'section'     => 'lms_training_institute_aboutus_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Number Of Text', 'lms-training-institute' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'lms_training_institute_story_excerpt_number',
		'label'       => esc_html__( 'About Us Content Range', 'lms-training-institute' ),
		'section'     => 'lms_training_institute_aboutus_section',
		'default'     => 15,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

}
