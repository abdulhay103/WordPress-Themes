
<?php  // print_r(get_option( 'sidebars_widgets' )); 

    if (have_rows('social_icons_repeater','widget_bizcola_Social_icon_widget-2')): 
    	while (have_rows('social_icons_repeater','widget_bizcola_Social_icon_widget-2')) : the_row(); ?>
    		<li>
                <a href="<?php the_sub_field('social_media_url'); ?>"><?php the_sub_field('icon'); ?></a>
            </li>
    	<?php endwhile ?>
    <?php endif ?>