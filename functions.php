<?php

function tp_register_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'tp_register_menu' );

function tp_tagpin_scripts() {
    wp_enqueue_style( 'tagpin_theme_css', get_stylesheet_uri() );
    wp_enqueue_style( 'tagpin_css', get_template_directory_uri()."/css/main.css", array(), '5.0.0', true );
    wp_enqueue_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css' );
    wp_enqueue_script( 'bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'tp_tagpin_scripts' );



// add_action( 'woocommerce_single_product_summary', 'tagpin_modificacion_uno', 19 );
// function tagpin_modificacion_uno(){
// 	echo "<div class='row'><div class='col-md-4'></div><div class='col-sm-12 col-md-4'>Inicio";
// }

// add_action( 'woocommerce_single_product_summary', 'tagpin_modificacion_dos', 21 );
// function tagpin_modificacion_dos(){
// 	echo "Fin</div><div class='col-md-4'></div></div>";
// }

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_julio', 1000 );

function woocommerce_template_single_julio(){
	echo "HOLA MUNDO";
}


remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
add_action( 'woocommerce_before_single_product_summary', 'woocommerce_template_single_title', 15 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );

// woocommerce_show_product_sale_flash
// woocommerce_template_single_title
// woocommerce_show_product_images
// woocommerce_template_single_rating
// woocommerce_template_single_price
// woocommerce_template_single_excerpt
// woocommerce_template_single_add_to_cart
// woocommerce_template_single_meta
// woocommerce_template_single_sharing