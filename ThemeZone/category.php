<?php

get_header();


if (have_posts()) {
	while (have_posts()) {
 		the_post();

 		?>

 		<div class="container">
 			<div class="row">
 				<div class="col-md-12 category_title">
 					<a href=" <?php the_permalink(); ?>">
 						<h1> <?php the_title(); ?></h1>
 					</a>
 				</div>
 				<div class="col-md-4">
 					<img class="thumb_img" src="<?php echo  get_the_post_thumbnail_url(); ?>" alt="Thambnail_Image">
 				</div>
 				<div class="col-md-3 mt-2 title">
 					<h5 class="angkor_color">
 						<a href="<?php bloginfo('url'); ?>/<?php the_time('Y') ?>/<?php the_time('m') ?>/<?php the_time('j') ?>"><?php echo get_the_date(); ?></a>
 					</h5>
 					<h5 class="angkor_color"> <?php the_time(); ?></h5>
 					<p>Submited by: <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?>
 					</a></p>
 				</div>
 				<div class="col-md-5 mt-2 angkor_color">
 					<?php
 						$readmore = __('Read More...', 'ThemeZone');
 						$more = '<p><a href=" '.get_permalink().' "> '.$readmore.'</a></p>';
 						echo wp_trim_words( get_the_content(), 55, $more );
 					?>
 				</div>
 			</div>
 		</div>


 		<?php	
 	}


 }else {
 	echo "you have no post";
 }
?>

<div class="container">
 	<div class="col-md-12 mb-3 text-right">
 		<?php echo paginate_links( array(
			    'prev_text' => __( '« Previous', 'ThemeZone' ),
			    'next_text' => __( 'Next »', 'ThemeZone' ),
			) ); ?>
 	</div>
 </div>
 
 <div class="container footer_category">
 	<div class="col-md-12"><?php wp_list_categories(); ?></div>
 </div>
<?php wp_footer(); ?>
