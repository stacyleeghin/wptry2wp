<?php get_header()?>

<div class="index">

  <?php
    while ( have_posts()){
        the_post();
        get_template_part('partials/content', 'index');
    }
  
  
  ?>
  <div id="portfolio" class="row wow fadeInUpQuick" data-wow-delay="0.8s">
        <?php

            $args = array('post_type' => 'gallerypic');
            // The Query
            $the_query = new WP_Query( $args );

            // The Loop
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                get_template_part('partials/content', 'gallerypic');
            }

            /* Restore original Post Data */
            wp_reset_postdata();

        ?>
    </div>
</div>



 <?php get_footer()?>