<?php get_header()?>

<div class="index">

  <?php
    while ( have_posts()){
        the_post();
        get_template_part('partials/content', 'index');
    }
  
  
  ?>
     <!----gallery--> 
     <div id="portfolio" class="row wow fadeInUpQuick" data-wow-delay="0.8s">
      <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix marketing planning">
        <div class="portfolio-item">
          <div class="portfolio-img">
            <img src="<?php echo get_template_directory_uri()?>/img/portfolio/img1.jpg" alt="" />
          </div>
          <div class="portfoli-content">
            <div class="sup-desc-wrap">
              <div class="sup-desc-inner">
                <div class="sup-link">
                  <a class="left-link" href="#"><i class="fa fa-link"></i></a>
                  <a class="right-link" href="#"><i class="fa fa-heart"></i></a>
                </div>
                <div class="sup-meta-wrap">
                  <a class="sup-title" href="#">
                    <h4>TITLE HERE</h4>
                  </a>
                  <p class="sup-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente vel quisquam.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix branding planning">
        <div class="portfolio-item">
          <div class="portfolio-img">
            <img src="<?php echo get_template_directory_uri()?>/img/portfolio/img2.jpg" alt="" />
          </div>
          <div class="portfoli-content">
            <div class="sup-desc-wrap">
              <div class="sup-desc-inner">
                <div class="sup-link">
                  <a class="left-link" href="#"><i class="fa fa-link"></i></a>
                  <a class="right-link" href="#"><i class="fa fa-heart"></i></a>
                </div>
                <div class="sup-meta-wrap">
                  <a class="sup-title" href="#">
                    <h4>TITLE HERE</h4>
                  </a>
                  <p class="sup-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente vel quisquam.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix branding research">
        <div class="portfolio-item">
          <div class="portfolio-img">
            <img src="<?php echo get_template_directory_uri()?>/img/portfolio/img3.jpg" alt="" />
          </div>
          <div class="portfoli-content">
            <div class="sup-desc-wrap">
              <div class="sup-desc-inner">
                <div class="sup-link">
                  <a class="left-link" href="#"><i class="fa fa-link"></i></a>
                  <a class="right-link" href="#"><i class="fa fa-heart"></i></a>
                </div>
                <div class="sup-meta-wrap">
                  <a class="sup-title" href="#">
                    <h4>TITLE HERE</h4>
                  </a>
                  <p class="sup-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente vel quisquam.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix marketing research">
        <div class="portfolio-item">
          <div class="portfolio-img">
            <img src="<?php echo get_template_directory_uri()?>/img/portfolio/img4.jpg" alt="" />
          </div>
          <div class="portfoli-content">
            <div class="sup-desc-wrap">
              <div class="sup-desc-inner">
                <div class="sup-link">
                  <a class="left-link" href="#"><i class="fa fa-link"></i></a>
                  <a class="right-link" href="#"><i class="fa fa-heart"></i></a>
                </div>
                <div class="sup-meta-wrap">
                  <a class="sup-title" href="#">
                    <h4>TITLE HERE</h4>
                  </a>
                  <p class="sup-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente vel quisquam.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix marketing planning">
        <div class="portfolio-item">
          <div class="portfolio-img">
            <img src="<?php echo get_template_directory_uri()?>/img/portfolio/img5.jpg" alt="" />
          </div>
          <div class="portfoli-content">
            <div class="sup-desc-wrap">
              <div class="sup-desc-inner">
                <div class="sup-link">
                  <a class="left-link" href="#"><i class="fa fa-link"></i></a>
                  <a class="right-link" href="#"><i class="fa fa-heart"></i></a>
                </div>
                <div class="sup-meta-wrap">
                  <a class="sup-title" href="#">
                    <h4>TITLE HERE</h4>
                  </a>
                  <p class="sup-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente vel quisquam.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix planning research">
        <div class="portfolio-item">
          <div class="portfolio-img">
            <img src="<?php echo get_template_directory_uri()?>/img/portfolio/img6.jpg" alt="" />
          </div>
          <div class="portfoli-content">
            <div class="sup-desc-wrap">
              <div class="sup-desc-inner">
                <div class="sup-link">
                  <a class="left-link" href="#"><i class="fa fa-link"></i></a>
                  <a class="right-link" href="#"><i class="fa fa-heart"></i></a>
                </div>
                <div class="sup-meta-wrap">
                  <a class="sup-title" href="#">
                    <h4>TITLE HERE</h4>
                  </a>
                  <p class="sup-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente vel quisquam.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      <!-- end -->
      <script>
    $(document).ready(function() {
      //MixitUp
      $(function() {
        $('#portfolio').mixItUp();
      });
    });
  </script>
</div>



 <?php get_footer()?>