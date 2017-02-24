<?php
// Register my primary navigation menu
function register_my_menu() {
  register_nav_menu('primarynav-menu',__( 'Primary Navigation Menu' ));
}
add_action( 'init', 'register_my_menu' );

// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
       global $post;
  return '<a class="moretag" href="'. get_permalink($post->ID) . '">... [read more]</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

// Enqueue scripts to avoid conflicts with other plugins
// no need for 10 different developers a;; add links to jQuery!

function my_scripts_method() {
	wp_enqueue_script(
		'custom-script', // Name of your script
		get_stylesheet_directory_uri() . '/js/custom_acript.js', // Path to your script
		array( 'jquery' ) // Dependency to load prior to loading your script
	);
}

add_action( 'wp_enqueue_scripts', 'my_scripts_method' ); // Load up the scripts
