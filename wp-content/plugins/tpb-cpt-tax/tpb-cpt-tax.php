<?php
/*
Plugin Name: Custom Post Types
Plugin URI: https://rueegger.me
Description: Erstellt die Custom Post Type für tellplatzbasel.ch
Version: 1.9.0
Author: Samuel Rüegger
Author URI: https://rueegger.me
*/

function cpttax_create_posttypes(){
	//API Sportarten
	$labels = array(
		'name'					=> 'Testimonials',
		'singular_name'			=> 'Testimonial',
		'menu_name'				=> 'Testimonials',
		'parent-item-colon'		=> 'Übergeordneter Testimonial Eintrag',
		'all_items'				=> 'Alle Testimonials',
		'view_item'				=> 'Testimonial ansehen',
		'add_new_item'			=> 'Neues Testimonial hinzufügen',
		'add_new'				=> 'Hinzufügen',
		'edit_item'				=> 'Testimonial bearbeiten',
		'update_item'			=> 'Testimonial aktualisieren',
		'search_items'			=> 'Testimonials suchen',
		'not_found'				=> 'Keine Testimonials gefunden',
		'not_found_in_trash'	=> 'Keine Testimonials im Papierkorb gefunden'
	);
	$supports = array(
		'title',
		'author',
		'revisions',
		'custom-fields'
	);
	$args = array(
		'label'					=> 'tpb-testimonial',
		'description'			=> 'Verwaltet die Testimonial von tellplatzbasel.ch',
		'labels'				=> $labels,
		'supports'				=> $supports,
		'hierarchical'			=> false,
		'public'				=> false,
		'show_ui'				=> true,
		'show_in_menu'			=> true,
		'show_in_nav_menus'		=> false,
		'show_in_admin_bar'		=> true,
		'show_in_rest'			=> false,
		'can_export'			=> true,
		'has_archive'			=> false,
		'exclude_from_search'	=> true,
		'publicly_queryable'	=> true,
		'capability_type'		=> 'post',
		'menu_icon'				=> 'dashicons-testimonial',
		'rewrite'				=> false,
	);
	register_post_type( 'tpb-testimonials', $args );

}
add_action( 'init', 'cpttax_create_posttypes' );