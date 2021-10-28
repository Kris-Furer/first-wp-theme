<?php get_header(); ?>

<div class="hero-section">






  <div class="cta">
     <h1>
       <?php echo get_theme_mod('call_to_action') ?>
     </h1>
     <h1>
       <?php echo get_theme_mod('color_picker'); ?>
     </h1>
     <div class="my-btn my-3">Support Us</div>
  </div>
</div>
<div class="container m-5 mx-auto">
<!-- Show recent blog posts_per_page:::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
    <?php
       // the query
       $the_query = new WP_Query( array(
         'post_type' => 'blog',
         'posts_per_page' => 3,
       ));
    ?>
    <h1 class="my-4">Recent Posts</h1>
    <!-- Loop Begins::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
    <?php if ( $the_query->have_posts() ) : ?>
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="row my-5 mx-auto">


        <!--- The Picture ------------->
          <div class="col-5">
            <?php the_post_thumbnail("medium_large", ['class'=>'recent-post-thumb object-cover']); ?>
          </div>
          <!--- The text ------------->
          <div class="col-7">
              <!-- Show the postype -->
            <?php echo get_the_term_list($post->ID, 'Posttype', '<div class="posttype">', ' ', '</div>'); ?>
            <h3><?php the_title(); ?></h3>
            <p>Posted: <?php the_date('F j, Y'); ?></p>
            <p>Posted by: <?php the_author('F j, Y'); ?></p>
            <p><?php the_excerpt(); ?></p>
          </div>
        </div>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>

    <?php else : ?>
      <p><?php __('There are no post yet..'); ?></p>
    <?php endif; ?>
  </div>




    <!-- Show Supporters::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
  <div class="container-fluid supporter-section">
      <div class="row">
        <div class="col-12">
            <h2 class="my-5 text-center">Our Supporters</h2>
        </div>
      </div>

      <div class="row">
        <?php
        query_posts(array(
          'post_type' => supporters
        ));
        if (have_posts() ) :
          while (have_posts() ) : the_post(); ?>
        <div class=" col-md-3 col-6 my-3">
            <!-- Insert Supporters here -->
          <?php the_post_thumbnail("medium", ['class'=>'supporter-logo']); ?>
        </div>
        <?php endwhile;
          else : echo '<p>There are no posts!</p>';
      endif;
      ?>
    </div>
  </div>



<?php get_footer(); ?>
