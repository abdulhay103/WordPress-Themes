

<?php get_header(); ?>

<div class="container">
   <div class="row author_details">
   <div class="col-md-12 author_name_head">
      <h1>All Post Are Submited By This Author</h1>
   </div>
      <div class="col-md-4 avatar_img">
         <?php echo get_avatar( get_the_author_meta('email'), '300' ); ?>
      </div>
      <div class="col-md-8">
         <h4>Author Details</h4>
         <p>Name: <?php esc_html(the_author_meta('display_name')); ?></p>
         <p>Email: <?php esc_html(the_author_meta('user_email')); ?></p>
         <h4>Author Bio</h4>
         <p><?php esc_textarea(the_author_meta('description')); ?></p>
      </div>
      <div class="col-md-">
      	
      </div>
   </div>
</div>

<?php
   if (have_posts()) {
   
   	while (have_posts()) {
    		the_post()
   
    		?>
<div class="container mb-3">
   <div class="row author_bg">
      <div class="col-md-3"><img class="thumb_img" src="<?php echo  get_the_post_thumbnail_url(); ?>" alt="Thambnail_Image"></div>
      <div class="col-md-3">
         <h4><?php the_title(); ?></h4>
         <h6 class="angkor_color">
            <a href="<?php bloginfo('url'); ?>/<?php the_time('Y') ?>/<?php the_time('m') ?>/<?php the_time('j') ?>"><?php echo get_the_date(); ?></a>
         </h6>
         <h6 class="angkor_color"><?php the_time(); ?></h6>
      </div>
      <div class="col-md-6 angkor_color">
         <?php
            $readmore = __('Read More...', 'ThemeZone');
            $more = '<p><a href=" '.get_permalink().' "> '.$readmore.'</a></p>';
            echo wp_trim_words( get_the_content(), 55, $more );
            ?>
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

<?php	get_footer();?>

