<?php
/*
Template Name: Flight Template
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Display Example</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles.css">
</head>

<body>

    <header>
        <img src="<?php echo get_template_directory_uri(); ?>/https://i.imgur.com/Q5ooESn.png" alt="RikSpace Logo">
    </header>

    <nav>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
        <!-- Add more navigation links as needed -->
    </nav>

    <section>
        <!-- Your content goes here -->

        <h2>Image Gallery</h2>

        <div class="image-container">
            <img src="<?php echo get_template_directory_uri(); ?>/https://i.imgur.com/Av9czXE.jpg" alt="suitable comfort and plane">
            <img src="<?php echo get_template_directory_uri(); ?>/https://i.imgur.com/bzXN2qB.jpg" alt="all plane for your comfort">
            <!-- Add more images as needed -->
        </div>

    </section>

    <!-- Include the Footer -->
    <?php get_footer(); ?>

    <!-- Add any additional scripts as needed -->

    <!-- Floating navigation button script -->
    <button class="scroll-btn" onclick="topFunction()">^</button>

    <script src="<?php echo get_template_directory_uri(); ?>/scripts.js"></script>

</body>

</html>
