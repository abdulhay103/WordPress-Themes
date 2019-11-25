<?php 
/*
*Template Name: abir dhar

*/
?>

<?php get_header(); ?>

<div class="container">
	<div class="col-md-12 author_name_head bg-warning"><h1>Posts Of The Day!</h1></div>
</div>
<?php

if (have_posts()) {
	while (have_posts()) {
 		the_post();

 		?>

 		<div class="container mb-5">
 			<div class="row index_bg">
 				<div class="col-md-6">
 					<img class="thumb_img" src="<?php echo  get_the_post_thumbnail_url(); ?>" alt="Thambnail_Image">
 				</div>
 				<div class="col-md-6 title">
 					<a href=" <?php the_permalink(); ?>">
 						<h1> <?php the_title(); ?></h1>
 					</a>
 					<h5 class="angkor_color"> <a href="<?php bloginfo('url'); ?>/<?php the_time('Y') ?>/<?php the_time('m') ?>/<?php the_time('j') ?>"><?php echo get_the_date(); ?></a>
 					</h5>
 					<h5 class="angkor_color"> <?php the_time(); ?></h5>
 					<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?>
 					</a><br>
 					<p class="angkor_color">
 						<?php
 							$readmore = __('Read More...', 'ThemeZone');
 							$more = '<p><a href=" '.get_permalink().' "> '.$readmore.'</a></p>';
 							echo wp_trim_words( get_the_content(), 55, $more );
 						?>
 					</p>
 					<p class="angkor_color">Your another choice: <?php the_tags(); ?></p>
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

 <div class="container footer_category mb-1">
 	<div class="col-md-12"><?php wp_list_categories(); ?></div>
 </div>
<?php wp_footer(); ?>

 ?>