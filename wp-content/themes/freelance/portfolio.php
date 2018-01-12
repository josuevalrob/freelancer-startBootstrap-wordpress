    <section class="portfolio" id="portfolio">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Portfolio</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <?php 
          get_template_part('recent', 'posts');

          if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="col-md-6 col-lg-4">
            <!-- print the post link -->
            <a class="portfolio-item d-block mx-auto" href="<?php the_permalink(); ?>">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <!-- print the post image -->
              <?php the_post_thumbnail('', array('class' => 'img-fluid')); ?>
            </a>
          </div>
          <?php endwhile; endif; ?>
        </div>          
      </div>
    </section>