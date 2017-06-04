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

//


// Menu support

add_theme_support('menus');
function register_theme_menus() {
	register_nav_menus(
		array(
			'primary-menu' => __( 'Primary Menu')
		)
	);
}
add_action('init', 'register_theme_menus');





add_theme_support( 'post-thumbnails' );
















// //////   Not sure about this - title thing....

add_filter( 'wp_title', 'wpdocs_hack_wp_title_for_home' );

/**
 * Customize the title for the home page, if one is not set.
 *
 * @param string $title The original title.
 * @return string The title to use.
 */
function wpdocs_hack_wp_title_for_home( $title )
{
  if ( empty( $title ) && ( is_home() || is_front_page() ) ) {
    $title = __( 'Home', 'textdomain' ) . ' | ' . get_bloginfo( 'description' );
  }
  return $title;
}





?>
