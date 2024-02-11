<?php
$companyName = "Riks Services"; // Replace with your actual company name

// Define variables for payment stack
$paymentDescription = "Facilitating secure and efficient transactions is our priority. Our payment stack includes industry-leading systems, ensuring your financial transactions are handled with the utmost confidentiality and adherence to international financial standards.";
$acceptedPaymentMethods = [
    "Credit Cards" => "All major credit cards are accepted.",
    "Wire Transfers" => "Secure wire transfer options are available.",
    // Add more accepted payment methods as needed
];
?>

<section>
    <h2>Payment Stack</h2>
    <p><?= $paymentDescription ?></p>

    <ul>
        <?php foreach ($acceptedPaymentMethods as $method => $description) : ?>
            <li><strong><?= $method ?>:</strong> <?= $description ?></li>
        <?php endforeach; ?>
    </ul>
</section>
