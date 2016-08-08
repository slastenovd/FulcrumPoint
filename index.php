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
            <?php require('blog-grid.php');  ?>

          <?php endwhile; ?>
          <!-- post navigation -->
                <div class="clearfix"></div>

          <?php else: ?>
            <h2>В этой категории пока нет записей...</h2>
          <?php endif; ?>        

        </div>
      </div>
      <!-- End row --> 
    </div>
  </section>
  <!-- =-=-=-=-=-=-= BLOG & NEWS  END =-=-=-=-=-=-= -->

<?php get_footer(); ?>