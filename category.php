<?php get_header(); ?>

  <!-- =-=-=-=-=-=-= PAGE HEADING SECTION =-=-=-=-=-=-= -->
  <section class="page-heading breadcrumb-image">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-heading_content text-center">
            <h1><span><?php single_cat_title(); ?></span></h1>
            <div class="bredcrumbs"> <a href="<?php  bloginfo("url") ?>">Главная</a> <span>/</span> <a href="#"><?php single_cat_title(); ?></a> </div>
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
        <div class="blog-grid padding-top-30"> 

  
		  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		  <!-- post -->

		          <!-- Blog Grid -->
		         <div class="col-sm-6 col-xs-12 col-md-6 col-lg-6 blog-post">
		          
		            <div class="blog-container"> <?php  the_post_thumbnail( 'full', 'img-responsive' );  ?>
		              <div class="blog-overlay-down">
		                <div class="blog-title">
		                  <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h4>
		                  <div class="blog-content-meta hidden-sm">  <a href="#"> <?php the_tags(' <i class="fa fa-sitemap"></i><span>Теги:</span>'); ?></a> &nbsp; <i class="fa fa-comment-o"></i> <a href="#"> 5 Comments</a> &nbsp; <i class="fa fa-calendar"></i> <a href="#"> <?php the_date('d.m.Y'); ?></a> &nbsp; </div>
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
	          
	          <span class="separator"></span>
	          
	              <div class="custom-pagination text-center">
	                <ul>
	                    <li><a href="#" class="prev"><span class="fa fa-angle-double-left"></span></a></li>
	                    <li><a href="#">1</a></li>
	                    <li><a class="active" href="#">2</a></li>
	                    <li><a href="#">3</a></li>
	                    <li><a href="#" class="next"><span class="fa fa-angle-double-right"></span></a></li>
	                </ul>
	            </div>		  
	      <?php else: ?>
		  <!-- no posts found -->
		  <?php endif; ?>        

        </div>
      </div>
      <!-- End row --> 
    </div>
  </section>
  <!-- =-=-=-=-=-=-= BLOG & NEWS  END =-=-=-=-=-=-= -->

<?php get_footer(); ?>