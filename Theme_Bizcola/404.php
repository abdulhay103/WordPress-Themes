<?php
/**
 * The template for displaying 404 pages (not found)
 * @package WordPress
 * @subpackage BizCola
 * @since 1.0.0
 */
get_header();
?>

<div class="error-404 not-found">
	<div class="page-content">
		<h1 class="text-center pt-5"><?php _e( 'Oops!Nothing Has Found. <br> This is 404 Page', 'BizCola' ); ?></h1>
		<div class="text-center mt-3">
			<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'BizCola' ); ?></p>
		<?php get_search_form(); ?>
		</div>
	</div>
</div>

<?php get_footer();
