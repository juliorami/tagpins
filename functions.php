<?php

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

/**
 * Proper way to enqueue scripts and styles
 */

function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );
    // wp_enqueue_style( 'bootstrap', "<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">" );

    // wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
    // wp_enqueue_script( 'bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css", array(), '1.0.1', true );
    wp_enqueue_script( 'letteranimation', get_template_directory_uri()."/vendor/cssanimation/letteranimation.min.js", array(), '1.0.0', true );
    wp_enqueue_script( 'snabbt', "https://cdnjs.cloudflare.com/ajax/libs/snabbt.js/0.6.4/snabbt.js", array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );
	
 ?>
