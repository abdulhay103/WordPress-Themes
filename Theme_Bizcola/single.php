<?php
/**
 * The main template file
 * @package WordPress
 * @subpackage BizCola
 * @since 1.0.0
 */
?>
<?php get_header(); ?>
<section class="section-padding">
	<?php
		the_title( );
		previous_post_link('%link');
                    next_posts_link('%link');
                 $p = paginate_links();
                 print_r($p);
	?>
</section>	
<?php get_footer(); ?>