<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo("charset") ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link rel="stylesheet" href="styles.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class('a-theme-01'); ?>>
    <?php
    if (function_exists('wp_body_open')) {
        wp_body_open();
    }
    ?>
    <div id="page" class="site">
        <header id= "masthead" class="site-header" role="banner">
           <?php get_template_part('template/header/nav');?>
        </header>
        <div class="site-content" id="content">

    