<?php
/***************************************
 * PLZ vor Ort im Adressfeld anzeigens
 ***************************************/
function tpb_address_format( $format ) {
	return 'zip_before_city';
}
add_filter( 'gform_address_display_format', 'tpb_address_format' );


/***************************************
 * Gravityform Export with Semicolon
 ***************************************/
function tpb_change_separator( $separator, $form_id ) {
	return ';';
}
add_filter( 'gform_export_separator', 'tpb_change_separator', 10, 2 );
