<?php

/*

Template Name: Blog Page Template

*/

?>

<?php get_header(); ?>
  <div class="container col-sm-12 col-md-8 fluid mt-5 mb-5">
     <div class="row">






        <?php
        if (have_posts() ) :
            while (have_posts() ) : the_post(); ?>

            <div class="col-12 my-3">
             <h1><?php the_title() ?></h1>
             </div>
             <!-- <div class="col-3"> -->
               <p class="text-right"><?php the_date('F j, Y'); ?></p>
               <p>Author: <span class="fw-bold"><?php the_author('F j, Y'); ?></span></p>

             <!-- </div> -->

        <div class="row">
          <div class="col-12">
             <?php the_post_thumbnail("medium_large", ['class'=>'single-img']); ?>
          </div>
          <p class="single-text"><?php the_content() ?></p>
        </div>



        <?php endwhile;
            else : echo '<p>There are no posts!</p>';
        endif;
        ?>
      </div>
    </div>
        <!-- <p>This is the sports template</p> -->
</body>

<?php get_footer(); ?>
