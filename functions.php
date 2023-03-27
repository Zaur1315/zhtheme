<?php

function zhtheme_scripts() {
    wp_enqueue_style( 'zhtheme-bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'zhtheme-style', get_stylesheet_uri(  ), array(), wp_get_theme()->get('Version'));
       // wp_enqueue_style( 'zhtheme-main', get_template_directory_uri()."/assets/css/main.css" );
    wp_enqueue_script( 'zhtheme-bootstrap', get_template_directory_uri(). '/assets/js/bootstrap.bundle.min.js', array(), false, true);
    wp_enqueue_script( 'zhtheme-jquery', "https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js", array(), false, true );
    wp_enqueue_script( 'zhtheme-main', get_template_directory_uri(). '/assets/js/main.js', array(), false, true);

}


add_action( 'wp_enqueue_scripts', 'zhtheme_scripts' );