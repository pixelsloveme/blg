<?php

if ( ! isset( $content_width ) ) $content_width = 1200;

function theme_slug_setup() {
   add_theme_support('title-tag');
   add_theme_support('automatic-feed-links');
   add_theme_support('post-thumbnails'); 
} 
add_action( 'after_setup_theme', 'theme_slug_setup' );


register_nav_menu('primary', 'Primary');
register_nav_menu('secondary', 'Footer');

if ( ! function_exists( '_wp_render_title_tag' ) ) {
	function theme_slug_render_title() {
?>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php
	}
	add_action( 'wp_head', 'theme_slug_render_title' );
}

function theme_styles() { 
  wp_register_style( 'fonts-style', '//fonts.googleapis.com/css?family=Lato:300,300italic,700', array(), null, null );
  wp_register_style( 'main-style', get_template_directory_uri() . '/style.css', array(), null, null );
  wp_enqueue_style( 'fonts-style' );    
  wp_enqueue_style( 'main-style' );    
} add_action('wp_enqueue_scripts', 'theme_styles');

require get_template_directory() . '/theme-update-checker.php';
$example_update_checker = new ThemeUpdateChecker(	'bloggable', 'https://madalinduca.com/info.json' );

?>


