<?php
/**
 * Template Name: functions.php
 * Description: add features to wordpress theme
 */

if (!defined('A_THEME_DIR_PATH')) {
    define('A_THEME_DIR_PATH', untrailingslashit(get_template_directory()));
}
if (!defined('A_THEME_DIR_URI')) {
    define('A_THEME_DIR_URI', untrailingslashit(get_template_directory_uri()));
}

// require_once A_THEME_DIR_PATH . '/includes/helpers/autoloader.php';

require get_template_directory().'/includes/helpers/autoloader.php';
// function a_theme_get_theme_instance()
// {
//     $a_theme_instance = a_theme\includes\classes\a_theme_singleton::get_instance();
//     return $a_theme_instance;
// }
// a_theme_get_theme_instance();

require A_THEME_DIR_PATH.'/includes/customizer/custom_function.php';

function a_theme_enqueue_scripts()
{
    // Enqueue main style
    wp_enqueue_style('style-css', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'));

    // Enqueue main js(script)
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/main.js', [], filemtime(get_template_directory() . '/assets/main.js'));

    // Register bootstrap style
    wp_register_style('bootstrap-css', get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css');

    // Register bootstrap js(script)
    wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js', ['jquery']);

    // Enqueue bootstrap style
    wp_enqueue_style('bootstrap-css');

    // Enqueue bootstrap script
    wp_enqueue_script('bootstrap-js');
}

add_action('wp_enqueue_scripts', 'a_theme_enqueue_scripts');

?>
