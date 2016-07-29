<?php get_header(); ?>

<!-- =-=-=-=-=-=-= PAGE SECTION =-=-=-=-=-=-= -->
<div id="page-section"> 
  
  <!-- =-=-=-=-=-=-= PAGE HEADING SECTION =-=-=-=-=-=-= -->
  <section class="page-heading breadcrumb-image">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-heading_content text-center">
            <h1><span><?php the_title(); ?></span></h1>
            <div class="bredcrumbs"> <a href="<?php  bloginfo("url") ?>">Главная</a> <span>/</span> <a href='#'>Услуги</a> <span>/</span> <a href="#"><?php the_title(); ?></a> </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- =-=-=-=-=-=-= PAGE HEADING SECTION END =-=-=-=-=-=-= --> 

  <!-- =-=-=-=-=-=-= PORTFOLIO =-=-=-=-=-=-= -->
  <section class="section-padding">
            <div class="container">

                  <div class="zoom-pic blog-container" align="center">
                       <?php  the_post_thumbnail( 'banner-tumbnail', 'img-post_thumbnail' );  ?>
                  </div>

                  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <div class="project-overview">
                        <div class="row">
                          
                            <div class="col-md-8" >
                                
                                  <?php the_content(); ?>
                            </div>

                            <div class="col-md-4 quick-overview">
                                <ul class="portfolio-meta">
                                    <li><span> Первичная консультация </span> 1000 p.</li>
                                    <li><span> Повторная консультация </span> 800 p.</li>
                                    <li><span> Врачей по специальности </span> 3</li>
                                    <li><span> Поделиться </span> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> <a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>

                        </div><!-- /.row -->
                      </div><!-- /.project-overview -->

                  <?php endwhile; ?>
                  <!-- post navigation -->
                  <?php else: ?>
                  <!-- no posts found -->
                  <?php endif; ?>                

                  <?php 
                    // Find tags of current service post
                    $posttags = get_the_tags();
                    $stringtags = '';
                    if ($posttags) {
                      foreach($posttags as $tag) {
                        $stringtags .= $tag->name . ', '; 
                      }
                    }

                    // Get articles with same tags
                    $args = array(
                        'category_name' => 'articles',
                        'tag' => $stringtags,
                    );
                    $posts = get_posts($args);

                    if( count($posts) ){
                      $post = $posts[0];
                      setup_postdata($post);
                    ?>
                      <div class="read-more"> <a class="btn btn-primary" href="<?php the_permalink(); ?>"><i class="fa fa-plus"></i> Подробнее</a> </div>
                    <?php
                    }
                  wp_reset_postdata();
                  ?>                                  

            </div><!-- /.container -->
        </section>
  <!-- =-=-=-=-=-=-= PORTFOLIO END =-=-=-=-=-=-= --> 

  <!-- =-=-=-=-=-=-= OUR TEAM =-=-=-=-=-=-= -->
    <section class="" id="team">
      <div >
        <div class="container">
          <div class="section-title"> <strong>Врачи</strong>
            <h1 class="heading bold">со специальностью <?php the_title(); ?></h1>
            <hr>
            <p> <?php echo category_description(  ); ?>  </p>
          </div>
          <!-- End title-section -->
          <div class="row">
            <div class="team-members padding-top-30"> 

            <?php 
              // Get team members with same tags
              $args = array(
                  'category_name' => 'personal',
                  'tag' => $stringtags,
              );
              $posts = get_posts($args);

              foreach( $posts as $post ){
                setup_postdata($post);
              ?>
             

                  <!-- Team-Grid -->
                  <div class="col-xs-12 col-md-4 col-sm-6 team-grid">
                    <div class="team-img-container">
                      <div class="team-overlay"> <a href="#"><i class="fa fa-link"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-youtube"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> </div>
                      <?php  the_post_thumbnail( 'full', 'img-responsive' );  ?>
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


          
    
              
        

</div>
<?php get_footer(); ?>