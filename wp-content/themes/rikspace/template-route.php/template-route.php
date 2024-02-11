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
    <title><?= $rikspace ?> <?= $pageTitle ?></title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to the CSS file -->
    <!-- Add any additional meta tags, stylesheets, or scripts as needed -->
    <style>
        /* Your global styles can go here */
    </style>
</head>

<body>

    <!-- Include the common header -->
    <?php include 'header.php'; ?>

    <section class="booking-info">
        <h2><?= $pageTitle ?></h2>
        <p><?= $routeDescription ?></p>

        <!-- Add more content specific to your page as needed -->

    </section>

    <!-- Include the common footer -->
    <?php include 'footer.php'; ?>

    <!-- Add any additional scripts as needed -->
    <script src="script.js"></script> <!-- Link to the JavaScript file -->

</body>

</html>
