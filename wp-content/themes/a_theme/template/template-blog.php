<?php

/**
 * Template Name:blogTemplate
 * 
 */


get_header();
echo '<pre>';
printf(get_bloginfo('stylesheet_directory'));
echo '<br>';
printf(get_theme_file_uri('style.css'));
echo '</pre>';

 
get_footer();
