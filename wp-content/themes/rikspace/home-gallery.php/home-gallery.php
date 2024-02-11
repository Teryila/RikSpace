<?php
/*
Template Name: Flight Template
*/
get_header(); // Include the common header
?>

<section>
    <!-- Your content goes here -->

    <h2>Image Gallery</h2>

    <div class="image-container">
        <img src="<?php echo get_template_directory_uri(); ?>/https://i.imgur.com/zKUOaT7.jpg" alt="suitable comfort plane">
        <img src="<?php echo get_template_directory_uri(); ?>/https://i.imgur.com/ioGpzOZ.jpg" alt="all plane for your comfort">
        <!-- Add more images as needed -->
    </div>

</section>

<?php get_footer(); // Include the common footer ?>
