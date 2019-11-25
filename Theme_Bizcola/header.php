<?php
/**
 * The header for our theme
 * @package WordPress
 * @subpackage Theme_BizCola
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body>
    <!-- ========= preloader area Start =========== -->
   <!-- <div id="preloader">
        <div class="loader">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo/loader.gif" alt="preloader">
        </div>
    </div> -->
    <!-- ========= preloader area End =========== -->
    <!-- ============ Header area start ============-->
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav" role="navigation">
                        <!-- Mobile menu toggle button (hamburger/x icon) -->
                        <input id="main-menu-state" type="checkbox" />
                        <label class="main-menu-btn" for="main-menu-state">
                            <span class="main-menu-btn-icon"></span>
                        </label>
                        <div class="nav-brand">
                            <?php if ( function_exists( 'the_custom_logo' ) ) {
                                 the_custom_logo();
                                } 
                            ?>
                        </div>
                        <!-- Sample menu definition -->
                      
                            <?php 
                                wp_nav_menu( array(
                                    'theme_location'  => 'Primary',
                                    'menu'            => 'BizCola_Menu',
                                    'container'       => 'div',
                                    'container_class' => '',
                                    'container_id'    => '',
                                    'menu_class'      => 'sm sm-clean',
                                    'menu_id'         => 'main-menu'
                                ) );
                            ?>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!--========= header area end ========== -->
