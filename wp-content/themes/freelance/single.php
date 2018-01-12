<?php get_header(); ?>
  <body id="page-top">

    <!-- Navigation -->
      <?php get_template_part( 'navigation'); ?>

<section class="bg-primary text-white mb-0" id="about">
  <div class="container">
    <?php
        // Start the loop.
        while ( have_posts() ) : the_post();
    ?>
    <?php the_post_thumbnail('', array('class' => 'img-fluid mb-5 d-block mx-auto')); ?>
    <h2 class="text-center text-uppercase text-white">
      <?php 
      the_title();
       ?>
    </h2>
    <hr class="star-light mb-5">
    <div class="row">
      <div class="ml-auto text-center lead">
          <?php the_content(); ?>
      </div>
    </div>
    <?php
        // End the loop.
        endwhile;
    ?>
  <div>
    <?php do_action('back_button'); ?>
</div>
  </div>
  </section>
    <!-- Contact Section -->
    <?php get_template_part( 'contact'); ?>

<?php get_footer() ?>

