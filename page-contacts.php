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


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- post -->
	<?php the_content(); ?>

<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>

  <!-- =-=-=-=-=-=-= Contact Us =-=-=-=-=-=-= -->
  <section id="contact" class="padding-top-120">
    <div class="container"> 
      
      <!-- row -->
      <div class="row"> 
        
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
                  <input type="text" class="form-control" placeholder="Your Name" name="contactname" id="contact-name">
                </div>
                <!-- /contact-name --> 
                
              </div>
              <!-- /col-md-6 --> 
              
              <!-- col-md-6 -->
              <div class="col-md-6"> 
                
                <!-- contact-email -->
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Your Email" name="contactemail" id="contact-email">
                </div>
                <!-- /contact-email --> 
                
              </div>
              <!-- /col-md-6 --> 
              
              <!-- col-md-12 -->
              <div class="col-md-12"> 
                
                <!-- contact-subject -->
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Your Subject" name="contactsubject" id="contact-subject">
                </div>
                <!-- /contact-subject --> 
                
              </div>
              <!-- /col-md-12 --> 
              
              <!-- col-md-12 -->
              <div class="col-md-12"> 
                
                <!-- contact-message -->
                <div class="form-group">
                  <textarea rows="10" class="form-control" placeholder="Your Message" name="contactmessage" id="contact-message"></textarea>
                </div>
                <!-- /Contact Message --> 
                
              </div>
              <!-- /col-md-12 --> 
              
              <!-- col-md-12 -->
              <div class="col-md-12"> 
                
                <!-- Submit Button -->
                <div class="form-group">
                  <button type="submit"  class="btn btn-primary"> Send message </button>
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
              <li> <strong>Postal Address :</strong>
                <p> Model Town Link Road <br />
                  Lahore - Pakistan - PAK </p>
              </li>
              <li> <strong>Phone :</strong>
                <p> Office : <a href="tel:0011234567890" title="Call Us">+1 (123) 456-7890</a> <br />
                  FAX : <a href="tel:0011234567890" title="Call Us">+1 (923) 456-7890</a> </p>
              </li>
              <li> <strong>E-mail :</strong>
                <p> Support : <a href="mailto:contact@scriptsbundle.com">Contact@scriptsbundle.com</a> <br />
                  Sales : <a href="mailto:contact@scriptsbundle.com">Contact@scriptsbundle.com</a> </p>
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