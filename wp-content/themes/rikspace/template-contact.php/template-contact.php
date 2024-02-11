<?php
$companyName = "rikspace"; // Replace with your actual company name

// Define variables for booking information
$bookingDescription = "For inquiries and bookings, please contact us at:";
$contactInformation = [
    "Email" => "info@rikspace.com",
    "Phone1" => "+234 7039630505",
    "Phone2" => "+234 8114510020",
    // Add more contact information as needed
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $companyName; ?></title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to the CSS file -->
</head>
<body>
    <header>
        <h1>Welcome to <?php echo $companyName; ?></h1>
    </header>

    <section>
        <h2>Contact Information</h2>
        <p><?php echo $bookingDescription; ?></p>

        <ul>
            <?php foreach ($contactInformation as $label => $info) : ?>
                <li><strong><?php echo $label; ?>:</strong> <?php echo $info; ?></li>
            <?php endforeach; ?>
        </ul>
    </section>

    <!-- Your additional HTML content goes here -->

    <footer>
        &copy; <?php echo date("Y"); ?> <?php echo $companyName; ?>. All rights reserved.
    </footer>

    <!-- Add any additional scripts as needed -->

</body>
</html>