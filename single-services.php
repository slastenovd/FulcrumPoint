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
                                  <?php the_content(); ?>
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
                  'post_type' => 'team',
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


   <!-- =-=-=-=-=-=-= BLOG & NEWS =-=-=-=-=-=-= -->
  <section class="section-padding" id="blog">
    <div class="container">

      <div class="section-title"> <strong>НОВОСТИ & СТАТЬИ </strong>
        <h1 class="heading bold">по теме <?php the_title(); ?></h1>
        <hr>
        <p>  </p>
      </div>

      
      <div class="row">
        <div class="blog-grid padding-top-30"> 

              <?php 
              // Get team members with same tags
              $args = array(
                  'category_name' => 'articles, news',
                  'tag' => $stringtags,
                  'posts_per_page'   => 10,
          
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
                      <div class="blog-content-meta hidden-sm">  <a href="#"> <?php the_tags(' <i class="fa fa-sitemap"></i><span>Теги:</span>'); ?></a> &nbsp; <i class="fa fa-comment-o"></i> 


                         <?php comments_number('пока нет комментариев', '1 комменатрий', '% комментариев'); ?>

                       &nbsp; <i class="fa fa-calendar"></i> <a href="#"> <?php the_date('d.m.Y'); ?></a> &nbsp; </div>
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
        </div>
      </div>
      <!-- End row --> 
    </div>
  </section>
  <!-- =-=-=-=-=-=-= BLOG & NEWS  END =-=-=-=-=-=-= -->

          
    
              
        

</div>
<?php get_footer(); ?>