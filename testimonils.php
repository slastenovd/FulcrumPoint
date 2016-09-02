<!-- =-=-=-=-=-=-= PARALLEX TESTIMONILS =-=-=-=-=-=-= -->
 <?php 
    $posts = get_posts( array('post_type' => 'testimonils', 'posts_per_page' => 6 ) );
 ?>

  <section id="my-testimonils" data-stellar-background-ratio="0" class="testimonial-bg parallex section-padding-140 text-center padding-top-120">
    <div class="container">
      <div class="col-md-8 col-md-offset-2">
        <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="6000"> 
          <!-- Carousel indicators -->
          <ol class="carousel-indicators">
            <?php for ($i=0; $i < count($posts); $i++) { ?>
              <li data-target="#fade-quote-carousel" data-slide-to="<?php echo $i; ?>" <?php if( $i === 0 ) { echo ' class="active"'; } ?> ></li>
            <? } ?>
          </ol>
          <!-- Carousel items -->
          <div class="carousel-inner">

           <?php 
            $i = 0;
            foreach( $posts as $post ){
              setup_postdata($post); 
           ?>
              <div class="<?php if( $i === 0 ) { echo 'active ';}?>item">
                <div class="profile-circle"><img src="<?php  the_post_thumbnail_url('testimonial-tumbnail'); ?>" alt="" class="img-circle"> </div>
                <blockquote><p><?php the_title();?><?php the_content(); ?> </p></blockquote>
              </div>
           <?php
             $i++; }
             wp_reset_postdata();
           ?>            

          </div>
        </div>
        <a class="section-scroll btn btn-lg btn-clean" href="contacts#contact_form">оставить свой отзыв</a> </div>
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
  <!-- =-=-=-=-=-=-= PARALLEX TESTIMONILS END =-=-=-=-=-=-= --> 