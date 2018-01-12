<?php get_header() ?>

<?php
    // Start the loop.
    while ( have_posts() ) : the_post();

        // Include the page content.
       the_content();

    // End the loop.
    endwhile;
?>

<?php get_footer() ?>
