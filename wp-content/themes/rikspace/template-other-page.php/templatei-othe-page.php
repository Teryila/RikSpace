<?php
/*
Template Name: Flight Template
*/
get_header(); // Include the header

// Define your dynamic content variables here
$companyName = "rikspace";
$bookingDescription = "Your booking description";
$contactInformation = [
    'Email' => 'info@example.com',
    'Phone' => '+123 7039630505',
];

// Output the dynamic content
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <h1>Welcome to <?php echo esc_html($companyName); ?></h1>
            </header>

            <div class="entry-content">
                <section class="booking-info">
                    <h2>Booking Information</h2>
                    <p><?php echo esc_html($bookingDescription); ?></p>
                    <ul>
                        <?php foreach ($contactInformation as $method => $value) : ?>
                            <li><strong><?php echo esc_html($method); ?>:</strong> <?php echo esc_html($value); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </section>

                <!-- Add more sections and content as needed -->

                <?php get_footer(); // Include the footer ?>
            </div>
        </article>
    </main>
</div>