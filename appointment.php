<?php require ("header.php"); ?>

<!-- =-=-=-=-=-=-= PAGE SECTION =-=-=-=-=-=-= -->
<div id="page-section"> 
  
<!-- =-=-=-=-=-=-= PAGE HEADING SECTION =-=-=-=-=-=-= -->
  <section class="page-heading breadcrumb-image">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-heading_content text-center">
            <h1><span>ЗАПИСЬ НА ПРИЕМ</span></h1>
            <div class="bredcrumbs"> <a href="#">На главную</a> <span>/</span> <a href="#">ЗАПИСЬ НА ПРИЕМ</a> </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- =-=-=-=-=-=-= PAGE HEADING SECTION END =-=-=-=-=-=-= -->

  <!-- =-=-=-=-=-=-= APPOINMENT SECTION =-=-=-=-=-=-= -->
  <section class="padding-top-120" id="appoinment">
    <div class="container">
      
      <div class="row ">
        <div class="appointment-area">
          <div class="col-md-7">
            <form class="appointment-form" method="post">
              <ul class="row">
                <li class="col-sm-12">
                  <label>FIRST NAME &amp; LAST NAME</label>
                  <input type="text" placeholder="Enter your Name" class="form-control">
                </li>
                <li class="col-sm-12">
                  <label>CONTACT NUMBER</label>
                  <input type="text" placeholder="Enter your contact number" class="form-control">
                </li>
                <li class="col-sm-12">
                  <label>DATE FROM</label>
                  <input type="text" placeholder="Select Date" class="form-control datepicker" value="" data-date-format="mm/dd/yy">
                </li>
                <li class="col-sm-12">
                  <label>MESSAGE</label>
                  <textarea placeholder="Type your Message" class="form-control" cols="7" rows="9"></textarea>
                </li>
              </ul>
              <div class="appintment-form-btm">
                <input type="submit" class="btn btn-primary" value="Send Message">
              </div>
            </form>
          </div>
          <!-- End col-md-6 -->
          
          <div  class="col-md-5 img-history">
            <figure> <img alt="" src="images/appionment.png"> </figure>
          </div>
          <!-- End col-md-6 --> 
        </div>
      </div>
      <!-- End row --> 
    </div>
  </section>
  <!-- =-=-=-=-=-=-= APPOINMENT SECTION  END =-=-=-=-=-=-= --> 


  <!-- =-=-=-=-=-=-= PARALLEX TESTIMONILS =-=-=-=-=-=-= -->
  <section  data-stellar-background-ratio="0" class="testimonial-bg parallex section-padding-140 text-center">
    <div class="container">
      <div class="col-md-8 col-md-offset-2">
        <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000"> 
          <!-- Carousel indicators -->
          <ol class="carousel-indicators">
            <li data-target="#fade-quote-carousel" data-slide-to="0"></li>
            <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
            <li data-target="#fade-quote-carousel" data-slide-to="2" class="active"></li>
            <li data-target="#fade-quote-carousel" data-slide-to="3"></li>
            <li data-target="#fade-quote-carousel" data-slide-to="4"></li>
            <li data-target="#fade-quote-carousel" data-slide-to="5"></li>
          </ol>
          <!-- Carousel items -->
          <div class="carousel-inner">
            <div class="item">
              <div class="profile-circle"> <img src="images/admin-1.jpg" alt="" class="img-circle"> </div>
              <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
              </blockquote>
            </div>
            <div class="item">
              <div class="profile-circle"> <img src="images/admin-2.jpg" alt="" class="img-circle"> </div>
              <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
              </blockquote>
            </div>
            <div class="active item">
              <div class="profile-circle"> <img src="images/admin-3.jpg" alt="" class="img-circle"> </div>
              <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
              </blockquote>
            </div>
            <div class="item">
              <div class="profile-circle"> <img src="images/admin-1.jpg" alt="" class="img-circle"> </div>
              <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
              </blockquote>
            </div>
            <div class="item">
              <div class="profile-circle"> <img src="images/admin-2.jpg" alt="" class="img-circle"> </div>
              <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
              </blockquote>
            </div>
            <div class="item">
              <div class="profile-circle"> <img src="images/admin-3.jpg" alt="" class="img-circle"> </div>
              <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
  <!-- =-=-=-=-=-=-= PARALLEX TESTIMONILS END =-=-=-=-=-=-= --> 
  
<?php require ("footer.php"); ?>
