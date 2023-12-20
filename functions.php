<?php
function add_theme_js() {
	wp_enqueue_script( 'theme-script', get_theme_file_uri( '/js/script.js' ), array( 'jquery' ), wp_get_theme()->get( 'Version' ), false );
}
add_action( 'wp_enqueue_scripts', 'add_theme_js' );

?>

