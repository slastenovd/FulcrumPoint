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
            <div class="bredcrumbs"> <a href="<?php  bloginfo("url") ?>">Главная</a> <span>/</span> <a href="#"><?php the_title(); ?></a> </div>
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
        <div class="col-md-12"> 
          <!-- post grid -->
          <div class="post-block">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <!-- post -->

              <!-- image grid -->
              <div class="post-image zoom-pic">
              <!-- <div class="zoom-pic" align="center" > -->
                  <a href="<?php the_permalink(); ?>"> <?php  the_post_thumbnail( 'blog-tumbnail', 'img-responsive' );  ?></a>
              </div><!-- image grid end -->
              <!-- post content -->
              <div class="post-content">
                  <span class="meta-bg"><span class="date"><?php echo get_the_date('j'); ?></span><span class="date"><?php echo get_the_date('F'); ?></span><span ><?php echo get_the_date('Y'); ?></span></span>
                  <h2><a class="post-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                   <!-- post meta -->
                  <div class="meta">
                      <span class="meta-comment">
                        <i class="fa fa-commenting"></i>
                            <?php comments_number('пока нет комментариев', '1 комменатрий', '% комментариев'); ?>
                      </span>
                      <span class="meta-author">
                        <i class="fa fa-user"></i>
                        Автор <a class="meta-link" href="#"><?php the_author(); ?></a>
                      </span>
                      <span class="meta-tag">
                        <i class="fa fa-tags"></i>
                        <a class="meta-link" href="#"><?php the_tags(' <i class="fa fa-sitemap"></i><span>Теги:</span>'); ?></a>
                      </span>
                  </div>
                  <!-- post meta -->

                  <?php the_content(); ?>
                  

                  
                  

                
              </div>
               <!-- post content end -->



            <?php endwhile; ?>
            <!-- post navigation -->
            <?php else: ?>
            <!-- no posts found -->
            <?php endif; ?>

            </div>
          <!-- post grid end --> 
          

           <div class="clearfix"></div>
           <span class="separator"></span>
           <div id="comments-section">

              <div class="comment-section">
                 <?php if ( comments_open() || '0' != get_comments_number() ) : comments_template(); endif; ?>
              </div>

           </div>
          
          <?php //comment_form( array(), $post->ID ); ?>
        
        </div>

      </div>
      <!-- End row --> 
    </div>
  </section>
  <!-- =-=-=-=-=-=-= BLOG & NEWS  END =-=-=-=-=-=-= --> 
</div>
<?php get_footer(); ?>