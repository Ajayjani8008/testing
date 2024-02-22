<?php

/**
 * Template Name :functions.php 
 * Description: add features to wordpress theme
 *
 * 
 *
 *  */
//add the customizer.php 
function a_theme_enqueue_scripts()
{   //enqueue main style 
    wp_enqueue_style('style-css', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'));

    //enqeue main js(script)
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/main.js', [], filemtime(get_template_directory() . '/assets/main.js'));


    // in another way we can do this
    /*

    wp_register_style('style-css', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'));

    wp_register_script('main-js', get_template_directory_uri() . '/assets/main.js', [], filemtime(get_template_directory() . 'assets/main.js'), true);

    if(is_archive()){
        wp_enqueue_style('style-css');
        wp_enqueue_script('main-js');
    }

    */
    //register bootstrap style 
    wp_register_style('bootstrap-css', get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css');

    //register bootstrap js(script)
    wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js',['jquery']);

    //enqueue bootstrap style
    wp_enqueue_style('bootstrap-css');

    //enqueue bootstrap script
    wp_enqueue_script('bootstrap-js');
}
add_action('wp_enqueue_scripts', 'a_theme_enqueue_scripts');
