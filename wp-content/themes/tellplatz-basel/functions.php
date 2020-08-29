<?php
/***************************************
 *	 CREATE GLOBAL VARIABLES
 ***************************************/
define( 'HOME_URI', home_url() );
define( 'THEME_URI', get_template_directory_uri() );
define( 'THEME_IMAGES', THEME_URI . '/dist-assets/images' );
define( 'DEV_CSS', THEME_URI . '/dev-assets/css' );
define( 'DEV_JS', THEME_URI . '/dev-assets/js' );
define( 'DIST_CSS', THEME_URI . '/dist-assets/css' );
define( 'DIST_JS', THEME_URI . '/dist-assets/js' );


/***************************************
 * Include helpers
 ***************************************/
require_once 'inc/gravityforms.php';

/***************************************
 * 		Theme Support and Options
 ***************************************/
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
add_theme_support( 'title-tag' );
add_theme_support( 'menus' );
setlocale(LC_TIME, "de_CH.UTF8");

/***************************************
 * Custom Image Size
 ***************************************/
add_image_size( 'testimonial-page', 300, 300, true );
add_image_size( 'testimonial-page-2x', 600, 600, true );
add_image_size( 'fullwidth-mobile', 333, 9999, false );
add_image_size( 'fullwidth-mobile-2x', 666, 9999, false );
add_image_size( 'fullwidth-tablet', 726, 9999, false );
add_image_size( 'fullwidth-tablet-2x', 1452, 9999, false );
add_image_size( 'fullwidth-desktop', 1920, 9999, false );
add_image_size( 'fullwidth-desktop-2x', 3840, 9999, false );

/***************************************
 * Add Wordpress Menus
 ***************************************/
function register_tpb_menu() {
	register_nav_menu( 'main-menu', 'Hauptmenü' );
	register_nav_menu( 'footer-menu', 'Footermenü' );
}
add_action( 'after_setup_theme', 'register_tpb_menu' );

/***************************************
 * 		Enqueue scripts and styles.
 ***************************************/
function tpb_startup_scripts() {
	if(!is_page_template( 'template-testimonials.php' )) {
		wp_enqueue_style( 'tellplatz-basel-google-fonts', 'https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;700&display=swap', null, null );
	} else {
		wp_enqueue_style( 'tellplatz-basel-google-fonts', 'https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,400;0,500;0,700;1,300&family=Source+Code+Pro&display=swap', null, null );
	}
	if (WP_DEBUG) {
		$modificated_css = date( 'YmdHis', filemtime( get_stylesheet_directory() . '/dev-assets/css/theme.css' ) );
		$modificated_js = date( 'YmdHis', filemtime( get_stylesheet_directory() . '/dev-assets/js/theme.js' ) );
		wp_enqueue_style( 'tellplatz-basel-style', DEV_CSS . '/theme.css', array('tellplatz-basel-google-fonts'), $modificated_css );
		wp_register_script( 'tellplatz-basel-script', DEV_JS ."/theme.js", array('jquery', 'jquery-ui-widget'), $modificated_js, true );
	} else {
		$modificated_css = date( 'YmdHis', filemtime( get_stylesheet_directory() . '/dist-assets/css/theme.min.css' ) );
		$modificated_js = date( 'YmdHis', filemtime( get_stylesheet_directory() . '/dist-assets/js/theme.min.js' ) );
		wp_enqueue_style( 'tellplatz-basel-style', DIST_CSS . '/theme.min.css', array('tellplatz-basel-google-fonts'), $modificated_css );
		wp_register_script( 'tellplatz-basel-script', DIST_JS ."/theme.min.js", array('jquery', 'jquery-ui-widget'), $modificated_js, true );
	}
	/* Font Awesome Icons hinzufügen */
	wp_enqueue_script( 'fontawesome-script', 'https://kit.fontawesome.com/79013a0f8d.js', null, null, true );
	$global_vars = array(
		'sharebuttons' => array(
			'showLabel' => false,
			'showCount' => false,
			'shareIn' => 'popup',
			'shares' => array(
				array(
					'share' => 'facebook',
					'logo' => 'fab fa-facebook-f fa-fw'
				),
				array(
					'share' => 'twitter',
					'logo' => 'fab fa-twitter fa-fw'
				),
				array(
					'share' => 'whatsapp',
					'logo' => 'fab fa-whatsapp fa-fw'
				),
				array(
					'share' => 'email',
					'logo' => 'fas fa-at'
				)
			)
		)
	);
	wp_localize_script( 'tellplatz-basel-script', 'global_vars', $global_vars );
	wp_enqueue_script( 'tellplatz-basel-script' );
}
add_action( "wp_enqueue_scripts", "tpb_startup_scripts" );

/***************************************
 * 		tpb ACF Init
 ***************************************/
function tpb_acf_init() {
	 $args = array(
		'page_title' => 'Einstellungen für die Compresso Inventarliste',
		'menu_title' => 'Inventarliste',
		'menu_slug' => 'tpb-theme-settings',
		'parent_slug' => 'options-general.php',
	);
	acf_add_options_sub_page($args);
}
//add_action( 'acf/init', 'tpb_acf_init' );

/***************************************
 * Remove Menus from Backend
 ***************************************/
function tpb_remove_menus() {
	remove_menu_page( 'edit.php' );
	remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'tpb_remove_menus' );

/***************************************
 * Draw Page Titel
 ***************************************/
function tpb_page_title($title, $titletyp = 3, $echo = true) {
	$draw_title = '<div class="title-bar"><h' . $titletyp . '>' . $title . '</h' . $titletyp . '></div>';
	if($echo) {
		echo $draw_title;
	} else {
		return $draw_title;
	}
}