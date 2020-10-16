<?php get_header()?>

<div class="index">

  <?php
    while ( have_posts()){
        the_post();
        get_template_part('partials/content', 'index');
    }
  
  
  ?>
    <div class="container">
        <div id="single-testimonial-item" class="owl-carousel">

                <?php
                    $args = array('post_type' => 'testimonial');
                    // The Query
                    $the_query = new WP_Query( $args );
                
                // The Loop
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    get_template_part('partials/content', 'testimonial');
                }

                /* Restore original Post Data */
                wp_reset_postdata();

                ?>

            </div>




        </div>
      
    </div>







 <?php get_footer()?>

