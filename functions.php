<?php

	// Задаем длинну отрывка в топике блога
	function new_excerpt_length($length) {
		return 15;
	}
	add_filter('excerpt_length', 'new_excerpt_length');

	// Подключение css и js
	function theme_name_scripts() {
		wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.css');
		wp_enqueue_style( 'et-line-fonts', get_template_directory_uri().'/css/et-line-fonts.css');
		wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/css/font-awesome.css');

		wp_enqueue_style( 'style', get_stylesheet_uri());
		wp_enqueue_style( 'style', get_template_directory_uri().'/css/font-awesome.css');
		wp_enqueue_style( 'style', get_template_directory_uri().'/css/et-line-fonts.css');
		wp_enqueue_style( 'style', get_template_directory_uri().'/css/flaticon.css');
		wp_enqueue_style( 'magnific-popup', get_template_directory_uri().'/js/magnific-popup/magnific-popup.css');
		wp_enqueue_style( 'revolution', get_template_directory_uri().'/js/revolution/css/settings.css');
		wp_enqueue_script( 'modernizr', get_template_directory_uri().'/js/modernizr.js');
	}
	add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );


	function mytheme_customize_register( $wp_customize ) {
		/* 	Добавляем секцию в настройки темы */
		$wp_customize->add_section('data_site_section',array('title' => 'Данные сайта','capability' => 'edit_theme_options','description' => "Укажите данные для сайта"));
		/* 	Добавляем поле контактных данных */
		$wp_customize->add_setting('theme_contacttext',array('default' => '','type' => 'option'));
		$wp_customize->add_control('theme_contacttext_control',array('type' => 'text','label' => "Адрес",'section' => 'data_site_section','settings' => 'theme_contacttext'));
		/* 	Добавляем поле телефона site_telephone 	*/
		$wp_customize->add_setting('site_telephone',array('default' => '','type' => 'option'));
		$wp_customize->add_control('site_telephone_control', array('type' => 'text','label' => "Телефон",'section' => 'data_site_section','settings' => 'site_telephone'));
		/* 	Добавляем поле email site_email */
		$wp_customize->add_setting('site_email', array('default' => '', 'type' => 'option')	);
		$wp_customize->add_control('site_email_control',array('type' => 'text','label' => "EMAIL",'section' => 'data_site_section','settings' => 'site_email'));
		/* 	Добавляем поле top_string site_top_string */
		$wp_customize->add_setting('site_top_string',array('default' => '','type' => 'option'));
		$wp_customize->add_control('site_top_string',array('type' => 'text','label' => "Строка вверху",'section' => 'data_site_section','settings' => 'site_top_string'));
		/* 	Добавляем секцию СЛАЙДЕР в настройки темы */
		$wp_customize->add_section('data_slider_section', array('title' => 'Настройка слайдера', 'capability' => 'edit_theme_options', 'description' => "Укажите данные для сайта")	);
		/* 	Добавляем поле Заголовок слайда 1 */
		$wp_customize->add_setting('slider1_header', array('default'=>'','type'=>'option') );
		$wp_customize->add_control('slider1_header', array('type'=>'text', 'label'=>"Заголовок слайда 1", 'section'=>'data_slider_section', 'settings'=>'slider1_header') );
		/* 	Добавляем поле Подзаголовок слайда 1 */
		$wp_customize->add_setting('slider1_subheader', array('default'=>'','type'=>'option') );
		$wp_customize->add_control('slider1_subheader', array('type'=>'text', 'label'=>"Подзаголовок слайда 1", 'section'=>'data_slider_section', 'settings'=>'slider1_subheader') );
		/* 	Добавляем поле Заголовок слайда 2 */
		$wp_customize->add_setting('slider2_header', array('default'=>'','type'=>'option') );
		$wp_customize->add_control('slider2_header', array('type'=>'text', 'label'=>"Заголовок слайда 2", 'section'=>'data_slider_section', 'settings'=>'slider2_header') );
		/* 	Добавляем поле Подзаголовок слайда 2 */
		$wp_customize->add_setting('slider2_subheader', array('default'=>'','type'=>'option') );
		$wp_customize->add_control('slider2_subheader', array('type'=>'text', 'label'=>"Подзаголовок слайда 2", 'section'=>'data_slider_section', 'settings'=>'slider2_subheader') );
		/* 	Добавляем поле Заголовок слайда 3 */
		$wp_customize->add_setting('slider3_header', array('default'=>'','type'=>'option') );
		$wp_customize->add_control('slider3_header', array('type'=>'text', 'label'=>"Заголовок слайда 3", 'section'=>'data_slider_section', 'settings'=>'slider3_header') );
		/* 	Добавляем поле Подзаголовок слайда 3 */
		$wp_customize->add_setting('slider3_subheader', array('default'=>'','type'=>'option') );
		$wp_customize->add_control('slider3_subheader', array('type'=>'text', 'label'=>"Подзаголовок слайда 3", 'section'=>'data_slider_section', 'settings'=>'slider3_subheader') );
		/* 	Добавляем поле Заголовок слайда 4 */
		$wp_customize->add_setting('slider4_header', array('default'=>'','type'=>'option') );
		$wp_customize->add_control('slider4_header', array('type'=>'text', 'label'=>"Заголовок слайда 4", 'section'=>'data_slider_section', 'settings'=>'slider4_header') );
		/* 	Добавляем поле Подзаголовок слайда 4 */
		$wp_customize->add_setting('slider4_subheader', array('default'=>'','type'=>'option') );
		$wp_customize->add_control('slider4_subheader', array('type'=>'text', 'label'=>"Подзаголовок слайда 4", 'section'=>'data_slider_section', 'settings'=>'slider4_subheader') );
	}
	add_action( 'customize_register', 'mytheme_customize_register' );


	add_action( 'init', 'create_post_type' );
	function create_post_type() {
	  register_post_type( 'services',
	    array(
	      'labels' => array(
	        'name' => __( 'Услуги' ),
	        'singular_name' => __( 'services' ),

			// 'add_new'            => 'Новая услуга', // для добавления новой записи
	        'add_new_item'       => 'Услуги центра', // заголовка у вновь создаваемой записи в админ-панели.
			// 'edit_item'          => '', // для редактирования типа записи
			'new_item'           => 'Новая услуга', // текст новой записи
			// 'view_item'          => '', // для просмотра записи этого типа.
			// 'search_items'       => '', // для поиска по этим типам записи
			// 'not_found'          => '', // если в результате поиска ничего не было найдено
			// 'not_found_in_trash' => '', // если не было найдено в корзине
			// 'parent_item_colon'  => '', // для родительских типов. для древовидных типов
			// 'menu_name'          => '', // название меню

	      ),
	      'public' => true,
	      'has_archive' => true,
	      'menu_position' => 4,
	      'menu_icon' => 'dashicons-universal-access',
	      'taxonomies' => array('post_tag'),
	      'supports' => array('title','editor','author','thumbnail','excerpt','comments'),
	    )
	  );
	}


	function learningWordPress_setup(){
		// Подключение миниатюр
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'small-tumbnail', 180, 120, array('left','top') );
		add_image_size( 'banner-tumbnail', 750, 200, array('left','center') );
		add_image_size( 'blog-preview-tumbnail', 555, 370, array('center','center') );
		add_image_size( 'blog-tumbnail', 720, 480, array('center','center') );

		register_nav_menus(array(	'header_menu'=>'Меню в шапке', 
									'footer_menu'=>'Меню внизу' )
								);

		add_theme_support( 'post-formats', array('gallery') ); // ,'aside','link'
	}

	add_action( 'after_setup_theme', 'learningWordPress_setup' );


	/**
	 * Register widget area.
	 *
	 */
	function FulcrumPoint_widgets_init() {
		register_sidebar( array(
			'name'          => esc_html__( 'Sidebar', 'FulcrumPoint' ),
			'id'            => 'sidebar-1',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			// 'description'   => esc_html__( 'Add widgets here.', 'FulcrumPoint' ),
			// 'before_widget' => '<section id="%1$s" class="widget %2$s">',
			// 'after_widget'  => '</section>',
			// 'before_title'  => '<h2 class="widget-title">',
			// 'after_title'   => '</h2>',
		) );

		register_sidebar( array(
			'name'          => 'Footer Area 1',
			'id'            => 'footer-1',
			'before_widget' => '<div id="%1$s" class="col-md-3 widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		) );

		register_sidebar( array(
			'name'          => 'Footer Area 2',
			'id'            => 'footer-2',
			'before_widget' => '<div id="%1$s" class="col-md-3 widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		) );


		register_sidebar( array(
			'name'          => 'Footer Area 4',
			'id'            => 'footer-4',
			'before_widget' => '<div id="%1$s" class="col-md-3 widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		) );

	}
	add_action( 'widgets_init', 'FulcrumPoint_widgets_init' );	

/* 
 * Изменение вывода галереи через шоткод 
 * Смотреть функцию gallery_shortcode в http://wp-kama.ru/filecode/wp-includes/media.php
 * $output = apply_filters( 'post_gallery', '', $attr );
 */
add_filter('post_gallery', 'my_gallery_output', 10, 2);
function my_gallery_output( $output, $attr ){
	$ids_arr = explode(',', $attr['ids']);
	$ids_arr = array_map('trim', $ids_arr );

	$pictures = get_posts( array(
		'posts_per_page' => -1,
		'post__in'       => $ids_arr,
		'post_type'      => 'attachment',
		'orderby'        => 'post__in',
	) );

	if( ! $pictures ) return 'Запрос вернул пустой результат.';

	// Вывод
	$out = '<section id="portfolio">';
	$out .= '<div class="portfolio-container text-center">';
	$out .= '<ul id="portfolio-grid" class="four-column hover-four">';

	// Выводим каждую картинку из галереи
	foreach( $pictures as $pic ){
		$src = $pic->guid;
		$t = esc_attr( $pic->post_title );
		$title = ( $t && false === strpos($src, $t)  ) ? $t : '';

		$caption = ( $pic->post_excerpt != '' ? $pic->post_excerpt : $title );

		$out .= '<li class="portfolio-item"> 
					<div class="portfolio">
						<div class="tt-overlay"></div>
						<img src="'.  $src  .'" alt="">
						<div class="portfolio-info">
							<h3 class="project-title">'. $title .'</h3>
		            		<a href="#" class="links">App Design</a> 
		            	</div>
		            	<ul class="portfolio-details">
        		      		<li><a class="tt-lightbox" href="'.  $src  .'"><i class="fa fa-search"></i></a></li>
              		  		<li><a href="#"><i class="fa fa-external-link"></i></a></li>
            			</ul>
          			</div>
		        </li>';
	}

	$out .= '</ul></div></section>';

	return $out;
}
?>