<?php
function register_resource() {
    register_nav_menu('main-menu','Main Menu');

    //register post types

    $args = array(
        'public'  => true,
        'label'   => 'Testimonials',
    );
    register_post_type('testimonial', $args);


    // $args = array(
    //     'public'  => true,
    //     'label'   => 'newroofing',
    // );
    // register_post_type('newroofing', $args);


    $args = array(
        'public'  => true,
        'label'   => 'Features',
    );
    register_post_type('features', $args);



    $args = array(
        'public'  => true,
        'label'   => 'Gallerypic',
    );
    register_post_type('gallerypic', $args);

    $args = array(
        'public'  => true,
        'label'   => 'Slider',
    );
    register_post_type('slider', $args);

    $args = array(
        'public'  => true,
        'label'   => 'Banner',
    );
    register_post_type('banner', $args);


}


add_action( 'init', 'register_resource' );

function add_class_to_li( $classes, $item, $args ) {
    $classes[] = "nav-item";
    return $classes;

}

add_filter( 'nav_menu_css_class' , 'add_class_to_li' , 10, 4 );

function add_class_to_anchors( $atts ) {
    $atts['class'] = 'nav-link';

    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_class_to_anchors', 10 );


?>

 

