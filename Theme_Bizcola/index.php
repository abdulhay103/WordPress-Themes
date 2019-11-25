<?php
/**
 * The main template file
 * @package WordPress
 * @subpackage BizCola
 * @since 1.0.0
 */

get_header();
?>
		<?php
		$blog_posts = new WP_Query( array( 'post_type' => 'blog') );
		if ($blog_posts-> have_posts() ) {

			// Load posts loop.
			while ($blog_posts-> have_posts() ) {
				$blog_posts->the_post();
				get_template_part( 'template-parts/content/content' );
			}

		} else {

			// If no content, include the "No posts found" template.
			get_template_part( 'template-parts/content/content', 'none' );

		}
		?>
<?php
get_footer();
