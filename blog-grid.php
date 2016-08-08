  <!-- Blog Grid -->
 <div class="col-sm-6 col-xs-12 col-md-6 col-lg-6 blog-post">
  
    <div class="blog-container" > <?php  the_post_thumbnail( 'blog-preview-tumbnail', 'img-responsive' );  ?>
      <div class="blog-overlay-down">
        <div class="blog-title">
          <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h4>
          <div class="blog-content-meta hidden-sm">  <a href="#"> <?php the_tags(' <i class="fa fa-sitemap"></i><span>Теги:</span>'); ?></a> &nbsp; 

            <?php 
                if ( comments_open() ) { 
                      echo '<i class="fa fa-comment-o"></i>';
                      comments_popup_link( 'Комментариев нет', '1 комментарий', '% комментариев', 'с_link'); 
                } 
            ?>

           &nbsp; <i class="fa fa-calendar"></i> <a href="#"> <?php the_date('d.m.Y'); ?></a> &nbsp; </div>
        </div>
      </div>
    </div>
    <div class="blog-description">
      <p><a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></p>
      <div class="read-more"> <a class="btn btn-blog btn-default" href="<?php the_permalink(); ?>"><i class="fa fa-plus"></i> Читать</a> </div>
    </div>
  </div>
  <!-- Blog Grid End --> 
