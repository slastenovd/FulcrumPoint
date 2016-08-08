<?php get_header(); ?>

  <!-- =-=-=-=-=-=-= PAGE HEADING SECTION =-=-=-=-=-=-= -->
  <section class="page-heading breadcrumb-image">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-heading_content text-center">
            <h1><span>Поиск...</span></h1>
            <div class="bredcrumbs"> По строке ' <?php the_search_query(); ?> '</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- =-=-=-=-=-=-= PAGE HEADING SECTION END =-=-=-=-=-=-= --> 

 <!-- =-=-=-=-=-=-= BLOG & NEWS =-=-=-=-=-=-= -->
 <section class="section-padding" id="blog">
  <div class="container">
    <div class="row">
     <div class="col-md-8 col-sm-12 col-xs-12"> 



          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <!-- post -->

          <!-- Blog Grid -->
         <div class="col-md-12 col-sm-12 blog-post">
          
            <div class="blog-container" > <?php  the_post_thumbnail( 'blog-tumbnail', 'img-responsive' );  ?>
              <div class="blog-overlay-down">
                <div class="blog-title">
                  <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h4>
                  <div class="blog-content-meta hidden-sm">  <a href="#"> <?php the_tags(' <i class="fa fa-sitemap"></i><span>Теги:</span>'); ?></a> &nbsp; 

                    <?php 
                        if ( comments_open() ) { 
                              echo '<i class="fa fa-comment-o"></i>';
                              comments_popup_link( 'Комментариев нет', '1 комментарий', '% комментариев', 'с_link'); 
                        } 
                    ?>

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
            

          <?php endwhile; ?>
          <!-- post navigation -->
                <div class="clearfix"></div>

          <?php else: ?>
          <!-- no posts found -->
            <h2>Ничего не найдено по строке '<?php the_search_query(); ?>'</h2>
          <?php endif; ?>        

        </div>
        
        <div class="col-md-4 col-sm-12 col-xs-12">
            <?php get_sidebar(); ?>
        </div>

      </div>
      <!-- End row --> 
    </div>
  </section>
  <!-- =-=-=-=-=-=-= BLOG & NEWS  END =-=-=-=-=-=-= -->

<?php get_footer(); ?>