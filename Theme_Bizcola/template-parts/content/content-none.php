<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage BizCola
 * @since 1.0.0
 */
?>

<div class="error-404 not-found">
	<div class="page-content">
		<h1 class="text-center pt-5"><?php _e( 'Oops!Nothing Has Found. <br> This is page.none Page', 'BizCola' ); ?></h1>
		<div class="text-center mt-3">
			<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'BizCola' ); ?></p>
		<?php get_search_form(); ?>
		</div>
	</div>
</div>