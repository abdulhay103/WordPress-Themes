<?php 

function enqueue(){
		wp_enqueue_style( 'style', get_stylesheet_uri());
		wp_enqueue_style( 'google-fonts-a','https://fonts.googleapis.com/css?family=Croissant+One', array(), '1.0', 'all' );
		wp_enqueue_style( 'google-fonts-b', 'https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900', array(), '1.0', 'all' );
		wp_enqueue_style( 'google-fonts-c', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), '1.0', 'all' );
		wp_enqueue_style( 'bootstrap-css', get_template_directory_uri().'/css/bootstrap.css', array(), '1.0', 'all' );
		wp_enqueue_style( 'font-awesome-css', get_template_directory_uri().'/css/font-awesome.min.css', array(), '1.0', 'all' );
		wp_enqueue_style( 'owl-carousel-css', get_template_directory_uri().'/css/owl.carousel.min.css', array(), '1.0', 'all' );
		wp_enqueue_style( 'owl-carousel-theme', get_template_directory_uri().'/css/owl.theme.default.min.css', array(), '1.0', 'all' );
		wp_enqueue_style( 'myTheme-responsive-style', get_template_directory_uri().'/responsive.css', array(), '1.0', 'all' );

		wp_enqueue_script( 'bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), '1.0', true);
		wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri().'/js/owl.carousel.min.js', array('jquery'), '1.0', true);
		wp_enqueue_script( 'active-js', get_template_directory_uri().'/js/active.js', array('jquery'), '1.0', true);

	}
	add_action("wp_enqueue_scripts", "enqueue");




function ThemeArea_setup(){

		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'dashicon' );

		add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );

		$defaults = array(
 					'height'      => 100,
 					'width'       => 400,
 					'flex-height' => true,
 					'flex-width'  => true,
 					'header-text' => array( 'site-title', 'site-description' ),
 				);
 		add_theme_support( 'custom-logo', $defaults );
		
		register_nav_menus( 
			array(
				'top'    => __( 'Top Menu', 'ThemeArea' ), 
				'social' => __( 'Social Links Menu', 'ThemeArea' ),
			)
		);
	}
	add_action( 'after_setup_theme', 'ThemeArea_setup');

	/**
	 * Add a sidebar.
	 */
	function wpdocs_theme_slug_widgets_init() {
	    register_sidebar( array(
	        'name'          => __( 'Main Sidebar', 'ThemeArea' ),
	        'id'            => 'sidebar-1',
	        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'ThemeArea' ),
	        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	        'after_widget'  => '</li>',
	        'before_title'  => '<h2 class="widgettitle">',
	        'after_title'   => '</h2>',
	    ) );
	}
	add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );

	function cptui_register_my_cpts() {

	/**
	 * Post Type: Custom Pages.
	 */

	$labels = array(
		"name" => __( "Custom Pages", "ThemeArea" ),
		"singular_name" => __( "Custom page", "ThemeArea" ),
	);

	$args = array(
		"label" => __( "Custom Pages", "ThemeArea" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "custome_page", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "custome_page", $args );

	/**
	 * Post Type: Section_2.
	 */

	$labels = array(
		"name" => __( "Section_2", "ThemeArea" ),
		"singular_name" => __( "New section", "ThemeArea" ),
	);

	$args = array(
		"label" => __( "Section_2", "ThemeArea" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "custom_secton2", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "custom_secton2", $args );

	/**
	 * Post Type: Iconboxs.
	 */

	$labels = array(
		"name" => __( "Iconboxs", "ThemeArea" ),
		"singular_name" => __( "Iconbox", "ThemeArea" ),
	);

	$args = array(
		"label" => __( "Iconboxs", "ThemeArea" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "custom_iconbox", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "custom-fields", "thumbnail" ),
	);

	register_post_type( "custom_iconbox", $args );

	/**
	 * Post Type: How_it_work.
	 */

	$labels = array(
		"name" => __( "How_it_work", "ThemeArea" ),
		"singular_name" => __( "work_list", "ThemeArea" ),
	);

	$args = array(
		"label" => __( "How_it_work", "ThemeArea" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "work_page", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "work_page", $args );

	/**
	 * Post Type: We Did Recently.
	 */

	$labels = array(
		"name" => __( "We Did Recently", "ThemeArea" ),
		"singular_name" => __( "New page", "ThemeArea" ),
	);

	$args = array(
		"label" => __( "We Did Recently", "ThemeArea" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "did_recently", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "did_recently", $args );

	/**
	 * Post Type: Hover Boxs.
	 */

	$labels = array(
		"name" => __( "Hover Boxs", "ThemeArea" ),
		"singular_name" => __( "New Box", "ThemeArea" ),
	);

	$args = array(
		"label" => __( "Hover Boxs", "ThemeArea" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "hover_box", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "hover_box", $args );

	/**
	 * Post Type: Our Team.
	 */

	$labels = array(
		"name" => __( "Our Team", "ThemeArea" ),
		"singular_name" => __( "New Team", "ThemeArea" ),
	);

	$args = array(
		"label" => __( "Our Team", "ThemeArea" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "custom_team", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "custom_team", $args );

	/**
	 * Post Type: sliders.
	 */

	$labels = array(
		"name" => __( "sliders", "ThemeArea" ),
		"singular_name" => __( "slider", "ThemeArea" ),
	);

	$args = array(
		"label" => __( "sliders", "ThemeArea" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "slider", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "slider", $args );

	/**
	 * Post Type: Contact Us.
	 */

	$labels = array(
		"name" => __( "Contact Us", "ThemeArea" ),
		"singular_name" => __( "New Page", "ThemeArea" ),
	);

	$args = array(
		"label" => __( "Contact Us", "ThemeArea" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "contact_us", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "contact_us", $args );

	/**
	 * Post Type: Footer logo.
	 */

	$labels = array(
		"name" => __( "Footer logo", "ThemeArea" ),
		"singular_name" => __( "logo", "ThemeArea" ),
	);

	$args = array(
		"label" => __( "Footer logo", "ThemeArea" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "footer_logo", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "footer_logo", $args );

	/**
	 * Post Type: Footer menu.
	 */

	$labels = array(
		"name" => __( "Footer menu", "ThemeArea" ),
		"singular_name" => __( "New Manu", "ThemeArea" ),
	);

	$args = array(
		"label" => __( "Footer menu", "ThemeArea" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "footer_menu", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "footer_menu", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );


?>