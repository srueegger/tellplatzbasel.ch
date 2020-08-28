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

/***************************************
 * Add Wordpress Menus
 ***************************************/
function register_tpb_menu() {
	register_nav_menu( 'main-menu', 'Hauptmenü' );
}
add_action( 'after_setup_theme', 'register_tpb_menu' );

/***************************************
 * 		Enqueue scripts and styles.
 ***************************************/
function tpb_startup_scripts() {
	wp_enqueue_style( 'tellplatz-basel-google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat&display=swap' );
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
	$global_vars = array(
		'ajaxurl' => admin_url('admin-ajax.php'),
		'homeurl' => HOME_URI
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