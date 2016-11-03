<?php get_header(); ?>
<!-- =-=-=-=-=-=-= HOME SLIDER =-=-=-=-=-=-= -->
<section class="tt-container">
<div class="container">
  <div class="tt-banner">
    <ul>
      <!-- SLIDE  -->
      <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"> 
        <!-- MAIN IMAGE --> 

        <img src="<?php bloginfo("template_url") ?>/images/slider/1.jpg"   alt=""  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> 
        <!-- LAYER NR. 1 -->
        <div class="tp-caption tt-slider-title sft white_color"
                    data-x="10"
                    data-y="100"
                    data-speed="1000"
                    data-start="500"
                    data-easing="Power4.easeOut"
                    data-endspeed="300"
                    style="z-index: 1"><?php echo get_option('slider1_header'); ?></div>
        
        <!-- LAYER NR. 2 -->
        <div class="tp-caption tt-slider-subtitle sft white_color"
                    data-x="20"
                    data-y="250"
                    data-speed="1000"
                    data-start="900"
                    data-easing="Power4.easeOut"
                    data-endspeed="300"
                    style="z-index: 2"><?php echo get_option('slider1_subheader'); ?></div>
        
        <!-- LAYER NR. 3 -->
        <div class="tp-caption sft"
                    data-x="20"
                    data-y="380"
                    data-speed="1000"
                    data-start="1100"
                    data-easing="Power4.easeOut"> <a href="#portfolio" class="tt-btn btn-bordered light page-scroll">подробнее</a> </div>
      </li>
      
      <!-- SLIDE  -->
      <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"> 
        
        <!-- MAIN IMAGE --> 
        <img src="<?php bloginfo("template_url") ?>/images/slider/2.jpg"   alt=""  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> 
        
        <!-- LAYER NR. 1 -->
        <div class="tp-caption tt-slider-title sft white_color"
                            data-x="20"
                            data-y="100"
                            data-speed="1000"
                            data-start="500"
                            data-easing="Power4.easeOut"
                            data-endspeed="300"
                            style="z-index: 1"><?php echo get_option('slider2_header'); ?></div>
        
        <!-- LAYER NR. 2 --> 
        <div class="tp-caption tt-slider-subtitle sft white_color"
                            data-x="20"
                            data-y="300"
                            data-speed="1000"
                            data-start="900"
                            data-easing="Power4.easeOut"
                            data-endspeed="300"
                            style="z-index: 2"><?php echo get_option('slider2_subheader'); ?></div>
        
        <!-- LAYER NR. 3 -->
        <div class="tp-caption sft"
                            data-x="20"
                            data-y="430"
                            data-speed="1000"
                            data-start="1100"
                            data-easing="Power4.easeOut"> <a href="#portfolio" class="tt-btn btn-bordered light page-scroll">подробнее</a> </div>
      </li>
      
      <!-- SLIDE  -->
      <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"> 
        
        <!-- MAIN IMAGE --> 
        <img src="<?php bloginfo("template_url") ?>/images/slider/3.jpg"   alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> 
        
        <!-- LAYER NR. 1 -->
        <div class="tp-caption tt-slider-title sft white_color"
                            data-x="20"
                            data-y="100"
                            data-speed="1000"
                            data-start="500"
                            data-easing="Power4.easeOut"
                            data-endspeed="300"
                            style="z-index: 1"><?php echo get_option('slider3_header'); ?></div>
        
        <!-- LAYER NR. 2 -->
        <div class="tp-caption tt-slider-subtitle sft white_color"
                            data-x="20"
                            data-y="300"
                            data-speed="1000"
                            data-start="900"
                            data-easing="Power4.easeOut"
                            data-endspeed="300"
                            style="z-index: 2"><?php echo get_option('slider3_subheader'); ?></div>
        
        <!-- LAYER NR. 3 -->
        <div class="tp-caption sft"
                            data-x="20"
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
        <img src="<?php bloginfo("template_url") ?>/images/slider/4.jpg"   alt=""  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> 
        
        <!-- LAYER NR. 1 -->
        <div class="tp-caption tt-slider-title sft white_color"
                            data-x="20"
                            data-y="100"
                            data-speed="1000"
                            data-start="500"
                            data-easing="Power4.easeOut"
                            data-endspeed="300"
                            style="z-index: 1"><?php echo get_option('slider4_header'); ?></div>
        
        <!-- LAYER NR. 2 -->
        <div class="tp-caption tt-slider-subtitle sft white_color"
                            data-x="20"
                            data-y="300"
                            data-speed="1000"
                            data-start="900"
                            data-easing="Power4.easeOut"
                            data-endspeed="300"
                            style="z-index: 2"><?php echo get_option('slider4_subheader'); ?></div>
        
        <!-- LAYER NR. 3 -->
        <div class="tp-caption sft"
                            data-x="20"
                            data-y="430"
                            data-speed="1000"
                            data-start="1100"
                            data-easing="Power4.easeOut"> <a href="#portfolio" class="tt-btn btn-bordered light page-scroll">подробнее</a> </div>
      </li>
    </ul>
  </div>
  </div>
</section>
<!-- =-=-=-=-=-=-= HOME SLIDER END =-=-=-=-=-=-= --> 


<!-- =-=-=-=-=-=-= PAGE SECTION =-=-=-=-=-=-= -->
<div id="page-section"> 
  <!-- =-=-=-=-=-=-= ABOUT US =-=-=-=-=-=-= -->
  <section id="about-us" class="padding-top-30 padding-bottom-60">
    <div class="container">
      <div class="section-title"> <strong>УСЛУГИ ЦЕНТРА</strong>
        <h1 class="heading bold">РАБОТАЕМ ЧТОБЫ ВЫ БЫЛИ ЗДОРОВЫ</h1>
        <hr>
        <p> Наш центр предлагает Вам разнообразный спектр медицинских услуг. Проконсультироваться и записаться на прием Вы можете позвонив по контактным телефонам или заполнив форму записи на прием.</p>
      </div>
      <!-- End title-section -->
      
      <div class="row padding-top-30">
        <div class="col-md-6 col-md-push-5 col-md-offset-1"> 
          <!-- Accordion -->
          <dl class="accordion">

            <?php 
              $args = array(
                  'post_type' => 'services',
                  'numberposts' => 10,
              );
              $posts = get_posts($args);
              foreach( $posts as $key => $post ){
                setup_postdata($post);
              ?>
                <dt> <a class="<?php echo ($key == 0)?'active':''; ?>" href="#"><?php the_title();?></a> </dt>
                <dd>
                  <p><a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></p>
                </dd>

               <?php
              }
              wp_reset_postdata();
              ?>
     
          </dl>
          <!-- End Accordion --> 
        </div>
        <!-- end col-md-6 -->
        
        <div class="col-md-5 col-md-pull-7"> <img src="<?php bloginfo("template_url") ?>/images/about-1.jpg"  alt=""> </div>
        <!-- end col-md-5 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
<!-- =-=-=-=-=-=-= ABOUT US END =-=-=-=-=-=-= --> 

<!-- =-=-=-=-=-=-= PARALLEX =-=-=-=-=-=-= -->
  <section data-stellar-background-ratio="0" class="parallex quote-bg section-padding text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1"> <em>ЗАИНТЕРЕСОВАЛИСЬ ?</em>
          <h2>Запишитесь на прием к интересующему Вас специалисту</h2>
          <a class="section-scroll btn btn-lg btn-clean" href="appointment">запись он-лайн</a> </div>
        <!-- end col-md-8 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
<!-- =-=-=-=-=-=-= PARALLEX END =-=-=-=-=-=-= -->

<!-- =-=-=-=-=-=-= PORTFOLIO =-=-=-=-=-=-= -->
  <section class="padding-bottom-60">
<?php 
// Get team members with same tags
$args = array(
    'category_name' => 'photos',
    'posts_per_page'   => 4,
);
$posts = get_posts($args);
foreach( $posts as $post ){
  setup_postdata($post);
  the_content( );
?>

<?php
 }
 wp_reset_postdata();
?>

</section>
<!-- =-=-=-=-=-=-= PORTFOLIO END =-=-=-=-=-=-= --> 

<!-- =-=-=-=-=-=-= OUR TEAM =-=-=-=-=-=-= -->
<section class="" id="team">
  <div >
    <div class="container">
      <div class="section-title"> <strong>Наш персонал</strong>
        <h1 class="heading bold">РАБОТАЕМ ЧТОБЫ ВЫ БЫЛИ ЗДОРОВЫ</h1>
        <hr>
        <p>   </p>
      </div>
      <!-- End title-section -->
      <div class="row">
        <div class="team-members padding-top-30"> 

        <?php 
          // Get team members with same tags
          $args = array(
              // 'category_name' => 'personal',
              'post_type' => 'team',
          );
          $posts = get_posts($args);
          foreach( $posts as $post ){
            setup_postdata($post);
          ?>
         
          <!-- Team-Grid -->
          <div class="col-xs-12 col-md-4 col-sm-6 team-grid">
            <div class="team-img-container">
              <div class="team-overlay"> <a href="#"><i class="fa fa-link"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-youtube"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> </div>
              <?php  the_post_thumbnail( 'team-tumbnail', 'img-responsive' );  ?>
              <div class="team-overlay-down">
                <div class="team-title">
                  <a href="<?php the_permalink(); ?>">
                    <h4><?php the_title(); ?></h4>
                    <p> <?php echo get_post_meta($post->ID, 'Должность', true); ?> </p>
                  </a>
                </div>
              </div>
            </div>
            <div class="team-description">
                <a href="<?php the_permalink(); ?>">
                  <p><?php the_excerpt(); ?></p>
                </a>
            </div>
          </div>
          <!-- Team-Grid End --> 

           <?php
          }
          wp_reset_postdata();
          ?>
          
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
<?php require('openinghours.php'); ?>
<!-- =-=-=-=-=-=-= OPENING HOURS SECTION  END =-=-=-=-=-=-= --> 
  
<!-- =-=-=-=-=-=-= BLOG & NEWS =-=-=-=-=-=-= -->
<section class="section-padding" id="blog">
  <div class="container">

    <div class="section-title"> <strong>НОВОСТИ & СТАТЬИ </strong>
      <h1 class="heading bold">СВЕЖИЕ ЗАПИСИ</h1>
      <hr>
      <p>  </p>
    </div>

    
    <div class="row">
      <div class="blog-grid padding-top-30"> 

            <?php 
            // Get team members with same tags
            $args = array(
                'category_name' => 'articles, news',
                // 'post_type' => 'testimonils',
                'posts_per_page'   => 4,
        
            );
            $posts = get_posts($args);
            foreach( $posts as $post ){
              setup_postdata($post);
            ?>

            <?php require('blog-grid.php');  ?>

            <?php
             }
             wp_reset_postdata();
            ?>
            <div class="clearfix"></div>
            <div class="align-center  view-more"> <a href="category/news/" class="btn btn-blog btn-default"><i class="fa fa-plus"></i> Перейти к новостям</a> </div>     
      </div>
    </div>
    <!-- End row --> 
  </div>
</section>
<!-- =-=-=-=-=-=-= BLOG & NEWS  END =-=-=-=-=-=-= -->

<!-- =-=-=-=-=-=-= PARALLEX TESTIMONILS =-=-=-=-=-=-= -->
<?php require('testimonils.php'); ?>
<!-- =-=-=-=-=-=-= PARALLEX TESTIMONILS END =-=-=-=-=-=-= --> 
 
<?php get_footer(); ?>