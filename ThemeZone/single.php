<?php 

get_header();

if (have_posts()) {
	while (have_posts()) {
 		the_post();

 		?>

 		<div class="container">
 			<div class="row">
 				<div class="col-md-6 title pt-5">
 					<a href=" <?php the_permalink(); ?>">
 						<h1> <?php the_title(); ?></h1>
 					</a>
 				</div>
 				<div class="col-md-6 pt-5">
 					<h3 class="angkor_color">Submited by: <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?>
 					</a></h3>
 					<h5 class="angkor_color">
 						<a href="<?php bloginfo('url'); ?>/<?php the_time('Y') ?>/<?php the_time('m') ?>/<?php the_time('j') ?>"><?php echo get_the_date(); ?></a>
 					</h5>
 					<h5 class="angkor_color"> <?php the_time(); ?></h5>
 				</div>
 				<div class="col-md-12 single_thumb_img">
 					<img class="" src="<?php echo  get_the_post_thumbnail_url(); ?>" alt="">
 				</div>
 				
 				<div class="col-md-12">
 					<p><?php the_content(); ?></p>
 					<?php comment_form(); ?>
 				</div>
 				<div class="col-md-12 comment_items">
 					<?php wp_list_comments(array(
						'per_page' => 8,
						'reverse_top_level' => false
					));?> 
 				</div>
 				<div class="col-md-12">
 					<?php echo paginate_comments_links(array(
			    		'prev_text' => __( '« Previous Comments', 'ThemeZone' ),
			    		'next_text' => __( 'Next Comments »', 'ThemeZone' )
					)); 




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

 <div class="container footer_category">
 	<div class="col-md-12"><?php wp_list_categories(); ?></div>
 </div>

 <?php wp_footer(); ?>



 
    <p>
    <input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
    <label for="author">Name <?php if ( $req ) echo "( required )"; ?></label>
    </p>
    
    <p>
    <input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
    <label for="email">Email ( <?php if ( $req ) echo "required, "; ?>never shared )</label>
    </p>
    
    <p>
    <input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
    <label for="url">Website</label>
    </p>