<?php
	if ( ! function_exists( 'BizCola_setup' ) ) :
	function BizCola_setup() {
		
		load_theme_textdomain( 'BizCola', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		add_theme_support( 'automatic-feed-links' );



		if ( has_post_format( 'blog' ) ) {
		    echo 'This is a quote.';
		};

		register_nav_menus(
			array(
				'header_menu' => __( 'Primary', 'BizCola' ),)
		);

		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

		add_theme_support(
			'custom-logo',
			array(
				'height'      => 190,
				'width'       => 190,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
}
endif;
add_action( 'after_setup_theme', 'BizCola_setup' ); 
?>