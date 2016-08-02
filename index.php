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

 

<!-- =-=-=-=-=-=-= PAGE SECTION =-=-=-=-=-=-= -->
<div id="page-section"> 
  
  <!-- =-=-=-=-=-=-= ABOUT US =-=-=-=-=-=-= -->
  <section id="about-us" class="padding-top-120">
    <div class="container">
      <div class="section-title"> <strong>УСЛУГИ ЦЕНТРА</strong>
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
            <dt> <a class="active" href="#">Услуги ортопеда</a> </dt>
            <dd>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc. </p>
            </dd>
            <dt> <a class="" href="#">Рефлексотерапия</a> </dt>
            <dd>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</p>
            <dt> <a class="" href="#">Услуги невролога</a> </dt>
            <dd>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</p>
            </dd>
            <dt> <a class="" href="#">Гирудотерапия</a> </dt>
            <dd>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</p>
            </dd>
            <dt> <a class="" href="#">Ботулинотерапия</a> </dt>
            <dd>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</p>
            </dd>
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
<?php 
// Get team members with same tags
$args = array(
    'category_name' => 'photos',
    // 'post_type' => 'testimonils',
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
  <!-- =-=-=-=-=-=-= PORTFOLIO END =-=-=-=-=-=-= --> 
  
 

<!-- =-=-=-=-=-=-= OUR TEAM =-=-=-=-=-=-= -->
    <section class="" id="team">
      <div >
        <div class="container">
          <div class="section-title"> <strong>Наш персонал</strong>
            <h1 class="heading bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, minima!</h1>
            <hr>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut neque possimus quasi labore, earum quis eaque nisi, totam, voluptatibus maiores nobis ex!  </p>
          </div>
          <!-- End title-section -->
          <div class="row">
            <div class="team-members padding-top-30"> 

            <?php 
              // Get team members with same tags
              $args = array(
                  // 'category_name' => 'personal',
                  'post_type' => 'team',
                  // 'tag' => $stringtags,
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
                          <p><?php echo substr( get_the_content() , 0, 150).'[...]'; ?></p>
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
  <section class="section-padding parallex" id="working-hours" data-stellar-background-ratio="0.1">
    <div class="container">
      <div class="section-title-left white"> <strong>РАСПИСАНИЕ РАБОТЫ ЦЕНТРА</strong>
        <h1 class="heading bold white">РАБОТАЕМ ЧТОБЫ ВЫ БЫЛИ ЗДОРОВЫ</h1>
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
                  <h4>ПН-ПТ</h4>
                  <span>10:00-19:00</span> </div>
              </div>
              <div class="col-md-4">
                <div class="opening-hour-grid">
                  <h4>СБ</h4>
                  <span>10.00-14.00</span> </div>
              </div>
              <div class="col-md-4">
                <div class="opening-hour-grid">
                  <h4>ВС</h4>
                  <span>выходной</span> </div>
              </div>
           
            </div>
          </div>
          <!-- End col-md-6 -->
          <div  class="col-md-4">
            <h3>Пожалуйста запишитесь на прием заранее</h3>
            <p>Ut fringilla ac metus rhoncus sollicitudin. Curabitur at sagittis justo, eu laoreet lectus. Mauris augue ex, consectetur ac pellentesque ac, feugiat lacinia eros. Ut bibendum mi in imperdiet feugiat. Duis porttitor dapibus odio vitae rutrum. Nullam viverra risus et lacus scelerisque laoreet. </p>
          </div>
          <!-- End col-md-6 --> 
        </div>
      </div>
      <!-- End row --> 
    </div>
  </section>
  <!-- =-=-=-=-=-=-= OPENING HOURS SECTION  END =-=-=-=-=-=-= --> 
  
   <!-- =-=-=-=-=-=-= BLOG & NEWS =-=-=-=-=-=-= -->
  <section class="section-padding" id="blog">
    <div class="container">

      <div class="section-title"> <strong>НОВОСТИ & СТАТЬИ </strong>
        <h1 class="heading bold">СВЕЖИЕ ЗАПИСИ</h1>
        <hr>
        <p> Ut consequat velit a metus accumsan, vel tempor nulla blandit. Integer euismod magna vel mi congue suscipit.
          Ut consequat velit a metus accumsan, vel tempor nulla blandit. Integer euismod magna vel mi congue suscipit. </p>
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

              <!-- Blog Grid -->
             <div class="col-sm-6 col-xs-12 col-md-6 col-lg-6 blog-post">
              
                <div class="blog-container" > <?php  the_post_thumbnail( 'blog-preview-tumbnail', 'img-responsive' );  ?>
                  <div class="blog-overlay-down">
                    <div class="blog-title">
                      <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h4>
                      <div class="blog-content-meta hidden-sm">  <a href="#"> <?php the_tags(' <i class="fa fa-sitemap"></i><span>Теги:</span>'); ?></a> &nbsp; <i class="fa fa-comment-o"></i> <a href="#"> 0 Comments</a> &nbsp; <i class="fa fa-calendar"></i> <a href="#"> <?php the_date('d.m.Y'); ?></a> &nbsp; </div>
                    </div>
                  </div>
                </div>
                <div class="blog-description">
                  <p><a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></p>
                  <div class="read-more"> <a class="btn btn-blog btn-default" href="<?php the_permalink(); ?>"><i class="fa fa-plus"></i> Читать</a> </div>
                </div>
              </div>
              <!-- Blog Grid End --> 

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
 <?php 
    $posts = get_posts( array('post_type' => 'testimonils', 'posts_per_page' => 6 ) );
 ?>

  <section id="my-testimonils" data-stellar-background-ratio="0" class="testimonial-bg parallex section-padding-140 text-center padding-top-120">
    <div class="container">
      <div class="col-md-8 col-md-offset-2">
        <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="6000"> 
          <!-- Carousel indicators -->
          <ol class="carousel-indicators">
            <?php for ($i=0; $i < count($posts); $i++) { ?>
              <li data-target="#fade-quote-carousel" data-slide-to="<?php echo $i; ?>" <?php if( $i === 0 ) { echo ' class="active"'; } ?> ></li>
            <? } ?>
          </ol>
          <!-- Carousel items -->
          <div class="carousel-inner">

           <?php 
            $i = 0;
            foreach( $posts as $post ){
              setup_postdata($post); 
           ?>
              <div class="<?php if( $i === 0 ) { echo 'active ';}?>item">
                <div class="profile-circle"><img src="<?php  the_post_thumbnail_url('testimonial-tumbnail'); ?>" alt="" class="img-circle"> </div>
                <blockquote><p><?php the_title();?><?php the_content(); ?> </p></blockquote>
              </div>
           <?php
             $i++; }
             wp_reset_postdata();
           ?>            

          </div>
        </div>
        <a class="section-scroll btn btn-lg btn-clean" href="contacts#contact_form">оставить свой отзыв</a> </div>
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
  <!-- =-=-=-=-=-=-= PARALLEX TESTIMONILS END =-=-=-=-=-=-= --> 
 
<?php get_footer(); ?>