<?php get_header(); ?>

<!-- =-=-=-=-=-=-= PAGE SECTION =-=-=-=-=-=-= -->
<div id="page-section"> 
  
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

  
 <!-- =-=-=-=-=-=-= APPOINMENT SECTION =-=-=-=-=-=-= -->
  <section class="padding-top-120" id="appoinment">
    <div class="container">
      <div class="section-title-left"> <strong>ЗАПИШИТЕСЬ НА ПРИЕМ</strong>
        <h1 class="heading bold">Заполните поля формы</h1>
        <hr>
        <p> Мы перезвоним Вам для уточнения деталей в ближайшее время
          </p>
      </div>
      <div class="row ">
        <div class="appointment-area  padding-top-30">
          <div class="col-md-7">
            <form class="appointment-form" method="post">
              <ul class="row">
                <li class="col-sm-12">
                  <label>Фамилия &amp; Имя</label>
                  <input type="text" placeholder="Введите Ваше имя" class="form-control">
                </li>
                <li class="col-sm-12">
                  <label>Номер телефона</label>
                  <input type="text" placeholder="Введите Ваш контактный номер" class="form-control">
                </li>
                <li class="col-sm-12">
                  <label>Предпочитаемая дата приема</label>
                  <input type="text" placeholder="Укажите дату" class="form-control datepicker" value="" data-date-format="mm/dd/yy">
                </li>
                <li class="col-sm-12">
                  <label>Детали</label>
                  <textarea placeholder="Ваше сообщение" class="form-control" cols="7" rows="9"></textarea>
                </li>
              </ul>
              <div class="appintment-form-btm">
                
                <input type="submit" class="btn btn-primary" value="Записаться">
              </div>
            </form>
          </div>
          <!-- End col-md-6 -->
          
          <div  class="col-md-5 img-history">
            <figure> <img alt="" src="<?php bloginfo("template_url") ?>/images/appionment.png"> </figure>
          </div>
          <!-- End col-md-6 --> 
        </div>
      </div>
      <!-- End row --> 
    </div>
  </section>
  <!-- =-=-=-=-=-=-= APPOINMENT SECTION  END =-=-=-=-=-=-= --> 

<!-- =-=-=-=-=-=-= PARALLEX TESTIMONILS =-=-=-=-=-=-= -->
<?php require('testimonils.php'); ?>
<!-- =-=-=-=-=-=-= PARALLEX TESTIMONILS END =-=-=-=-=-=-= --> 
  
</div>
<?php get_footer(); ?>