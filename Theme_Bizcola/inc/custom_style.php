<?php
	function BizCola_Custom_style() {

		//banner Section
		if( have_rows('bizcola_banner_section', 'option') ):
		   	while( have_rows('bizcola_banner_section', 'option') ): the_row();
		   		if( have_rows('banner_slider_text_color') ):
			   		while( have_rows('banner_slider_text_color') ): the_row(); 
		   				$header_text_color = get_sub_field('header_text_color');
		   				$header_content_text_color = get_sub_field('header_content_text_color');
		   				$banner_btn_text_color = get_sub_field('banner_btn_text_color');
        			endwhile;
        		endif;
        		if( have_rows('overlay_colors') ):
			   		while( have_rows('overlay_colors') ): the_row(); 
		   				$overlay_first_color = get_sub_field('overlay_first_color');
        				$overlay_second_color = get_sub_field('overlay_second_color');
        			endwhile;
        		endif;
    		endwhile;
        endif;

        // About Section
        $about_item_bg_field = get_field('bizcola_about_section', 'option');
       	$item_bg = $about_item_bg_field['about_items_background'];
       	$popup_video_bg = $about_item_bg_field['popup_videos_bg_img'];

       	/*Team Page*/
       	$team_hero_secton_field = get_field('team_hero_secton', 'option');
       	$team_hero_section_bg = $team_hero_secton_field['team_hero_section_bg'];
       	$team_overla_1st_color = $team_hero_secton_field['team_overla_1st_color'];
       	$team_overlay_2nd_color = $team_hero_secton_field['team_overlay_2nd_color'];

       	// Service Section ManageMent
       	$service_hero_section_field = get_field('service_hero_section', 'option');
        $hero_service_features_img = $service_hero_section_field['hero_service_features_img'];

    ?>

	<style type="text/css">

		/*Banner Section*/
        .hero-area .slider-content h2{
        	color: <?php echo $header_text_color ?>;
        }
        .hero-area .slider-content p {
		    color: <?php echo $header_content_text_color ?>;
		}
		.slider-btn .theme-btn{
			color: <?php echo $banner_btn_text_color ?>;
		}
		.slider-btn .theme-btn.bg-none:hover {
			color: <?php echo $banner_btn_text_color ?> !important;
		}
		.hero-area .slider-items::after {
		    background: <?php echo $overlay_first_color ?>;
		    /* Old browsers */
		    background: -moz-linear-gradient(left, <?php echo $overlay_first_color ?> 0%, <?php echo $overlay_second_color ?> 84%, <?php echo $overlay_second_color ?> 100%);
		    /* FF3.6-15 */
		    background: -webkit-linear-gradient(left, <?php echo $overlay_first_color ?> 0%, <?php echo $overlay_second_color ?> 84%, <?php echo $overlay_second_color ?> 100%);
		    /* Chrome10-25,Safari5.1-6 */
		    background: linear-gradient(to right, <?php echo $overlay_first_color ?> 0%, <?php echo $overlay_second_color ?> 84%, <?php echo $overlay_second_color ?> 100%);
		    /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
		    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='<?php echo $overlay_first_color ?>', endColorstr='<?php echo $overlay_second_color ?>', GradientType=1);
		}

		/*About Section*/
		.about-area::after {

        	background: rgba(0, 0, 0, 0) url("<?php echo $item_bg['url'] ?>") no-repeat scroll 0 0;
		}

		/*Subscribe Section*/
		.subscribe-area {
		    background-image: url("<?php the_field('subscribe_bg_img', 'option') ?>");

		}


		/*Footer Section*/
		<?php $footer_bg = get_field('footer_bg_img', 'option'); ?>

		.contact-area {
		    background-image: url("<?php echo $footer_bg['url']  ?>");
		}
		
		
		.page-area {
		    background-image: url("<?php echo $team_hero_section_bg['url'] ?>");
		}
		/*.page-area::after {
		    background: rgba(0, 0, 0, 0) linear-gradient(to right, <?php echo $team_overla_1st_color ?> 0%, <?php echo $team_overlay_2nd_color ?> 100%) repeat scroll 0 0;
		}*/

		/*About Page PopUp Video Area*/
		.pop-video {
		    background-image: url("<?php echo $popup_video_bg['url'] ?>");
		}
		
		/*Service Section ManageMent*/
		.service-bg-area::after {
    		background-image: url("<?php echo $hero_service_features_img['url'] ?>");
    	}

    </style>
<?php } 

add_action( 'wp_head', 'BizCola_Custom_style' );
 
?>