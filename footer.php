  <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
  <footer>
    <div class="inner-footer">
      <div class="container">
        <div class="row"> 

            <?php if ( is_active_sidebar('footer-1') ) { dynamic_sidebar( 'footer-1' ); } ?>
            <?php if ( is_active_sidebar('footer-2') ) { dynamic_sidebar( 'footer-2' ); } ?>

            <div class="col-md-3 contact">
            <h4>Контакты</h4>
            <ul class="list-inline">
                <li><span><i class="fa fa-map-marker"></i></span><a href="/contacts#about-us"> Комсомольск-на-Амуре, <?php echo get_option('theme_contacttext'); ?></a></li>
            <li><span><i class="fa fa-phone"></i></span> <?php echo get_option('site_telephone'); ?> </li>
            <li><span><i class="fa fa-envelope"></i></span> <?php echo get_option('site_email'); ?> </li>
            </ul>
            </div>

            <?php if ( is_active_sidebar('footer-4') ) { dynamic_sidebar( 'footer-4' ); } ?>

        </div>
        <!--/.row--> 
      </div>
      <!--/.container--> 
    </div>
    <!--/.inner-footer--> 
    
    <!-- Start Sub-footer-->
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 copyright">
            <p><a href="https://vk.com/id234954788">&copy; 2016 Сластенов Дмитрий</a></p>
          </div>
            <!-- Footer Menu-->
            <div class="col-md-6 col-sm-6 footer-menu">
              <?php wp_nav_menu( array('theme_location'  => 'footer_menu') );?>
            </div>
            <!-- End Footer Menu--> 
        </div>
        <!--/.row--> 
      </div>
      <!--/.container--> 
    </div>
    <!-- End Sub-footer--> 
  </footer>
  
  <!-- =-=-=-=-=-=-= FOOTER END =-=-=-=-=-=-= --> 
</div>
<!-- =-=-=-=-=-=-= PAGE SECTION END =-=-=-=-=-=-= --> 
<!-- =-=-=-=-=-=-= JQUERY =-=-=-=-=-=-= --> 
<script src="<?php bloginfo("template_url") ?>/js/jquery.min.js"></script> 
<script src="<?php bloginfo("template_url") ?>/js/bootstrap.min.js"></script> 
<script src="<?php bloginfo("template_url") ?>/js/jquery.smoothscroll.js"></script> 
<script type="text/javascript"  src="<?php bloginfo("template_url") ?>/js/easing.js"></script> 
<script src="<?php bloginfo("template_url") ?>/js/jquery.stellar.min.js"></script> 
<script src="<?php bloginfo("template_url") ?>/js/jquery.countTo.js"></script> 
<script src="<?php bloginfo("template_url") ?>/js/jquery.waypoints.js"></script> 
<script src="<?php bloginfo("template_url") ?>/js/jquery.appear.min.js"></script> 
<script src="<?php bloginfo("template_url") ?>/js/jquery.shuffle.min.js"></script> 
<script src="<?php bloginfo("template_url") ?>/js/magnific-popup/jquery.magnific-popup.min.js"></script> 
<script type="text/javascript" src="<?php bloginfo("template_url") ?>/js/hover.min.js"></script> 

<!-- Map Settings For Contact Page Only  --> 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDn1Xgy9UZadmFt3UCALlVN5OnFfOagoqA"></script> 
<script type="text/javascript" src="<?php bloginfo("template_url") ?>/js/map-settings.js"></script> 
<!-- Map Settings For Contact Page Only  -->
<script src="<?php bloginfo("template_url") ?>/js/jquery.form.min.js"></script> 
<!-- jQuery REVOLUTION Slider  --> 
<script src="<?php bloginfo("template_url") ?>/js/revolution/js/jquery.themepunch.tools.min.js"></script> 
<script src="<?php bloginfo("template_url") ?>/js/revolution/js/jquery.themepunch.revolution.min.js"></script> 
<script src="<?php bloginfo("template_url") ?>/js/custom.js"></script>


<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'uLaCyG0Fn4';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->
</body>
</html>
