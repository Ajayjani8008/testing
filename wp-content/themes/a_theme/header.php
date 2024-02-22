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

    <header>
        <img src="" alt="Logo" class="logo">
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <button class="search-button">Search</button>
        <?= wp_head(); ?>
    </header>