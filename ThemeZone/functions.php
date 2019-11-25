<?php 
	
	function enqueue(){
		wp_enqueue_style( 'ThemeZone_style', get_stylesheet_uri());
		wp_enqueue_style('bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css', 'all');
	}
	add_action("wp_enqueue_scripts", "enqueue");




	function ThemeZone_setup(){

		add_theme_support( 'Custom_Background' );

		add_theme_support( 'custom_header_options' );

		add_theme_support( 'post-thumbnails' );

		add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );

		add_image_size( 'ThemeZone-featured-image', 2000, 1200, true );

		add_image_size( 'ThemeZone-thumbnail-avatar', 100, 100, true );
		


		register_nav_menus( 
			array(
				'top'    => __( 'Top Menu', 'ThemeZone' ), 
				'social' => __( 'Social Links Menu', 'ThemeZone' ),
			)
		);
	}
	add_action( 'after_setup_theme', 'ThemeZone_setup');


	// Custom Logo setup
	function ThemeZone_custom_logo_setup() {
		$defaults = array(
 			'height'      => 100,
 			'width'       => 400,
 			'flex-height' => true,
 			'flex-width'  => true,
 			'header-text' => array( 'site-title', 'site-description' ),
 		);
 		add_theme_support( 'custom-logo', $defaults );
	}
	add_action( 'after_setup_theme', 'ThemeZone_custom_logo_setup' );




	function ThemeZone_Custom_post_type() {

		// Post Type: Authors Name.

		$labels = array(
			"name" => __( "Authors Name", "ThemeZone" ),
			"singular_name" => __( "Author", "ThemeZone" ),
		);

		$args = array(
			"label" => __( "Authors Name", "ThemeZone" ),
			"labels" => $labels,
			"show_ui" => true,
			"rewrite" => array( "slug" => "author_list", "with_front" => true ),
			"supports" => array( "title", "editor", "thumbnail", "tag" )
		);

		register_post_type( "author_list", $args );

		// Post Type: Books.

		$labels = array(
			"name" => __( "Book", "ThemeZone" ),
			"singular_name" => __( "Book", "ThemeZone" )
		);

		$args = array(
			"label" => __( "books", "ThemeZone" ),
			"labels" => $labels,
			"show_ui" => true,
			"rewrite" => array( "slug" => "book", "with_front" => true ),
			"supports" => array( "title", "editor", "thumbnail", "tag" )
		);

		register_post_type( "book", $args );
	}
	add_action( 'init', 'ThemeZone_Custom_post_type' );



	// Custom_plugin_WordCounter

	function ThemeZone_wordcount_heading($heading){
		$heading = "Total Words";
		return $heading;
	}
	add_filter( 'wordcount_heading', 'ThemeZone_wordcount_heading');

	function ThemeZone_wordcount_heading_tag($tag){
		return "h5";
	}
	add_filter( 'heading_tag', 'ThemeZone_wordcount_heading_tag' );

	function ThemeZone_reading_time_haeding($heading){
		$heading = "Total Spending Time For Reading";
		return $heading;
	}
	add_filter('readingtime_heading', 'ThemeZone_reading_time_haeding');

	function ThemeZone_reading_time_haeding_tag ($tag){
		return "p";
	}
	add_filter('readingtime_heading_tag', 'ThemeZone_reading_time_haeding_tag' );
	 

	// Custom_plugin_QRCode
	function ThemeZone_exclude_qrcv_post_type($post_types){
		$post_types[] = "page";
		return $post_types;
	}
	add_filter( 'qrcv_excluded_post_type', 'ThemeZone_exclude_qrcv_post_type' );

	// function ThemeZone_qrcv_dimension($dimension){
	// 	return '200x200';
	// }
	// add_filter( 'qrcv_dimension','ThemeZone_qrcv_dimension');
	function ThemeZone_qrcv_setting_country_list($countries){
		array_push($countries, 'Spain'); // add any elemnt
		$countries = array_diff($countries, array('Spain', 'India')); //delete any element
		return $countries;
	}
	add_action( 'qrcv_countries', 'ThemeZone_qrcv_setting_country_list');


?>
