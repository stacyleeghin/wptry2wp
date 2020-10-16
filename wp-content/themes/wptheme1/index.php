<?php get_header()?>

<div class="index">

  <?php
    while ( have_posts()){
        the_post();
        get_template_part('partials/content', 'index');
    }
  
  
  ?>

</div>



 <?php get_footer()?>

