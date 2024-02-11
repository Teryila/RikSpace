<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Company Additional Services</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <header>
        <img src="https://i.imgur.com/zKUOaT7.jpg" alt="RikSpace">
    </header>

    <nav>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
        <!-- Add more navigation links as needed -->
    </nav>

    <section>
        <!-- Rest of your content goes here -->

        <!-- Add more content for the Additional Services section as needed -->

        <!-- Example PHP-generated content with the additional styles -->
        <div class="booking-info">
            <h2>Booking Information</h2>
            <p>This is some example content generated by PHP.</p>
            <ul>
                <li><strong>Date:</strong> <?= date("F j, Y"); ?></li>
                <li><strong>Time:</strong> <?= date("g:i A"); ?></li>
                <li><strong>Location:</strong> Your Venue</li>
            </ul>
        </div>

    </section>

    <!-- Include the Footer -->
    <?php include('footer.php'); ?>

    <!-- Add any additional scripts as needed -->

    <!-- Floating navigation button script -->
    <button class="scroll-btn" onclick="topFunction()">^</button>

    <script src="scripts.js"></script>

</body>

</html>
