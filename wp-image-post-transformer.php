<?php 

/*
Plugin Name: Image Post Transformer
Plugin URI: https://github.com/alexzhxin/wp-image-post-transformer
Description: With this plugin, your images are clickable and targets a post. Social sharing available.
Version: 1.0.0
Author: Alexandre Nguyen
Author URI: http://alexandrenguyen.fr
License: MIT
*/

add_action( 'wp_enqueue_scripts', 'register_scripts', 99999 );

function register_scripts() {
	    wp_register_script( 'load-images-script', plugins_url( '/js/script.js', __FILE__ ) );
}

?>