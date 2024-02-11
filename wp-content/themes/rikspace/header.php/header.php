<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header>
        <!-- Your header content goes here -->
    </header>

    <nav>
        <!-- Your navigation menu or links go here -->
        <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
    </nav>

    <!-- Optionally, you can include additional header elements if needed -->
    <div class="additional-header-content">
        <!-- Additional header content goes here -->
    </div>
