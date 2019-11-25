<?php 
/*
*Template Name: Tiny_slider

*/
?>
<?php get_header(); ?>
<?php
	if (have_posts()) {
		while (have_posts()) {
	 		the_post();
	 		?>
		 		<div class="container mb-5">
		 			<div class="row index_bg">
		 				<div class="col-md-12 title">
		 					<a href=" <?php the_permalink(); ?>">
		 						<h1 class="text-center"> <?php the_title(); ?></h1>
		 					</a>
		 				</div>
		 				<div class="col-md-4">
		 					<h5 class="angkor_color">
		 						<a href="<?php bloginfo('url'); ?>/<?php the_time('Y') ?>/<?php the_time('m') ?>/<?php the_time('j') ?>">
		 							<?php echo get_the_date(); ?>	
		 						</a>
		 					</h5>
		 					<h5 class="angkor_color">
		 						<?php the_time(); ?>
		 					</h5>
		 					<a class="author_name" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?>
		 					</a>
		 				</div>
		 				<div class="col-md-12">
		 					<?php the_content(); ?>
		 				</div>
		 			</div>
		 		</div>
	 		<?php	
	 	}
	}else {
	 	echo "you have no post";
		}
?>
<?php get_footer(); ?>