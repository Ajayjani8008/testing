<?php
// Theme setup
function theme_setup() {
    // Add support for title tag
    add_theme_support('title-tag');

    // Automatic feed links support
    add_theme_support('automatic-feed-links');

    // Post thumbnails support 
    add_theme_support('post-thumbnails');

    // Add support for custom logo
    add_theme_support('custom-logo', [
        'header-text' => ['site-title', 'site-description'],
        'height' => 100,
        'width' => 100,
        'flex-height' => true,
        'flex-width' => true,
    ]);

    // Arguments for custom background support
    $bg_args = array(
        'default-color' => '#ffffff',
        'default-image' => '',
        'default-repeat' => 'repeat',
        'default-position-x' => '',
        'default-attachment' => '',
        'default-position-y' => '',
        'default-size' => '',
        'wp-head-callback' => '_custom_background_cb', // Define this callback if needed
        'admin-head-callback' => '',
        'admin-preview-callback' => ''
    );
    // Add support for custom background
    add_theme_support('custom-background', $bg_args);

    // HTML5 support for search form, comment form, comment-list, gallery, caption
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ]);

    // Custom header support
    add_theme_support('custom-header', [
        'default-image' => '',
        'width' => 1200,
        'height' => 280,
        'flex-width' => true,
        'flex-height' => true,
        'header-text' => true,
        'uploads' => true,
        'video' => true,
    ]);

    // Add support for selective refresh for widgets in Customizer
    add_theme_support('customizer-selective-refresh-widgets');

    // Add theme support for full and wide images
    add_theme_support('align-wide');

    // Add support for editor styles
    add_theme_support('editor-styles');
    add_editor_style('editor-style.css');

    // Add theme support for responsive embedded content
    add_theme_support('responsive-embeds');

    // Add support for block styles 
    add_theme_support('wp-block-styles');

    // Add support for custom font sizes
    add_theme_support('custom-font-sizes');

    // Add support for custom gradients 
    add_theme_support('custom-gradients');

    // Add support for custom line heights
    add_theme_support('custom-line-height');

    // Add support for custom line widths 
    add_theme_support('custom-line-widths');

    // Add support for custom padding
    add_theme_support('custom-padding');

    // Add support for custom margins
    add_theme_support('custom-margins');

    add_theme_support('custom-colors', array(
        'default' => '#ffffff',
        'link' => '#0066cc',
        'sidebar' => '#f5f5f5',
        'footer' => '#333333',
    ));
}
add_action('after_setup_theme', 'theme_setup');

// Register custom navigation menu 
function register_custom_menus() {
    register_nav_menus(array(
        'primary_menu' => esc_html__('Primary Menu', 'a_theme'),
        'footer_menu'  => esc_html__('Footer Menu', 'a_theme'),
    ));
}
add_action('init', 'register_custom_menus');

// Customize theme settings in the Customizer
function mytheme_customize_register($wp_customize) {
    // Add a new section for general theme options
    $wp_customize->add_section(
        'mytheme_general_option',
        array(
            'title' => __('General Options', 'mytheme'),
            'priority' => 30,
        )
    );

// Add a setting for site layout
$wp_customize->add_setting('site_layout', array(
    'default' => 'full-width',
    'sanitize_callback' => 'mytheme_sanitize_callback', // You'll need to define this function
));

// Add a control for site layout 
$wp_customize->add_control('site_layout', array(
    'label' => __('Site Layout', 'mytheme'),
    'section' => 'mytheme_general_option',
    'type' => 'radio',
    'choices' => array(
        'full-width' => __('Full Width', 'mytheme'),
        'boxed' => __('Boxed', 'mytheme'),
    ),
));


    // Add settings for primary color
    $wp_customize->add_setting('primary_color', array(
        'default' => '#ff0000',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    // Add a control for primary color 
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'primary_color', array(
        'label' => __('Primary Color', 'mytheme'),
        'section' => 'mytheme_general_option',
    )));

    // Add a setting for header image
    $wp_customize->add_setting('header_image', array(
        'default' => '',
        'sanitize_callback' => 'absint',
    ));

    // Add control for header image
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_image', array(
        'label' => __('Header Image', 'mytheme'),
        'section' => 'mytheme_general_option',
    )));

    // Add a setting for site title color
    $wp_customize->add_setting('site_title_color', array(
        'default' => '#333333',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    // Add control for site title color
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'site_title_color', array(
        'label' => __('Site Title Color', 'mytheme'),
        'section' => 'mytheme_general_option',
    )));
}
add_action('customize_register', 'mytheme_customize_register');
