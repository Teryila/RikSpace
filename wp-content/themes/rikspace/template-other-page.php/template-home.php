<?php
/*
Template Name: Flight Template
*/
get_header(); // Include the common header
?>

<body>
    <header>
        <h1>Welcome to <?php echo $rikspace; ?></h1>
    </header>

    <section class="booking-info">
        <h2>Booking Information</h2>
        <p><?php echo $bookingDescription; ?></p>

        <ul>
            <?php foreach ($contactInformation as $method => $value) : ?>
                <li><strong><?php echo $method; ?>:</strong> <?php echo $value; ?></li>
            <?php endforeach; ?>
        </ul>
    </section>

    <!-- Add more sections and
