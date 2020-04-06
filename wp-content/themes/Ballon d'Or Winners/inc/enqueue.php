<?php

function ballon_scripts(){

    wp_enqueue_style( 'googlt-fonts', '//fonts.googleapis.com/css?family=Rubik:300,400,500,700&display=swap');
    wp_enqueue_style( 'ballon-style', get_theme_file_uri('/css/style.css'));

    wp_enqueue_script( 'ballon-main-js',get_theme_file_uri('/dist/main.js') , array(), '1.0', true);
    wp_localize_script( 'ballon-main-js', 'ballonData', array(
        'root_url' => get_site_url( )
    ));
}



add_action('wp_enqueue_scripts', 'ballon_scripts');