<?php 
	
/**
 * Enqueue scripts and styles.
 */

function BizCola_scripts() {
	wp_enqueue_style( 'BizCola_animate_css', get_template_directory_uri() . '/assets/css/animate.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'BizCola_all_min_css', get_template_directory_uri() . '/assets/css/all.min.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'BizColaowl_carousel_min_css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'BizCola_fancybox_min_css', get_template_directory_uri() . '/assets/css/fancybox.min.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'BizCola_sm-clean_css', get_template_directory_uri() . '/assets/css/sm-clean.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'BizCola_sm-core_css', get_template_directory_uri() . '/assets/css/sm-core.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'BizCola_bootstrap_min_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.3.1', 'all' );
	wp_enqueue_style( 'BizCola_default_css', get_template_directory_uri() . '/assets/css/default.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'BizCola-Main_style', get_stylesheet_uri());

	wp_enqueue_style( 'BizCola_responsive_css', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0.0', 'all' );

	

	wp_enqueue_script( 'BizCola-jqueryJs', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js', array(), '3.3.1', true );
	wp_enqueue_script( 'BizCola-bootstrapJs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '4.3.1', true );
	wp_enqueue_script( 'BizCola_owl.carouselJs', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '4.5.0', true );
	wp_enqueue_script( 'BizCola_fancyboxJs', get_template_directory_uri() . '/assets/js/fancybox.min.js', array('jquery'), '4.5.0', true );
	wp_enqueue_script( 'BizCola_wowJs', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), '4.5.0', true );
	wp_enqueue_script( 'BizCola_imagesloadedJs', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', array('jquery'), '4.5.0', true );
	wp_enqueue_script( 'BizCola_isotopeJs', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array('jquery'), '4.5.0', true );
	wp_enqueue_script( 'BizCola_smartmenusJs', get_template_directory_uri() . '/assets/js/smartmenus.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'BizCola_mainJs', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'BizCola_FooterJs', get_template_directory_uri() . '/assets/js/footer.js', array('jquery', 'BizCola_isotopeJs', 'BizCola_smartmenusJs' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'BizCola_scripts' );

?>