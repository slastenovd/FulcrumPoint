<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="ScriptsBundle">
<title><?php bloginfo("name") ?></title>
<!-- =-=-=-=-=-=-= Favicons Icon =-=-=-=-=-=-= -->
<link rel="icon" href="<?php bloginfo("template_url") ?>/images/favicon.ico" type="image/x-icon" />
<!-- =-=-=-=-=-=-= Mobile Specific =-=-=-=-=-=-= -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- =-=-=-=-=-=-= Google Fonts =-=-=-=-=-=-= -->
<link href='https://fonts.googleapis.com/css?family=Dosis:300,700,600' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- =-=-=-=-=-=-= HEADER =-=-=-=-=-=-= -->
<section class="top-bar">
  <div class="container">
    <div class="left-text pull-left">
      <p><?php echo get_option('site_top_string'); ?></p>
    </div>
    <!-- /.left-text -->
    
    <div class="social-icons pull-right">
      <ul>
        <li><a href="#"><i class="fa fa-vk"></i></a></li>
        <li><a href="#"><i class="fa fa-odnoklassniki"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
      </ul>
    </div>
    <!-- /.social-icons --> 
  </div>
</section>
<header class="header-area"> 
  <!-- Logo Bar -->
  <div class="logo-bar">
    <div class="container clearfix"> 
      <!-- Logo -->
      <div class="logo"> <a href="<?php  bloginfo("url") ?>"><img src="<?php bloginfo("template_url") ?>/images/logo-1.png" alt=""></a> </div>
      
      <!--Info Outer-->
      <div class="information-content"> 
        <!--Info Box-->
        <div class="info-box  hidden-sm">
          <div class="icon"><span class="icon-envelope"></span></div>
          <div>EMAIL</div>
          <a href="mailto:<?php echo get_option('site_email'); ?>"><?php echo get_option('site_email'); ?></a> </div>
        <!--Info Box-->
        <div class="info-box">
          <div class="icon"><span class="icon-phone"></span></div>
          <div>Телефон</div>
          <a class="location" href="#"><?php echo get_option('site_telephone'); ?></a> </div>
        <div class="info-box">
          <div class="icon"><span class="icon-map"></span></div>
          <div>Комсомольск-на-Амуре</div>
          <a class="location" href="#"><?php echo get_option('theme_contacttext'); ?></a> </div>
      </div>
    </div>
  </div>
    <!-- Header Top End --> 
    
    <!-- Menu Section -->
    <div class="navigation-2"> 
      <!-- navigation-start -->
      <nav class="navbar navbar-default ">
        <div class="container"> 
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false">
             <span class="sr-only">Toggle navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
            </button>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->

          <?php
            $args = array(
              'menu_class'      => 'nav navbar-nav',
              'container'       => 'div', 
              'container_class' => 'collapse navbar-collapse', 
              'container_id'    => 'main-navigation',
              'theme_location'  => 'header_menu',
              'echo'            => 0,
            );
            $menu = wp_nav_menu( $args );
            $menu = str_replace('class="menu-item', 'class="menu-item dropdown', $menu );
            $menu = str_replace('class="sub-menu', 'class="sub-menu dropdown-menu', $menu );
            echo $menu;
          ?>

          <div class="appoinment-button"><a class="appoinment-button" href="appointment.php">Запись на прием</a></div>
        </div>
        <!-- /.container-end --> 
      </nav>
    </div>
  <!-- /.navigation-end --> 
  <!-- Menu  End --> 



 <!-- Menu Section -->
    <div class="navigation-2"> 
      <!-- navigation-start -->
      <nav class="navbar navbar-default ">
        <div class="container"> 
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false">
             <span class="sr-only">Toggle navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
            </button>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->

          <div id="main-navigation" class="collapse navbar-collapse">
            <ul id="menu-%d0%bc%d0%b5%d0%bd%d1%8e-%d0%b2-%d1%88%d0%b0%d0%bf%d0%ba%d0%b5" class="nav navbar-nav">
              <li id="menu-item-7" class="menu-item dropdown menu-item-type-custom menu-item-object-custom menu-item-7"><a href="http://tochkaopory.localhost/">Главная</a></li>
              <li id="menu-item-71" class="menu-item dropdown menu-item-type-post_type menu-item-object-page menu-item-71"><a href="http://wp.lavazza-kms.ru/price/">Цены</a></li>

<li class="dropdown"> <a class="dropdown-toggle"  href="#" data-toggle="dropdown">Услуги <span class="fa fa-angle-down"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="hirudotherapy.php">Гирудотерапия</a> </li>
                  <li><a href="services.php">Услуги</a> </li>
                  <li><a href="services-2.php">Услуги 2</a> </li>
                  <li><a href="services-3.php">Услуги 3</a> </li>
                </ul>
              </li>


<li id="menu-item-28" class="menu-item dropdown menu-item-type-post_type menu-item-object-page menu-item-28"><a href="http://wp.lavazza-kms.ru/%d0%be-%d0%bd%d0%b0%d1%81/">О нас</a></li>
<li id="menu-item-8" class="menu-item dropdown menu-item-type-taxonomy menu-item-object-category menu-item-8"><a href="http://wp.lavazza-kms.ru/category/articles/">Статьи</a></li>
<li id="menu-item-27" class="menu-item dropdown menu-item-type-taxonomy menu-item-object-category menu-item-27"><a href="http://wp.lavazza-kms.ru/category/news/">Новости</a></li>
<li id="menu-item-68" class="menu-item dropdown menu-item-type-post_type menu-item-object-page menu-item-68"><a href="http://wp.lavazza-kms.ru/contacts/">Контакты</a></li>
</ul></div>
          <div class="appoinment-button"><a class="appoinment-button" href="appointment.php">Запись на прием</a></div>
        </div>
        <!-- /.container-end --> 
      </nav>
    </div>
  <!-- /.navigation-end --> 
  <!-- Menu  End --> 


</header>
<!-- =-=-=-=-=-=-= HEADER END =-=-=-=-=-=-= --> 
