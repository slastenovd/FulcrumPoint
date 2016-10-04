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
  <section id="contact" class="padding-top-120">
    <div class="container"> 
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <!-- post -->

      <div class="section-title"> <strong><?php the_title(); ?></strong>
        <h1 class="heading bold"></h1>
        <hr>
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
            <!-- form -->
            <form  method="post">
              <!-- col-md-6 -->
              <div class="col-md-6"> 
                <!-- contact-name -->
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Ваше имя" name="contactname" id="contact-name">
                </div>
                <!-- /contact-name --> 
              </div>
              <!-- /col-md-6 --> 
              <!-- col-md-6 -->
              <div class="col-md-6"> 
                <!-- contact-email -->
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Ваш Email" name="contactemail" id="contact-email">
                </div>
                <!-- /contact-email --> 
              </div>
              <!-- /col-md-6 --> 
              <!-- col-md-12 -->
              <div class="col-md-12"> 
                <!-- contact-subject -->
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Тема" name="contactsubject" id="contact-subject">
                </div>
                <!-- /contact-subject --> 
              </div>
              <!-- /col-md-12 --> 
              <!-- col-md-12 -->
              <div class="col-md-12"> 
                <!-- contact-message -->
                <div class="form-group">
                  <textarea rows="10" class="form-control" placeholder="Сообщение" name="contactmessage" id="contact-message"></textarea>
                </div>
                <!-- /Contact Message --> 
              </div>
              <!-- /col-md-12 --> 
              <!-- col-md-12 -->
              <div class="col-md-12"> 
                
                <!-- Submit Button -->
                <div class="form-group">
                  <button type="submit"  class="btn btn-primary"> Отправить сообщение </button>
                </div>
                <br><br>
                <!-- /Submit Button --> 
                
              </div>
              <!-- /col-md-12 -->
              
            </form>
            <!-- /form --> 
            
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