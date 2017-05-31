<?php


/*****************************
			CSS
*****************************/
function wpt_theme_styles() {
	wp_enqueue_style('styles_css', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'wpt_theme_styles');



/*****************************
			JS
*****************************/
function wpt_theme_js() {
	wp_enqueue_script( 'js', get_template_directory_uri() . '/js/app.js', '', '', true);
}
add_action('wp_enqueue_scripts', 'wpt_theme_js');

// ?>