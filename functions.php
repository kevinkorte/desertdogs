<?php

function ddu_style() {
	wp_enqueue_style( "style", get_template_directory_uri() . "/style.css" );
}

//Enqueue our styles and scripts
add_action( "wp_enqueue_scripts", "ddu_style");