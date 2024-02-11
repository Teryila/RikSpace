<?php
$companyName = "rikspaace"; // Replace with your actual company name
$accessibilityDescription = "Experience unparalleled access to destinations worldwide with our extensive network of international airports.";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $companyName ?> Global Accessibility</title>
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/styles.css"> <!-- Link to the CSS file -->
    <!-- Add any additional meta tags, stylesheets, or scripts as needed -->
</head>

<body>

    <!-- Include the Header -->
    <?php include 'header.php'; ?>

    <section>
        <h2>Global Accessibility</h2>
        <p><?= $accessibilityDescription ?></p>
        <!-- Add more content specific to global accessibility as needed -->
    </section>

    <!-- Include the Footer -->
    <?php include 'footer.php'; ?>

    <!-- Add any additional scripts as needed -->
    <script src="<?= get_template_directory_uri(); ?>/script.js"></script> <!-- Link to the JavaScript file -->

</body>

</html>