<?php get_header(); ?>

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

<!-- =-=-=-=-=-=-= PRICING =-=-=-=-=-=-= -->
<section class="section-padding " id="rates">
  <div class="container">
    <div class="section-title"> <strong><?php echo get_post_meta($post->ID, 'Заголовок', true); ?></strong>
      <h1 class="heading bold"><?php echo get_post_meta($post->ID, 'Подзаголовок', true); ?></h1>
      <hr>
      <p> <?php echo get_post_meta($post->ID, 'Пояснение', true); ?> </p>
    </div>

    <!-- image grid -->
    <div class=" zoom-pic">
      <a href="<?php the_permalink(); ?>"> <?php  the_post_thumbnail( 'full', 'img-responsive' );  ?></a>
    </div><!-- image grid end -->

    
    <div class="row">
      <div class="rates-pricing padding-top-30">



       <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <!-- post -->
        <?php the_content(); ?>

      <?php endwhile; ?>
      <!-- post navigation -->
    <?php else: ?>
      <!-- no posts found -->
    <?php endif; ?>

  </div>

</div>
</div>
</section>
<!-- =-=-=-=-=-=-= PRICING END =-=-=-=-=-=-= --> 

<?php get_footer(); ?>