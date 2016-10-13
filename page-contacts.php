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



  <!-- =-=-=-=-=-=-= Contact Us =-=-=-=-=-=-= -->
  <section id="contact" class="padding-top-60">
    <div class="container"> 
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <!-- post -->

      <div class="section-title"> 
        <p> <?php the_content(); ?> </p>
      </div>

      <?php endwhile; ?>
      <!-- post navigation -->
      <?php else: ?>
      <!-- no posts found -->
      <?php endif; ?>

      <!-- row -->
      <div id="contact_form" class="row"> 
        <!-- col-md-8 -->
        <div class="col-md-8 col-sm-8"> 
          <!-- row -->
          <div class="row"> 
            <?php echo do_shortcode( '[contact-form-7 id="441" title="Contact2"]' ); ?>
          </div>
          <!-- /row --> 
        </div>
        <!-- /col-md-8 --> 
        
        <!-- col-md-4 -->
        <div class="col-md-4 col-sm-4"> 
          
          <!-- contact-info -->
          <div class="contact-info">
            <ul>
              <li> <strong>Почтовый адрес :</strong>
                <p> Комсомольск-на-Амуре <br />
                  <?php echo get_option('theme_contacttext'); ?> </p>
              </li>
              <li> <strong>Телефон :</strong>
                <p> Ресепшн : <a href="tel:<?php echo get_option('site_telephone'); ?>" title="Телефон"><?php echo get_option('site_telephone'); ?></a> <br />
                  ФАКС : <a href="tel:<?php echo get_option('site_telephone'); ?>" title="FAX"><?php echo get_option('site_telephone'); ?></a> </p>
              </li>
              <li> <strong>E-mail :</strong>
                <p> Запись на прием : <a href="mailto:<?php echo get_option('site_email'); ?>"><?php echo get_option('site_email'); ?></a> <br />
                   </p>
              </li>
            </ul>
          </div>
          <!-- /contact-info --> 
          
        </div>
        <!-- /col-md-4 --> 
        
      </div>
      <!-- /row --> 
      
    </div>
    <!-- /.container --> 
  </section>

<section id="about-us" class="padding-top-120">
	<div class="container">
		<div class="section-title"> <strong>КАК НАС НАЙТИ</strong>
			<h1 class="heading bold">СХЕМА ПРОЕЗДА</h1>
			<hr>
			<p> <?php echo get_post_meta($post->ID, 'public_transport', true); ?> </p>
		</div>
	</div>
</section>

<!--MAP-->  
<section  class="padding-top-0" id="find_on_map">
	<section id="map"></section>
</section>
<!--Ent MAP-->  


<?php get_footer(); ?>