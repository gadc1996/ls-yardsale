<?php 
function add_theme_scripts(){
	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');

function add_post_thumbnail(){
	add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'add_post_thumbnail');
?>
