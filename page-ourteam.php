<?php get_header(); ?>

  <!-- =-=-=-=-=-=-= PAGE HEADING SECTION =-=-=-=-=-=-= -->
  <section class="page-heading breadcrumb-image">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-heading_content text-center">
            <h1><span>Персонал</span></h1>
            <div class="bredcrumbs"> <a href="<?php  bloginfo("url") ?>">Главная</a> <span>/</span> <a href="#">Персонал</a> </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- =-=-=-=-=-=-= PAGE HEADING SECTION END =-=-=-=-=-=-= --> 

<!-- =-=-=-=-=-=-= OUR TEAM =-=-=-=-=-=-= -->
  <section class="section-padding" id="team">
    <div >
      <div class="container">
        <div class="section-title"> <strong>Персонал</strong>
          <h1 class="heading bold">Наши профессионалы</h1>
          <hr>
          <p> <?php echo category_description(  ); ?>  </p>
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


<?php get_footer(); ?>