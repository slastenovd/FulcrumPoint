<?php get_header(); ?>
<!-- =-=-=-=-=-=-= HOME SLIDER =-=-=-=-=-=-= -->
<section class="tt-container">
  <div class="tt-banner">
    <ul>
      <!-- SLIDE  -->
      <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"> 
        <!-- MAIN IMAGE --> 
        <img src="<?php bloginfo("template_url") ?>/images/slider/4.jpg"   alt=""  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> 
        <!-- LAYER NR. 1 -->
        <div class="tp-caption tt-slider-title sft"
                    data-x="50"
                    data-y="100"
                    data-speed="1000"
                    data-start="500"
                    data-easing="Power4.easeOut"
                    data-endspeed="300"
                    style="z-index: 1"><?php echo get_option('slider1_header'); ?></div>
        
        <!-- LAYER NR. 2 -->
        <div class="tp-caption tt-slider-subtitle sft"
                    data-x="50"
                    data-y="300"
                    data-speed="1000"
                    data-start="900"
                    data-easing="Power4.easeOut"
                    data-endspeed="300"
                    style="z-index: 2"><?php echo get_option('slider1_subheader'); ?></div>
        
        <!-- LAYER NR. 3 -->
        <div class="tp-caption sft"
                    data-x="50"
                    data-y="430"
                    data-speed="1000"
                    data-start="1100"
                    data-easing="Power4.easeOut"> <a href="#portfolio" class="tt-btn btn-bordered light page-scroll">подробнее</a> </div>
      </li>
      
      <!-- SLIDE  -->
      <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"> 
        
        <!-- MAIN IMAGE --> 
        <img src="<?php bloginfo("template_url") ?>/images/slider/1.jpg"   alt=""  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> 
        
        <!-- LAYER NR. 1 -->
        <div class="tp-caption tt-slider-title sft"
                            data-x="50"
                            data-y="100"
                            data-speed="1000"
                            data-start="500"
                            data-easing="Power4.easeOut"
                            data-endspeed="300"
                            style="z-index: 1"><?php echo get_option('slider2_header'); ?></div>
        
        <!-- LAYER NR. 2 -->
        <div class="tp-caption tt-slider-subtitle sft"
                            data-x="50"
                            data-y="300"
                            data-speed="1000"
                            data-start="900"
                            data-easing="Power4.easeOut"
                            data-endspeed="300"
                            style="z-index: 2"><?php echo get_option('slider2_subheader'); ?></div>
        
        <!-- LAYER NR. 3 -->
        <div class="tp-caption sft"
                            data-x="50"
                            data-y="430"
                            data-speed="1000"
                            data-start="1100"
                            data-easing="Power4.easeOut"> <a href="#portfolio" class="tt-btn btn-bordered light page-scroll">подробнее</a> </div>
      </li>
      
      <!-- SLIDE  -->
      <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"> 
        
        <!-- MAIN IMAGE --> 
        <img src="<?php bloginfo("template_url") ?>/images/slider/2.jpg"   alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> 
        
        <!-- LAYER NR. 1 -->
        <div class="tp-caption tt-slider-title sft"
                            data-x="50"
                            data-y="100"
                            data-speed="1000"
                            data-start="500"
                            data-easing="Power4.easeOut"
                            data-endspeed="300"
                            style="z-index: 1"><?php echo get_option('slider3_header'); ?></div>
        
        <!-- LAYER NR. 2 -->
        <div class="tp-caption tt-slider-subtitle sft"
                            data-x="50"
                            data-y="300"
                            data-speed="1000"
                            data-start="900"
                            data-easing="Power4.easeOut"
                            data-endspeed="300"
                            style="z-index: 2"><?php echo get_option('slider3_subheader'); ?></div>
        
        <!-- LAYER NR. 3 -->
        <div class="tp-caption sft"
                            data-x="50"
                            data-y="430"
                            data-speed="1000"
                            data-start="1100"
                            data-easing="Power4.easeOut"> <a href="#portfolio" class="tt-btn btn-bordered light page-scroll">подробнее</a> </div>
      </li>
      <!-- SLIDE  -->
      <li 
                        data-transition="fade"
                        data-slotamount="7"
                        data-masterspeed="500"
                        data-saveperformance="on"
                        > 
        
        <!-- MAIN IMAGE --> 
        <img src="<?php bloginfo("template_url") ?>/images/slider/3.jpg"   alt=""  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> 
        
        <!-- LAYER NR. 1 -->
        <div class="tp-caption tt-slider-title sft"
                            data-x="50"
                            data-y="100"
                            data-speed="1000"
                            data-start="500"
                            data-easing="Power4.easeOut"
                            data-endspeed="300"
                            style="z-index: 1"><?php echo get_option('slider4_header'); ?></div>
        
        <!-- LAYER NR. 2 -->
        <div class="tp-caption tt-slider-subtitle sft"
                            data-x="50"
                            data-y="300"
                            data-speed="1000"
                            data-start="900"
                            data-easing="Power4.easeOut"
                            data-endspeed="300"
                            style="z-index: 2"><?php echo get_option('slider4_subheader'); ?></div>
        
        <!-- LAYER NR. 3 -->
        <div class="tp-caption sft"
                            data-x="50"
                            data-y="430"
                            data-speed="1000"
                            data-start="1100"
                            data-easing="Power4.easeOut"> <a href="#portfolio" class="tt-btn btn-bordered light page-scroll">подробнее</a> </div>
      </li>
    </ul>
  </div>
</section>
<!-- =-=-=-=-=-=-= HOME SLIDER END =-=-=-=-=-=-= --> 

    <!-- Menu Section -->
    <div class="navigation-2"> 
      <!-- navigation-start -->
      <nav class="navbar navbar-default ">
        <div class="container"> 
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false">
             <span class="sr-only">Toggle navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
            </button>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->

          <?php
            $args = array(
              'menu_class'      => 'nav navbar-nav',
              'container'       => 'div', 
              'container_class' => 'collapse navbar-collapse', 
              'container_id'    => 'main-navigation',
              'theme_location'  => 'header_menu',
              'echo'            => 0,
            );
            $menu = wp_nav_menu( $args );
            $menu = str_replace('class="menu-item', 'class="menu-item dropdown', $menu );
            $menu = str_replace('class="sub-menu', 'class="sub-menu dropdown-menu', $menu );
            // $menu = str_replace('class="<a href="', 'class="<a  class="dropdown-toggle" data-toggle="dropdown" href="', $menu );
            $menu = str_replace('a href="', 'a class="dropdown-toggle" href="', $menu );
            echo $menu;
          ?>

          <div class="appoinment-button"><a class="appoinment-button" href="appointment.php">Запись на прием</a></div>
        </div>
        <!-- /.container-end --> 
      </nav>
    </div>
  <!-- /.navigation-end --> 
  <!-- Menu  End --> 




<!-- =-=-=-=-=-=-= PAGE SECTION =-=-=-=-=-=-= -->
<div id="page-section"> 
  
  <!-- =-=-=-=-=-=-= ABOUT US =-=-=-=-=-=-= -->
  <section id="about-us" class="padding-top-120">
    <div class="container">
      <div class="section-title"> <strong>WHAT WE DO</strong>
        <h1 class="heading bold">WHO WE ARE</h1>
        <hr>
        <p> Ut consequat velit a metus accumsan, vel tempor nulla blandit. Integer euismod magna vel mi congue suscipit.
          Ut consequat velit a metus accumsan, vel tempor nulla blandit. Integer euismod magna vel mi congue suscipit. </p>
      </div>
      <!-- End title-section -->
      
      <div class="row padding-top-30">
        <div class="col-md-6 col-md-push-5 col-md-offset-1"> 
          <!-- Accordion -->
          <dl class="accordion">
            <dt> <a class="active" href="#">Hair cutting</a> </dt>
            <dd>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc. </p>
            </dd>
            <dt> <a class="" href="#">Hair Styling</a> </dt>
            <dd>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</p>
            <dt> <a class="" href="#">SKIN CARE</a> </dt>
            <dd>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</p>
            </dd>
            <dt> <a class="" href="#">Beauty services </a> </dt>
            <dd>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</p>
            </dd>
            <dt> <a class="" href="#">MEN HAIRCUTS</a> </dt>
            <dd>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</p>
            </dd>
          </dl>
          <!-- End Accordion --> 
          
        </div>
        <!-- end col-md-6 -->
        
        <div class="col-md-5 col-md-pull-7"> <img src="<?php bloginfo("template_url") ?>/images/about-1.png"  alt=""> </div>
        <!-- end col-md-5 --> 
        
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
  <!-- =-=-=-=-=-=-= ABOUT US END =-=-=-=-=-=-= --> 
  
  <!-- =-=-=-=-=-=-= SEPARATOR =-=-=-=-=-=-= -->
  <div class="parallex-small section-padding-70">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="parallex-text">
            <h4>IMPRESSED WITH US ? </h4>
            <p>Fusce non leo ut sapien volutpat volutpat tiam rutrum malesuada erat sollicitudin non. </p>
          </div>
          <!-- end subsection-text --> 
        </div>
        <!-- end col-md-8 -->
        
        <div class="col-md-4">
          <div class="parallex-button"> <a class="page-scroll btn btn-lg btn-clean" href="#appoinment">Get An Appointment</a> </div>
          <!-- end parallex-button --> 
        </div>
        <!-- end col-md-4 --> 
        
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </div>
  <!-- =-=-=-=-=-=-= SEPARATOR END =-=-=-=-=-=-= --> 
  
  <!-- =-=-=-=-=-=-= PORTFOLIO =-=-=-=-=-=-= -->
  <section id="portfolio">
    <div class="portfolio-container text-center">
      <ul id="portfolio-grid" class="four-column hover-four">
        <li class="portfolio-item" data-groups='["all", "identety", "interface"]'>
          <div class="portfolio">
            <div class="tt-overlay"></div>
            <img src="<?php bloginfo("template_url") ?>/images/portfolio/1.jpg" alt="">
            <div class="portfolio-info">
              <h3 class="project-title">Project Title</h3>
              <a href="#" class="links">App Design</a> </div>
            <!-- /.project-info -->
            
            <ul class="portfolio-details">
              <li><a class="tt-lightbox" href="<?php bloginfo("template_url") ?>/images/portfolio/1.jpg"><i class="fa fa-search"></i></a></li>
              <li><a href="#"><i class="fa fa-external-link"></i></a></li>
            </ul>
          </div>
          <!-- /.recent-project --> 
        </li>
        <li class="portfolio-item" data-groups='["all", "identety", "web"]'>
          <div class="portfolio">
            <div class="tt-overlay"></div>
            <img src="<?php bloginfo("template_url") ?>/images/portfolio/2.jpg" alt="">
            <div class="portfolio-info">
              <h3 class="project-title">Project Title</h3>
              <a href="#" class="links">App Design</a> </div>
            <!-- /.project-info -->
            
            <ul class="portfolio-details">
              <li><a class="tt-lightbox" href="<?php bloginfo("template_url") ?>/images/portfolio/2.jpg"><i class="fa fa-search"></i></a></li>
              <li><a href="#"><i class="fa fa-external-link"></i></a></li>
            </ul>
          </div>
          <!-- /.recent-project --> 
        </li>
        <li class="portfolio-item" data-groups='["all", "interface"]'>
          <div class="portfolio">
            <div class="tt-overlay"></div>
            <img src="<?php bloginfo("template_url") ?>/images/portfolio/3.jpg" alt="">
            <div class="portfolio-info">
              <h3 class="project-title">Project Title</h3>
              <a href="#" class="links">App Design</a> </div>
            <!-- /.project-info -->
            
            <ul class="portfolio-details">
              <li><a class="tt-lightbox" href="<?php bloginfo("template_url") ?>/images/portfolio/3.jpg"><i class="fa fa-search"></i></a></li>
              <li><a href="#"><i class="fa fa-external-link"></i></a></li>
            </ul>
          </div>
          <!-- /.recent-project --> 
        </li>
        <li class="portfolio-item" data-groups='["all", "identety", "design"]'>
          <div class="portfolio">
            <div class="tt-overlay"></div>
            <img src="<?php bloginfo("template_url") ?>/images/portfolio/4.jpg" alt="">
            <div class="portfolio-info">
              <h3 class="project-title">Project Title</h3>
              <a href="#" class="links">App Design</a> </div>
            <!-- /.project-info -->
            
            <ul class="portfolio-details">
              <li><a class="tt-lightbox" href="<?php bloginfo("template_url") ?>/images/portfolio/4.jpg"><i class="fa fa-search"></i></a></li>
              <li><a href="#"><i class="fa fa-external-link"></i></a></li>
            </ul>
          </div>
          <!-- /.recent-project --> 
        </li>
        <li class="portfolio-item" data-groups='["all", "identety", "design"]'>
          <div class="portfolio">
            <div class="tt-overlay"></div>
            <img src="<?php bloginfo("template_url") ?>/images/portfolio/5.jpg" alt="">
            <div class="portfolio-info">
              <h3 class="project-title">Project Title</h3>
              <a href="#" class="links">App Design</a> </div>
            <!-- /.project-info -->
            
            <ul class="portfolio-details">
              <li><a class="tt-lightbox" href="<?php bloginfo("template_url") ?>/images/portfolio/5.jpg"><i class="fa fa-search"></i></a></li>
              <li><a href="#"><i class="fa fa-external-link"></i></a></li>
            </ul>
          </div>
          <!-- /.recent-project --> 
        </li>
        <li class="portfolio-item" data-groups='["all", "identety", "design"]'>
          <div class="portfolio">
            <div class="tt-overlay"></div>
            <img src="<?php bloginfo("template_url") ?>/images/portfolio/6.jpg" alt="">
            <div class="portfolio-info">
              <h3 class="project-title">Project Title</h3>
              <a href="#" class="links">App Design</a> </div>
            <!-- /.project-info -->
            
            <ul class="portfolio-details">
              <li><a class="tt-lightbox" href="<?php bloginfo("template_url") ?>/images/portfolio/6.jpg"><i class="fa fa-search"></i></a></li>
              <li><a href="#"><i class="fa fa-external-link"></i></a></li>
            </ul>
          </div>
          <!-- /.recent-project --> 
        </li>
        <li class="portfolio-item" data-groups='["all", "identety", "design"]'>
          <div class="portfolio">
            <div class="tt-overlay"></div>
            <img src="<?php bloginfo("template_url") ?>/images/portfolio/7.jpg" alt="">
            <div class="portfolio-info">
              <h3 class="project-title">Project Title</h3>
              <a href="#" class="links">App Design</a> </div>
            <!-- /.project-info -->
            
            <ul class="portfolio-details">
              <li><a class="tt-lightbox" href="<?php bloginfo("template_url") ?>/images/portfolio/7.jpg"><i class="fa fa-search"></i></a></li>
              <li><a href="#"><i class="fa fa-external-link"></i></a></li>
            </ul>
          </div>
          <!-- /.recent-project --> 
        </li>
        <li class="portfolio-item" data-groups='["all", "design"]'>
          <div class="portfolio">
            <div class="tt-overlay"></div>
            <img src="<?php bloginfo("template_url") ?>/images/portfolio/8.jpg" alt="">
            <div class="portfolio-info">
              <h3 class="project-title">Project Title</h3>
              <a href="#" class="links">App Design</a> </div>
            <!-- /.project-info -->
            
            <ul class="portfolio-details">
              <li><a class="tt-lightbox" href="<?php bloginfo("template_url") ?>/images/portfolio/8.jpg"><i class="fa fa-search"></i></a></li>
              <li><a href="#"><i class="fa fa-external-link"></i></a></li>
            </ul>
          </div>
          <!-- /.recent-project --> 
        </li>
        <li class="portfolio-item" data-groups='["all", "identety", "web"]'>
          <div class="portfolio">
            <div class="tt-overlay"></div>
            <img src="<?php bloginfo("template_url") ?>/images/portfolio/9.jpg" alt="">
            <div class="portfolio-info">
              <h3 class="project-title">Project Title</h3>
              <a href="#" class="links">App Design</a> </div>
            <!-- /.project-info -->
            
            <ul class="portfolio-details">
              <li><a class="tt-lightbox" href="<?php bloginfo("template_url") ?>/images/portfolio/9.jpg"><i class="fa fa-search"></i></a></li>
              <li><a href="#"><i class="fa fa-external-link"></i></a></li>
            </ul>
          </div>
          <!-- /.recent-project --> 
        </li>
        <li class="portfolio-item" data-groups='["all", "interface"]'>
          <div class="portfolio">
            <div class="tt-overlay"></div>
            <img src="<?php bloginfo("template_url") ?>/images/portfolio/10.jpg" alt="">
            <div class="portfolio-info">
              <h3 class="project-title">Project Title</h3>
              <a href="#" class="links">App Design</a> </div>
            <!-- /.project-info -->
            
            <ul class="portfolio-details">
              <li><a class="tt-lightbox" href="<?php bloginfo("template_url") ?>/images/portfolio/10.jpg"><i class="fa fa-search"></i></a></li>
              <li><a href="#"><i class="fa fa-external-link"></i></a></li>
            </ul>
          </div>
          <!-- /.recent-project --> 
        </li>
        <li class="portfolio-item" data-groups='["all", "identety", "design"]'>
          <div class="portfolio">
            <div class="tt-overlay"></div>
            <img src="<?php bloginfo("template_url") ?>/images/portfolio/11.jpg" alt="">
            <div class="portfolio-info">
              <h3 class="project-title">Project Title</h3>
              <a href="#" class="links">App Design</a> </div>
            <!-- /.project-info -->
            
            <ul class="portfolio-details">
              <li><a class="tt-lightbox" href="<?php bloginfo("template_url") ?>/images/portfolio/11.jpg"><i class="fa fa-search"></i></a></li>
              <li><a href="#"><i class="fa fa-external-link"></i></a></li>
            </ul>
          </div>
          <!-- /.recent-project --> 
        </li>
        <li class="portfolio-item" data-groups='["all", "identety", "design"]'>
          <div class="portfolio">
            <div class="tt-overlay"></div>
            <img src="<?php bloginfo("template_url") ?>/images/portfolio/12.jpg" alt="">
            <div class="portfolio-info">
              <h3 class="project-title">Project Title</h3>
              <a href="#" class="links">App Design</a> </div>
            <!-- /.project-info -->
            
            <ul class="portfolio-details">
              <li><a class="tt-lightbox" href="<?php bloginfo("template_url") ?>/images/portfolio/12.jpg"><i class="fa fa-search"></i></a></li>
              <li><a href="#"><i class="fa fa-external-link"></i></a></li>
            </ul>
          </div>
          <!-- /.recent-project --> 
        </li>
      </ul>
    </div>
    <!-- portfolio-container --> <!-- end portfolio-content --> 
    <!-- end portfolio-section --> 
  </section>
  <!-- =-=-=-=-=-=-= PORTFOLIO END =-=-=-=-=-=-= --> 
  
  <!-- =-=-=-=-=-=-= APPOINMENT SECTION =-=-=-=-=-=-= -->
  <section class="padding-top-120" id="appoinment">
    <div class="container">
      <div class="section-title-left"> <strong>MAKE AN APPOINMENT</strong>
        <h1 class="heading bold">BE THE FIRST</h1>
        <hr>
        <p> Ut consequat velit a metus accumsan, vel tempor nulla blandit. Integer euismod magna vel mi congue suscipit.
          Ut consequat velit a metus accumsan, vel tempor nulla blandit. Integer euismod magna vel mi congue suscipit. </p>
      </div>
      <div class="row ">
        <div class="appointment-area  padding-top-30">
          <div class="col-md-7">
            <form class="appointment-form" method="post">
              <ul class="row">
                <li class="col-sm-12">
                  <label>FIRST NAME &amp; LAST NAME</label>
                  <input type="text" placeholder="Enter your Name" class="form-control">
                </li>
                <li class="col-sm-12">
                  <label>CONTACT NUMBER</label>
                  <input type="text" placeholder="Enter your contact number" class="form-control">
                </li>
                <li class="col-sm-12">
                  <label>DATE FROM</label>
                  <input type="text" placeholder="Select Date" class="form-control datepicker" value="" data-date-format="mm/dd/yy">
                </li>
                <li class="col-sm-12">
                  <label>MESSAGE</label>
                  <textarea placeholder="Type your Message" class="form-control" cols="7" rows="9"></textarea>
                </li>
              </ul>
              <div class="appintment-form-btm">
                
                <input type="submit" class="btn btn-primary" value="Send Message">
              </div>
            </form>
          </div>
          <!-- End col-md-6 -->
          
          <div  class="col-md-5 img-history">
            <figure> <img alt="" src="<?php bloginfo("template_url") ?>/images/appionment.png"> </figure>
          </div>
          <!-- End col-md-6 --> 
        </div>
      </div>
      <!-- End row --> 
    </div>
  </section>
  <!-- =-=-=-=-=-=-= APPOINMENT SECTION  END =-=-=-=-=-=-= --> 
  
<!-- =-=-=-=-=-=-= OUR TEAM =-=-=-=-=-=-= -->
  <section class="section-padding" id="team">
    <div >
      <div class="container">
        <div class="section-title"> <strong>OUR STYLERS </strong>
          <h1 class="heading bold">THE ASSETS OF OUR FAMILY</h1>
          <hr>
          <p> Ut consequat velit a metus accumsan, vel tempor nulla blandit. Integer euismod magna vel mi congue suscipit.
            Ut consequat velit a metus accumsan, vel tempor nulla blandit. Integer euismod magna vel mi congue suscipit. </p>
        </div>
        <!-- End title-section -->
        <div class="row">
          <div class="team-members padding-top-30"> 
            <!-- Team-Grid -->
            <div class="col-xs-12 col-md-4 col-sm-6 team-grid">
              <div class="team-img-container">
                <div class="team-overlay"> <a href="#"><i class="fa fa-link"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-youtube"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> </div>
                <img class="img-responsive" alt="" src="<?php bloginfo("template_url") ?>/images/team/1.png">
                <div class="team-overlay-down">
                  <div class="team-title">
                    <h4>Kettie Doe</h4>
                    <p> <a href="#">Hairdresser</a> </p>
                  </div>
                </div>
              </div>
              <div class="team-description">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias tenetur velit exercitationem. Voluptates, esse pariatur debitis repellendus nulla, labore perspiciatis.</p>
              </div>
            </div>
            <!-- Team-Grid End --> 
            
            <!-- Team-Grid -->
            <div class="col-xs-12 col-md-4 col-sm-6 team-grid">
              <div class="team-img-container">
                <div class="team-overlay"> <a href="#"><i class="fa fa-link"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-youtube"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> </div>
                <img class="img-responsive" alt="" src="<?php bloginfo("template_url") ?>/images/team/2.png">
                <div class="team-overlay-down">
                  <div class="team-title">
                    <h4>David Smith</h4>
                    <p> <a href="#">Barber Stylist</a> </p>
                  </div>
                </div>
              </div>
              <div class="team-description">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias tenetur velit exercitationem. Voluptates, esse pariatur debitis repellendus nulla, labore perspiciatis.</p>
              </div>
            </div>
            <!-- Team-Grid End --> 
            
            <!-- Team-Grid -->
            <div class="col-xs-12 col-md-4 col-sm-6 team-grid">
              <div class="team-img-container">
                <div class="team-overlay"> <a href="#"><i class="fa fa-link"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-youtube"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> </div>
                <img class="img-responsive" alt="" src="<?php bloginfo("template_url") ?>/images/team/3.png">
                <div class="team-overlay-down">
                  <div class="team-title">
                    <h4>Backy John</h4>
                    <p> <a href="#">Hairdresser</a> </p>
                  </div>
                </div>
              </div>
              <div class="team-description">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias tenetur velit exercitationem. Voluptates, esse pariatur debitis repellendus nulla, labore perspiciatis.</p>
              </div>
            </div>
            <!-- Team-Grid End --> 
            
          </div>
        </div>
        <!-- End team-members --> 
        
      </div>
      <!-- end container --> 
    </div>
    <!-- end team-section --> 
  </section>
  <!-- =-=-=-=-=-=-= OUR TEAM END =-=-=-=-=-=-= -->
  
  <!-- =-=-=-=-=-=-= OPENING HOURS SECTION =-=-=-=-=-=-= -->
  <section class="section-padding parallex" id="working-hours" data-stellar-background-ratio="0.1">
    <div class="container">
      <div class="section-title-left white"> <strong>OPENING HOURS</strong>
        <h1 class="heading bold white">WHEN WE WORK</h1>
        <hr class="white">
        <p class="white"> Ut consequat velit a metus accumsan, vel tempor nulla blandit. Integer euismod magna vel mi congue suscipit.
          Ut consequat velit a metus accumsan, vel tempor nulla blandit. Integer euismod magna vel mi congue suscipit. </p>
      </div>
      <div class="row">
        <div class="working-area  padding-top-30">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-4">
                <div class="opening-hour-grid">
                  <h4>MON</h4>
                  <span>08:00-15:00</span> </div>
              </div>
              <div class="col-md-4">
                <div class="opening-hour-grid">
                  <h4>TUE</h4>
                  <span>10.00-16.00</span> </div>
              </div>
              <div class="col-md-4">
                <div class="opening-hour-grid">
                  <h4>Wed</h4>
                  <span>08:00-15:00</span> </div>
              </div>
              <div class="col-md-4">
                <div class="opening-hour-grid">
                  <h4>THU</h4>
                  <span>08:00-18:00</span> </div>
              </div>
              <div class="col-md-4">
                <div class="opening-hour-grid">
                  <h4>Fri</h4>
                  <span>07:00-19:00</span> </div>
              </div>
              <div class="col-md-4">
                <div class="opening-hour-grid">
                  <h4>Sat+Sun</h4>
                  <span>CLOSED</span> </div>
              </div>
            </div>
          </div>
          <!-- End col-md-6 -->
          <div  class="col-md-4">
            <h3>We Are Creative</h3>
            <p>Ut fringilla ac metus rhoncus sollicitudin. Curabitur at sagittis justo, eu laoreet lectus. Mauris augue ex, consectetur ac pellentesque ac, feugiat lacinia eros. Ut bibendum mi in imperdiet feugiat. Duis porttitor dapibus odio vitae rutrum. Nullam viverra risus et lacus scelerisque laoreet. </p>
          </div>
          <!-- End col-md-6 --> 
        </div>
      </div>
      <!-- End row --> 
    </div>
  </section>
  <!-- =-=-=-=-=-=-= OPENING HOURS SECTION  END =-=-=-=-=-=-= --> 
  
  <!-- =-=-=-=-=-=-= FUN FACTS =-=-=-=-=-=-= -->
  <section class="padding-top-120" id="funfacts">
      <div class="container">
        <div class="section-title"> <strong>FUN FACTS </strong>
          <h1 class="heading bold">OUR STATISTICS</h1>
          <hr>
          <p> Ut consequat velit a metus accumsan, vel tempor nulla blandit. Integer euismod magna vel mi congue suscipit.
            Ut consequat velit a metus accumsan, vel tempor nulla blandit. Integer euismod magna vel mi congue suscipit. </p>
        </div>
        <!-- End title-section -->

        <div class="row  clearfix">
          <div class="funfacts text-center padding-top-60"> 
            
            <!-- countTo -->
            <div class="col-xs-6 col-sm-3 col-md-3">
              <div data-perc="356" class="statistic-percent">
                <div class="facts-icons black"> <span class="flaticon-hairdresser-covering-client-head-with-foam"></span> </div>
                <div class="fact"> <span class="percentfactor black">356</span>
                  <p class="black">Happy Clients</p>
                </div>
                <!-- end fact --> 
              </div>
              <!-- end statistic-percent --> 
            </div>
            <!-- end col-xs-6 col-sm-3 col-md-3 --> 
            
            <!-- countTo -->
            <div class="col-xs-6 col-sm-3 col-md-3">
              <div data-perc="126" class="statistic-percent">
                <div class="facts-icons black"> <span class="flaticon-woman-sitting-waiting-on-a-hair-salon-chair-observing-the-wall-clock"></span> </div>
                <div class="fact"> <span class="percentfactor black">126</span>
                  <p class="black">Awards Received</p>
                </div>
                <!-- end fact --> 
              </div>
              <!-- end statistic-percent --> 
            </div>
            <!-- end col-xs-6 col-sm-3 col-md-3 --> 
            
            <!-- countTo -->
            <div class="col-xs-6 col-sm-3 col-md-3">
              <div data-perc="274" class="statistic-percent">
                <div class="facts-icons black"> <span class="flaticon-opened-scissors-variant"></span> </div>
                <div class="fact"> <span class="percentfactor black">274</span>
                  <p class="black">Questions Answered</p>
                </div>
                <!-- end fact --> 
              </div>
              <!-- end statistic-percent --> 
            </div>
            <!-- end col-xs-6 col-sm-3 col-md-3 --> 
            
            <!-- countTo -->
            <div class="col-xs-6 col-sm-3 col-md-3">
              <div data-perc="434" class="statistic-percent">
                <div class="facts-icons black"> <span class="flaticon-one-comb"></span> </div>
                <div class="fact"> <span class="percentfactor black">434</span>
                  <p class="black">Completed Projects</p>
                </div>
                <!-- end fact --> 
              </div>
              <!-- end statistic-percent --> 
            </div>
            <!-- end col-xs-6 col-sm-3 col-md-3 --> 
            
          </div>
        </div>
        <!-- End team-members -->
        
        <div class="row">
          <div class="col-md-12"> <img class="img-responsive" alt="" src="<?php bloginfo("template_url") ?>/images/accessories.png"> </div>
        </div>
      </div>
      <!-- end container --> 
  </section>
  <!-- =-=-=-=-=-=-= FUN FACTS END =-=-=-=-=-=-= --> 
  
  <!-- =-=-=-=-=-=-= PARALLEX TESTIMONILS =-=-=-=-=-=-= -->
  <section  data-stellar-background-ratio="0" class="testimonial-bg parallex section-padding-140 text-center">
    <div class="container">
      <div class="col-md-8 col-md-offset-2">
        <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000"> 
          <!-- Carousel indicators -->
          <ol class="carousel-indicators">
            <li data-target="#fade-quote-carousel" data-slide-to="0"></li>
            <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
            <li data-target="#fade-quote-carousel" data-slide-to="2" class="active"></li>
            <li data-target="#fade-quote-carousel" data-slide-to="3"></li>
            <li data-target="#fade-quote-carousel" data-slide-to="4"></li>
            <li data-target="#fade-quote-carousel" data-slide-to="5"></li>
          </ol>
          <!-- Carousel items -->
          <div class="carousel-inner">
            <div class="item">
              <div class="profile-circle"> <img src="<?php bloginfo("template_url") ?>/images/admin-1.jpg" alt="" class="img-circle"> </div>
              <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
              </blockquote>
            </div>
            <div class="item">
              <div class="profile-circle"> <img src="<?php bloginfo("template_url") ?>/images/admin-2.jpg" alt="" class="img-circle"> </div>
              <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
              </blockquote>
            </div>
            <div class="active item">
              <div class="profile-circle"> <img src="<?php bloginfo("template_url") ?>/images/admin-3.jpg" alt="" class="img-circle"> </div>
              <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
              </blockquote>
            </div>
            <div class="item">
              <div class="profile-circle"> <img src="<?php bloginfo("template_url") ?>/images/admin-1.jpg" alt="" class="img-circle"> </div>
              <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
              </blockquote>
            </div>
            <div class="item">
              <div class="profile-circle"> <img src="<?php bloginfo("template_url") ?>/images/admin-2.jpg" alt="" class="img-circle"> </div>
              <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
              </blockquote>
            </div>
            <div class="item">
              <div class="profile-circle"> <img src="<?php bloginfo("template_url") ?>/images/admin-3.jpg" alt="" class="img-circle"> </div>
              <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
  <!-- =-=-=-=-=-=-= PARALLEX TESTIMONILS END =-=-=-=-=-=-= --> 
  
  <!-- =-=-=-=-=-=-= BLOG & NEWS =-=-=-=-=-=-= -->
  <section class="section-padding" id="blog">
    <div class="container">
      <div class="section-title"> <strong>NEWS & HOT TRENDS </strong>
        <h1 class="heading bold">LATEST FEEDS</h1>
        <hr>
        <p> Ut consequat velit a metus accumsan, vel tempor nulla blandit. Integer euismod magna vel mi congue suscipit.
          Ut consequat velit a metus accumsan, vel tempor nulla blandit. Integer euismod magna vel mi congue suscipit. </p>
      </div>
      <div class="row">
        <div class="blog-grid padding-top-30"> 
          <!-- Blog Grid -->
          <div class="col-sm-6 blog-post">
            <div class="blog-container"> <img class="img-responsive" alt="" src="<?php bloginfo("template_url") ?>/images/blog/1.jpg">
              <div class="team-overlay-down">
                <div class="blog-title">
                  <h4>A LOOK INSIDE THE Workspace </h4>
                  <div class="blog-content-meta">  <i class="fa fa-sitemap"></i> <a href="#"> Category</a> &nbsp; <i class="fa fa-comment-o"></i> <a href="#"> 5 Comments</a> &nbsp; <i class="fa fa-calendar"></i> <a href="#"> JAN 24, 2016</a> &nbsp; </div>
                </div>
              </div>
            </div>
            <div class="blog-description">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias tenetur velit exercitationem. Voluptates, esse pariatur debitis repellendus nulla, labore perspiciatis.</p>
              <div class="read-more"> <a class="btn btn-blog btn-default" href="#"><i class="fa fa-plus"></i> Read More</a> </div>
            </div>
          </div>
          <!-- Blog Grid End --> 
          
          <!-- Blog Grid -->
          <div class="col-sm-6 blog-post">
            <div class="blog-container"> <img class="img-responsive" alt="" src="<?php bloginfo("template_url") ?>/images/blog/2.jpg">
              <div class="team-overlay-down">
                <div class="blog-title">
                  <h4>A LOOK INSIDE THE Workspace </h4>
                  <div class="blog-content-meta"> <i class="fa fa-sitemap"></i> <a href="#"> Category</a> &nbsp; <i class="fa fa-comment-o"></i> <a href="#"> 5 Comments</a> &nbsp; <i class="fa fa-calendar"></i> <a href="#"> JAN 24, 2016</a> &nbsp; </div>
                </div>
              </div>
            </div>
            <div class="blog-description">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias tenetur velit exercitationem. Voluptates, esse pariatur debitis repellendus nulla, labore perspiciatis.</p>
              <div class="read-more"> <a class="btn btn-blog btn-default" href="#"><i class="fa fa-plus"></i> Read More</a> </div>
            </div>
          </div>
          <!-- Blog Grid End --> 
          
          <!-- Blog Grid -->
          <div class="col-sm-6 blog-post">
            <div class="blog-container"> <img class="img-responsive" alt="" src="<?php bloginfo("template_url") ?>/images/blog/3.jpg">
              <div class="team-overlay-down">
                <div class="blog-title">
                  <h4>A LOOK INSIDE THE Workspace </h4>
                  <div class="blog-content-meta"> <i class="fa fa-sitemap"></i> <a href="#"> Category</a> &nbsp; <i class="fa fa-comment-o"></i> <a href="#"> 5 Comments</a> &nbsp; <i class="fa fa-calendar"></i> <a href="#"> JAN 24, 2016</a> &nbsp; </div>
                </div>
              </div>
            </div>
            <div class="blog-description">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias tenetur velit exercitationem. Voluptates, esse pariatur debitis repellendus nulla, labore perspiciatis.</p>
              <div class="read-more"> <a class="btn btn-blog btn-default" href="#"><i class="fa fa-plus"></i> Read More</a> </div>
            </div>
          </div>
          <!-- Blog Grid End --> 
          
          <!-- Blog Grid -->
          <div class="col-sm-6 blog-post">
            <div class="blog-container"> <img class="img-responsive" alt="" src="<?php bloginfo("template_url") ?>/images/blog/4.jpg">
              <div class="team-overlay-down">
                <div class="blog-title">
                  <h4>A LOOK INSIDE THE Workspace </h4>
                  <div class="blog-content-meta">  <i class="fa fa-sitemap"></i> <a href="#"> Category</a> &nbsp; <i class="fa fa-comment-o"></i> <a href="#"> 5 Comments</a> &nbsp; <i class="fa fa-calendar"></i> <a href="#"> JAN 24, 2016</a> &nbsp; </div>
                </div>
              </div>
            </div>
            <div class="blog-description">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias tenetur velit exercitationem. Voluptates, esse pariatur debitis repellendus nulla, labore perspiciatis.</p>
              <div class="read-more"> <a class="btn btn-blog btn-default" href="#"><i class="fa fa-plus"></i> Read More</a> </div>
            </div>
          </div>
          <!-- Blog Grid End -->
          <div class="clearfix"></div>
          <div class="align-center  view-more"> <a href="#" class="btn btn-blog btn-default"><i class="fa fa-plus"></i> See More Post</a> </div>
        </div>
      </div>
      <!-- End row --> 
    </div>
  </section>
  <!-- =-=-=-=-=-=-= BLOG & NEWS  END =-=-=-=-=-=-= --> 
 
<?php get_footer(); ?>