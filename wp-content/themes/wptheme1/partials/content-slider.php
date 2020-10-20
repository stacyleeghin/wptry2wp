    <?php
        global $active_class;

        $buttonone = get_field('buttonone');
        $buttonone = get_field('buttontwo');
        // print_r($buttonone)
    ?> 


<div class="carousel-item <?php echo $active_class?>">
    <img src="<?php the_field('image')?>" alt="">
    <div class="carousel-caption">
        <h3 class="slide-title animated fadeInDown"><?php the_field('title')?></h3>
        <h5 class="slide-text animated fadeIn"><?php the_field('summary')?></h5>
        <a href="#" class="btn btn-lg btn-default-filled animated fadeInUp"><?php the_field('buttonone')?></a>
        <a href="#" class="btn btn-lg btn-common animated fadeInUp"><?php the_field('buttontwo')?></a>
    </div>
</div>