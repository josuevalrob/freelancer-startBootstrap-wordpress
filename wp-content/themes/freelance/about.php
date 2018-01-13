<?php 
$id = 2; // add the ID of the page where the 2 is
$p = get_page($id);
$t = $p->post_title;
?>
    <section class="bg-primary text-white mb-0" id="about">
      <div class="container">
        <h2 class="text-center text-uppercase text-white">
          <?php 
          echo apply_filters('post_title', $t); // the title is here wrapped with h3
           ?>
        </h2>
        <hr class="star-light mb-5">
        <div class="row">
          <div class=" ml-auto">
            <p class="lead">
              <?php echo apply_filters('the_content', $p->post_content); ?>
            </p>
          </div>
        </div>
        <div class="text-center mt-4">
          <a class="btn btn-xl btn-outline-light" href="https://github.com/josuevalrob/freelancer-startBootstrap-wordpress.git">
            <i class="fa fa-download mr-2"></i>
            Git Hub Project!
          </a>
        </div>
      </div>
    </section>


    