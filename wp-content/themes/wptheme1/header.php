<!DOCTYPE html>
<html lang="en">

<head>
  <!-- meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Bootstrap UI Kit">
  <meta name="keywords" content="ui kit">
  <meta name="author" content="UIdeck">

  <title>Headers - Helium Bootstrap 4 UI Kit</title>

  <!-- CSS Files -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/main.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/animate.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/owl.carousel.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/owl.theme.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/responsive.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/custom.css">

  <!-- Fonts icons -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/font-awesome.min.css">

  <?php wp_head()?>
</head>
<div class="mainnav">
      <div class="topsec">
        <a class="navbar-brand" href="index.html"><img src="<?php echo get_template_directory_uri()?>/img/banner/logo.png" alt=""></a>
        <div class="phonenumber">
          
          <h2><i class="fa fa-phone" aria-hidden="true"></i>021 1528 148</h2>
        </div>
  
      </div>
      <!-- Nav -->
      <nav class="navbar navbar-toggleable-sm navbar-light bg-black">
        <div class="container">
          <!-- <a class="navbar-brand" href="index.html"><img src="img/service/logo.png" alt=""></a> -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar4" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbar4">
            <!-- <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="home.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="re-roofing.html">Re-roofing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="newroofing.html">New Roofing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="products.html">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="gallery.html">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="testimonials.html">Testimonials</a>
              </li>
  
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact</a>
              </li>
            
            </ul> -->
            <?php wp_nav_menu( array(
            'theme_location' => 'main-menu',
            'container' => 'ul',
            'menu_class' => 'navbar-nav'
          ) ); ?>
            
          </div>
        </div>
      </nav>
    </div>