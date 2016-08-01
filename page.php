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
                  <a href="#"> <?php  the_post_thumbnail( 'blog-tumbnail', 'img-responsive' );  ?></a>
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
                <div id="comments">
                
                  <div class="heading-side-bar">
                    <h2>4 Comments</h2>
                  </div>

                  <!-- Comments list -->
                  <div class="comments-list">
                    
                    <!-- Blog Comment -->
                    <div class="media">
                      <a class="media-left" href="#">
                        <img src="images/blog/admin-1.jpg" alt="Avatar">
                      </a>
                      <div class="media-body">
                        <span class="media-heading"><a href="#">John Doe</a></span>
                        <div class="comment-meta">
                          <p><a href="#">May 04, 2016 at 11:39 pm</a> / <a class="comment-reply-link" href="#">Reply</a></p>
                        </div> <!-- end comment-meta -->
                        <p>Sed eget malesuada metus, non cursus elit. Cras mollis metus ac nulla sollicitudin commodo. Etiam at placerat velit. Fusce nunc lacus, dapibus ut ante id, facilisis sodales lorem. Donec ornare enim eu tortor tincidunt ultricies.</p>
                      </div> <!-- end media-body -->
                    </div> <!-- end media -->

                    <!-- Blog Comment -->
                    <div class="media">
                      <a class="media-left" href="#">
                        <img src="images/blog/admin-2.jpg" alt="Avatar">
                      </a>
                      <div class="media-body">
                        <span class="media-heading"><a href="#">John Doe</a></span>
                        <div class="comment-meta">
                          <p><a href="#">May 03, 2016 at 11:39 am</a> / <a class="comment-reply-link" href="#">Reply</a></p>
                        </div> <!-- end comment-meta -->
                        <p>Quisque nec justo in felis sagittis ultricies. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur dignissim ac eros vitae congue. Integer a tortor sodales, sagittis nulla a, hendrerit metus. Ut quis commodo odio, ut congue leo. Aenean lobortis vitae velit et aliquam. </p>

                          <!-- Blog reply Comment -->
                          <div class="media nbm">
                            <a class="media-left" href="#">
                              <img src="images/blog/admin-3.jpg" alt="Avatar">
                            </a>
                            <div class="media-body">
                              <span class="media-heading"><a href="#">John Doe</a></span>
                              <div class="comment-meta">
                                <p><a href="#">May 02, 2016 at 9:39 pm</a> / <a class="comment-reply-link" href="#">Reply</a></p>
                              </div>
                              <p> Curabitur aliquet mollis varius. Donec sagittis, libero vel convallis dictum, elit lacus porta nisi, eget varius erat magna id diam. Aenean auctor tellus ligula, non facilisis nunc iaculis ut. </p>
                            </div> <!-- end media-body -->
                          </div> <!-- end media -->
                      </div> <!-- end media-body -->
                    </div> <!-- end media -->
                    
                    <!-- Blog Comment -->
                    <div class="media nbm">
                      <a class="media-left" href="#">
                        <img src="images/blog/admin-2.jpg" alt="Avatar">
                      </a>
                      <div class="media-body">
                        <span class="media-heading"><a href="#">John Doe</a></span>
                        <div class="comment-meta">
                          <p><a href="#">May 01, 2016 at 12:39 pm</a> / <a class="comment-reply-link" href="#">Reply</a></p>
                        </div> <!-- end comment-meta -->
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vehicula pellentesque tristique. Sed quis metus id urna molestie commodo. Nulla fringilla placerat ligula, sed tempus risus elementum sed. Nulla tempor nulla a lacus fringilla nec convallis neque accumsan.</p>
                        <p>John Doe</p>
                      </div> <!-- end media-body -->
                    </div> <!-- end media -->

                  </div> <!-- end comments-list -->

                  <!-- Comment form -->
                  <div id="respond">
                    <div class="heading-side-bar">
                      <h2>Leave A Comment</h2>
                    </div>
                   
                    <p class="comment-notes"><small>Your email address will not be published. Required fields are marked</small><span class="required">*</span></p>

                    <form action="#" method="post" id="commentform" name="commentform">
                      
                      <div class="row">
                        
                        <div class="col-sm-6">
                          <!-- Name -->
                          <div class="form-group">
                            <label for="author">Name<span class="required">*</span></label>
                            <input type="text" name="author" class="form-control" id="author" placeholder="Name">
                          </div>
                        </div> <!-- End col-sm-6 -->
                      
                        <div class="col-sm-6">
                          <!-- Email -->
                          <div class="form-group">
                            <label for="email">Email<span class="required">*</span></label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                          </div>
                        </div> <!-- End col-sm-6 -->

                        <div class="col-sm-12">
                          <!-- Comment -->
                          <div class="form-group">
                            <label for="comment">Comment<span class="required">*</span></label>
                            <textarea class="form-control" name="comment" id="comment" rows="10"></textarea>
                          </div>
                        </div> <!-- End col-sm-12 -->

                        <div class="col-sm-6">
                          <button type="submit" id="send" class="btn btn-primary">Post  your comment</button>
                        </div> <!-- End col-sm-6 -->

                      </div> <!-- End row -->

                    </form>

                  </div> <!-- end respond -->

                </div> <!-- End comments -->
              </div>
          
    
              
        
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