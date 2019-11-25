<?php 

	function enqueue(){
		
		wp_enqueue_style( 'fontawesome-5.9.0',get_template_directory_uri(). '/fontawesome-5.9.0/css/all.min.css', array(), '1.0.0', 'all' );
		wp_enqueue_style( 'normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css', array(), '1.0.0', 'all' );
		wp_enqueue_style( 'owl_carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/assets/owl.carousel.min.css', array(), '1.0.0', 'all' );
		wp_enqueue_style( 'bulma_min', 'https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css', array(), '1.0.0', 'all' );
		wp_enqueue_style( 'style', get_stylesheet_uri() );


		wp_enqueue_script( 'owl.carousel.min', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/owl.carousel.min.js', array('jquery'), '1.0.0', true);
		wp_enqueue_script( 'main.js', get_template_directory_uri(). '/js/main.js', array('jquery'), '1.0.0', true);
	}add_action( 'wp_enqueue_scripts', 'enqueue' );


	function ElizabethLove_setup(){
		add_theme_support( 'dashicon' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
		$logo = array(
	 					'height'      => 100,
	 					'width'       => 400,
	 					'flex-height' => true,
	 					'flex-width'  => true,
	 					'header-text' => array( 'site-title', 'site-description' ),
	 				);
	 	add_theme_support( 'custom-logo', $logo );
		register_nav_menus( 
				array(
					'top'    => __( 'Top Menu', 'ElizabethLove' ), 
					'social' => __( 'Social Links Menu', 'ElizabethLove' ),
				)
			);

	}
	add_action('after_setup_theme', 'ElizabethLove_setup');


	function custom_page() {

		$var_banner = array(
			"label" => __( "Banners", "ElizabethLove" ),
			"labels" => array(
							"name" => __( "Banners", "ElizabethLove" ),
							"singular_name" => __( "Banner", "ElizabethLove" )
						),
			"show_ui" => true,
			"supports" => array( "title", "editor", "thumbnail" ),
			"taxonomies" => array("category", "post_tag"),
			"menu_icon" => "dashicons-format-aside",
		); 
		register_post_type( "banner", $var_banner );


		$var_author = array(
			"label" => __( "authors", "ElizabethLove" ),
			"labels" => array(
							"name" => __( "Authors", "ElizabethLove" ),
							"singular_name" => __( "Author", "ElizabethLove" )
						),
			"show_ui" => true,
			"supports" => array( "title", "editor", "thumbnail" ),
			"taxonomies" => array("category", "post_tag"),
			"menu_icon" => "dashicons-buddicons-buddypress-logo",
		); 
		register_post_type( "author", $var_author );

		$var_section_title = array(
			"label" => __( "section_title", "ElizabethLove" ),
			"labels" => array(
							"name" => __( "Titles", "ElizabethLove" ),
							"singular_name" => __( "Title", "ElizabethLove" )
						),
			"show_ui" => true,
			"supports" => array( "title", "editor", "thumbnail"),
			"taxonomies" => array("category", "post_tag"),
			"menu_icon" => "dashicons-editor-paste-text",
		); 
		register_post_type( "section_title", $var_section_title );

		$var_category_item = array(
			"label" => __( "category_items", "ElizabethLove" ),
			"labels" => array(
							"name" => __( "Category_Items", "ElizabethLove" ),
							"singular_name" => __( "Category_Item", "ElizabethLove" )
						),
			"show_ui" => true,
			"supports" => array( "title", "editor", "thumbnail" ),
			"taxonomies" => array("category", "post_tag"),
			"menu_icon" => "dashicons-category",
		); 
		register_post_type( "category_items", $var_category_item );

		$var_testimonial = array(
			"label" => __( "testimonial", "ElizabethLove" ),
			"labels" => array(
							"name" => __( "Testimonials", "ElizabethLove" ),
							"singular_name" => __( "Testimonial", "ElizabethLove" )
						),
			"show_ui" => true,
			"supports" => array( "title", "editor", "thumbnail" ),
			"taxonomies" => array("category", "post_tag"),
			"menu_icon" => "dashicons-admin-comments",
		);
		register_post_type( "testimonial", $var_testimonial );

		$var_social_icon = array(
			"label" => __( "social_icon", "ElizabethLove" ),
			"labels" => array(
							"name" => __( "Social Icons", "ElizabethLove" ),
							"singular_name" => __( "Social Icon", "ElizabethLove" )
						),
			"show_ui" => true,
			"supports" => array( "title", "editor", "thumbnail" ),
			"taxonomies" => array("category", "post_tag"),
			"menu_icon" => "dashicons-networking",
		); 
		register_post_type( "social_icon", $var_social_icon );

		$var_copyright_text = array(
			"label" => __( "copyright", "ElizabethLove" ),
			"labels" => array(
							"name" => __( "Copyright Text", "ElizabethLove" ),
							"singular_name" => __( "copyright", "ElizabethLove" )
						),
			"show_ui" => true,
			"supports" => array( "title", "editor", "thumbnail" ),
			"taxonomies" => array("category", "post_tag"),
			"menu_icon" => "dashicons-pressthis",
		); 
		register_post_type( "copyright", $var_copyright_text );

		$var_btn = array(
			"label" => __( "btn", "ElizabethLove" ),
			"labels" => array(
							"name" => __( "News Button", "ElizabethLove" ),
							"singular_name" => __( "Button", "ElizabethLove" )
						),
			"show_ui" => true,
			"supports" => array( "title", "editor", "thumbnail" ),
			"taxonomies" => array("category", "post_tag"),
			"menu_icon" => "dashicons-album",
		); 
		register_post_type( "btn", $var_btn );
	} 
	add_action( 'init', 'custom_page' );

?>