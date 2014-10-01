<?php

function ddu_style() {
  wp_enqueue_style( "bootstrap", get_template_directory_uri() . "/lib/bootstrap-sass-official/assets/stylesheets/bootstrap.scss" );
	wp_enqueue_style( "style", get_template_directory_uri() . "/style.css" );
}

function ddu_script() {
	wp_enqueue_script( "masonry", get_template_directory_uri(). "/lib/masonry/dist/masonry.pkgd.js", "", "", false );
	wp_enqueue_script("app", get_template_directory_uri() . "/dev/js/app.js", "", "", false);
}

//Enqueue our styles and scripts
add_action( "wp_enqueue_scripts", "ddu_style");
add_action( "wp_enqueue_scripts", "ddu_script");

//Give blogs the option for "featured images"
//Give dashboard the menu option
add_theme_support( "post-thumbnails" );
add_theme_support( "menus" );

function register_my_menu() {
  register_nav_menu('header-menu','Header Menu' );
}
add_action( 'init', 'register_my_menu' );