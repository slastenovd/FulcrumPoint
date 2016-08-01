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
        <div class="col-md-8 col-sm-12"> 
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
                       <a class="meta-link" href="#">comments (12)</a>
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
                  
                    <div class="share-wrapper clearfix">
                      <div class="total-shares">
                        <em data-count="267" id="countUp">267</em>
                        <div class="caption">Shares</div>
                      </div>

                      <div class="share-buttons">
                        <a href="#" class="social-share facebook">
                          <i class="fa fa-facebook"></i> 
                          <span class="alt-text">Share</span>
                        </a>
                        <a href="#" class="social-share twitter">
                          <i class="fa fa-twitter"></i> 
                          <span class="alt-text">Tweet</span>
                        </a>
                        <a href="#" class="social-share google-plus">
                          <i class="fa fa-google-plus"></i>
                        </a>
                        <a href="#" class="social-share linked_in">
                          <i class="fa fa-linkedin"></i>
                        </a>
                        <a href="#" class="social-share pinterest">
                          <i class="fa fa-pinterest"></i>
                        </a>
                      </div>
                    </div>
                  
                  
                    <div class="related-posts">
                      <div class="related-grid">
                        <img alt="" src="images/blog/related-1.jpg">
                        <div class="related-grid-name">
                          <span>PREVIOUS ARTICLE</span>
                          <h5><a href="#">Roll Out of Bed With Gorgeous Hair </a> </h5>
                        </div>
                      </div><!-- Other Post -->
                      <div class="related-grid">
                        <img alt="" src="images/blog/related-1.jpg">
                        <div class="related-grid-name">
                          <span>NEXT ARTICLE</span>
                          <h5><a href="#">Roll Out of Bed With Gorgeous Hair </a> </h5>
                        </div>
                      </div><!-- Other Post -->
                    </div>
                  
                
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

<ol class="commentlist">
  <?php
    // Получаем комментарии поста с ID XXX из базы данных 
    $comments = get_comments(array(
      'post_id' => $post->ID,
      'status' => 'approve' // комментарии прошедшие модерацию
    ));

    // Формируем вывод списка полученных комментариев
    wp_list_comments(array(
      'per_page' => 10, // Пагинация комментариев - по 10 на страницу
      'reverse_top_level' => false // Показываем последние комментарии в начале
    ), $comments);
  ?>
</ol>
              </div>
          
    <?php comment_form( array(), $post->ID ); ?>
              
        
        </div>
        <!-- /.col-md-8 -->
        <!-- right column -->
        <div class="col-md-4 col-sm-12 col-xs-12">
          <?php get_sidebar(); ?>
        </div>
        <!-- right column end-->
        <!-- /.col-md-4 --> 
      </div>
      <!-- End row --> 
    </div>
  </section>
  <!-- =-=-=-=-=-=-= BLOG & NEWS  END =-=-=-=-=-=-= --> 
</div>
<?php get_footer(); ?>