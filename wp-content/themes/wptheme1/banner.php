<div class="container-fluid features">
    <div class="hero2">

      <?php

            $args = array('post_type' => 'banner');
            // The Query
            $the_query = new WP_Query( $args );

            global $active_class;  
            $active_class = 'active';

            // The Loop
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                get_template_part('partials/content','banner');

                $active_class = '';
            }

            /* Restore original Post Data */
            wp_reset_postdata();

        ?>
       
    </div>
     
      
</div>