
<?php // print_r(get_option( 'sidebars_widgets' )); ?>
<?php 
	$following_title = get_field('following_title','widget_bizcola_widget-3');
	$following_content = get_field('following_content','widget_bizcola_widget-3');
	$social_media_info = get_field('social_media_info','widget_bizcola_widget-3');
	$newsletter_title = get_field('newsletter_title','widget_bizcola_widget-3');
	$newsletter_content = get_field('newsletter_content','widget_bizcola_widget-3');
 ?>
<div class="follow-us">
    <h4 class=" wow fadeInUp"><?php echo $following_title; ?></h4>
        <div class="footer-follow wow fadeInUp">
            <p><?php echo $following_content ?></p>
        </div>
        <div class="Social_follow">
            <ul>
                <?php get_template_part( 'template-parts/content/socialIcon' ); ?>  
            </ul>
        </div>
        <h4 class=" wow fadeInUp"><?php echo $newsletter_title ?></h4>
        <p class=" wow fadeInUp"><?php echo $newsletter_content ?></p>

        <!-- get subscriber form -->
        <?php echo do_shortcode('[contact-form-7 id="343" title="sidebar Subscribe Form"]') ?>
</div>