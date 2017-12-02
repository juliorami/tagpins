<?php

function tp_register_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'tp_register_menu' );

function tp_tagpin_scripts() {
    wp_enqueue_style( 'tagpin_theme_css', get_stylesheet_uri() );
    wp_enqueue_style( 'tagpin_css', get_template_directory_uri()."/css/main.css" );
    wp_enqueue_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css' );
    wp_enqueue_script( 'bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'tp_tagpin_scripts' );
