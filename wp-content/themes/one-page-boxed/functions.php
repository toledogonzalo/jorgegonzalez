<?php
/**
 * Loads the child theme textdomain.
 */
function onepageboxed_child_theme_setup() {
    load_child_theme_textdomain('onepageboxed');
}
add_action( 'after_setup_theme', 'onepageboxed_child_theme_setup' );

function onepageboxed_child_enqueue_styles() {
    $parent_style = 'onepageboxed-parent-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	 wp_enqueue_style( 'onepageboxed-style',get_stylesheet_directory_uri() . '/onepageboxed.css');
}
add_action( 'wp_enqueue_scripts', 'onepageboxed_child_enqueue_styles',99);
?>