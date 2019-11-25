<?php
/**
 * Template part for displaying posts
 * @package WordPress
 * @subpackage Theme_BizCola
 * @since 1.0.0
 */

?>
<!-- ==========hero area start ========== -->
<section class="hero-area">
    <div class="slider owl-carousel">
    	<?php
    	if( have_rows('bizcola_banner_section', 'option') ):
		   	while( have_rows('bizcola_banner_section', 'option') ): the_row();
		   		if( have_rows('banner_slider') ):
		   			while( have_rows('banner_slider') ): the_row(); 
		        	$slider_bg = get_sub_field('background_image');
		        	$slider_header_text = get_sub_field('slider_header_text');
		        	$slider_content_text = get_sub_field('slider_content_text');
		        	$slider_left_btn = get_sub_field('slider_left_btn');
		        	$slider_right_btn = get_sub_field('slider_right_btn');
		        		?>
		            <div class="slider-items">
		                <div class="slider-img">
		                    <img src="<?php echo $slider_bg['url']; ?>" alt="<?php echo $slider_bg['alt']; ?>" />
		                </div>
		                <div class="container">
		                    <div class="row">
		                        <div class="col-lg-10">
		                            <div class="slider-content">
		                                <h2><?php echo $slider_header_text ?></h2>
		                                <p><?php echo $slider_content_text ?></p>
		                                <div class="slider-btn">
		                                    <a class="theme-btn btn-left" href="<?php echo $slider_left_btn['url'] ?>"><?php echo $slider_left_btn['title'] ?></a>
		                                    <a class="theme-btn bg-none btn-right" href="<?php echo $slider_right_btn['url'] ?>"><?php echo $slider_right_btn['title'] ?></a>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		    		<?php 
					endwhile;
				endif; 
			endwhile; 
		endif; ?>
    </div>
</section>
<!-- ============= hero area end =========== -->
<!-- ============= About Us Area Start =========== -->
<section class="about-area section-padding">
    <div class="container">
    	<?php
    	if( have_rows('bizcola_about_section', 'option') ):
	   		while( have_rows('bizcola_about_section', 'option') ): the_row();
	   			$features_img = get_sub_field('about_fetures_image');
	   			$fetures_video = get_sub_field('about_fetures_video_link');
	   			$about_header_text = get_sub_field('about_header_text');
	   			$about_title = get_sub_field('about_title');
	   			$about_content = get_sub_field('about_content');
	   			$about_btn = get_sub_field('about_btn');
	   			?>

        		<div class="row">
	                <div class="col-lg-5 wow fadeInLeft">
	                    <div class="video-area">
	                        <img src="<?php echo $features_img['url'] ?>" alt="<?php echo $features_img['alt'] ?>">
	                        <a data-fancybox href="<?php echo $fetures_video ?>">
	                            <div class="vi">
	                                <div class="example-1"><i class="fas fa-play"></i></div>
	                            </div>
	                        </a>
	                    </div>
	                </div>
	                <div class="col-lg-7 wow fadeInRight">
	                    <div class="about-heading">
	                        <h2 class="wow fadeInDown"><?php echo $about_header_text ?></h2>
	                        <h4 class="wow fadeInUp"><?php echo $about_title ?></h4>
	                        <p><?php echo $about_content ?></p>
	                        <a href="index.php?page_id=231" class="theme-btn  wow fadeInUp"><?php echo $about_btn ?></a>
	                    </div>
	                </div>
        		</div>
	            <div class="row ml-270">
	            	<?php
            		if( have_rows('about_items') ):
	   					while( have_rows('about_items') ): the_row();
	   						$item_icon = get_sub_field('items_image');
	   						$item_name = get_sub_field('item_name');
	   						$item_details = get_sub_field('item_details');
	   						?>
			                <div class="col-md-4 wow fadeInLeft" data-wow-delay="0.2s">
			                    <div class="about-item">
			                        <div class="about-itm-heading">
			                            <div class="zoom">
			                                <img src="<?php echo $item_icon['url'] ?>" alt="<?php echo $item_icon['alt'] ?>">
			                            </div>
			                            <h4><?php echo $item_name ?></h4>
			                        </div>
			                        <p><?php echo $item_details ?></p>
			                    </div>
			                </div>
			                <?php
	   					endwhile;
	   				endif; 
	            	?>
	            </div>
				<?php
	   		endwhile;
	   	endif;
    	?>
    </div>
</section>

<!-- ============= About Us Area End =========== -->
<!-- ============= Our Services Area Start =========== -->
<section class="service-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                	<?php
            		if( have_rows('service_secondary_section_options', 'option') ):
	   					while( have_rows('service_secondary_section_options', 'option') ): the_row();
	   						$service_secondary_title = get_sub_field('service_secondary_title');
	   						$service_secondary_content = get_sub_field('service_secondary_content');
	   						?>
			                <h2 class="wow fadeInDown"><?php echo $service_secondary_title ?></h2>
                    		<p class="wow fadeInUp"><?php echo $service_secondary_content ?></p>
			                <?php
	   					endwhile;
	   				endif; 
	            	?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="service-active owl-carousel">
                    	<?php
		   					$all_services = get_field('all_services', 'option');
		   					foreach ($all_services as $post) : ?>
		   						<?php setup_postdata($post); ?>
                    			<div class="service-items">
		                            <div class="zoom">
		                                <img src="<?php echo the_post_thumbnail_url(); ?>" alt="service">
		                            </div>
		                            <div class="service-item">
		                                <div class="zoom">
		                                	<?php $service_icon = get_field('service_icon') ?>
		                                    <img src="<?php echo $service_icon['url'] ?>" alt="<?php echo $service_icon['alt'] ?>">
		                                </div>
		                                <div class="service-item-content">
		                                    <h4><?php the_title() ?></h4>
				                            <?php
						 						$readmore = __('Read More...', 'BizCola');
						 						$more = '<a href=" '.get_permalink().' "> '.$readmore.'</a>';
						 						echo wp_trim_words( get_the_content(), 12, $more );
						 					?>
		                                </div>
		                            </div>
                    			</div>
				            <?php endforeach; 
				        ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ============= Our Services Area End =========== -->

<!-- ============= Subscribe Area Start =========== -->
<section class="subscribe-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                	<?php 
                		$header_text = get_field('subscribe_header_text', 'option');
                		$content_text = get_field('subscribe_content_text', 'option');
                	?>
                    <h2 class="wow fadeInDown"><?php echo $header_text ?></h2>
                    <p class="wow fadeInUp"><?php echo $content_text ?></p>
                </div>
            </div>
            <!-- get subscriber form -->
            <?php get_template_part( 'template-parts/content/subscriber' ); ?>
        </div>
    </div>
</section>
<!-- ============= Subscribe Area End =========== -->
    <!-- portfolio area start -->
  <?php $project_section_title = get_field('project_section_title','option') ?>
  <?php $project_section_content = get_field('project_section_content','option') ?>
  <section class="portfolio-area section-padding">
        <div class="container" id="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <div class="section-heading">
                        <h2 class="wow fadeInDown"><?php echo $project_section_title ?></h2>
                        <p class="wow fadeInUp"><?php echo $project_section_content ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 wow fadeInDown">
                    <div class="filtering-btn">
                        <ul class="filter-button-group">
                            <li class="filter-btn active-btn" data-filter="*">All</li>
                            <?php
                                 $categoris = get_terms( 'custom_category' );
                                foreach ($categoris as $cat) {
                                    ?>
                                    <li class="filter-btn" data-filter=".<?php echo $cat->slug; ?>"><?php echo $cat->name; ?></li>
                                    <?php
                                }
                             ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row grid">
                <?php 

                    query_posts( array( 'post_type' => 'projects','posts_per_page' => '10' ));
                    if ( have_posts() ) : while ( have_posts() ) : the_post();
                    $terms = get_the_terms( get_the_ID(), 'custom_category' ); 
                    if ( $terms && ! is_wp_error( $terms ) ) : 
                        $draught_links = array();
                        foreach ( $terms as $term ) {
                            $draught_links[] = $term->slug; 
                        }                  
                        $on_draught = join( " ", $draught_links );
                ?>
                        <div class="col-lg-4 col-md-5 grid-item grid-item--width2 wow <?php echo $on_draught ?> fadeInUp">
                    <div class="port-img">
                        <a href="<?php the_post_thumbnail_url( ) ?>" data-fancybox="images" data-caption="image 2">
                            <img src="<?php the_post_thumbnail_url( ) ?>" alt="portlio-image">
                        </a>
                    </div>
                </div>
                        <?php endif;
                    endwhile; endif; wp_reset_query();
                 ?>
                
            </div>
        </div>
    </section>
<!-- project area end -->

<!-- ============= Happy Clients Area Start =========== -->
<section class="clients-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading wow fadeInDown">
                    <h2><?php echo get_field('client_section_title', 'option')?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="clients-active owl-carousel">
                	<?php
						if( have_rows('client_details', 'option') ):
						    while ( have_rows('client_details', 'option') ) : the_row();
						    	$clients_image = get_sub_field('clients_image');
						    	$clients_speech = get_sub_field('clients_speech');
						    	$clients_name = get_sub_field('clients_name');
						    	$clients_designation = get_sub_field('clients_designation');

						    	?>
		                        <div class="client-item  wow fadeInUp">
		                            <div class="zoom">
		                                <img src="<?php echo $clients_image['url'] ?>" alt="<?php echo $clients_image['alt'] ?>">
		                            </div>
		                            <div class="client-content">
		                                <p><?php echo $clients_speech ?></p>
		                                <h4><?php echo $clients_name ?></h4>
		                                <h5><?php echo $clients_designation ?></h5>
		                            </div>
		                        </div>
		                        <?php
						    endwhile;
						endif;
					?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ============= SHappy Clients Area End =========== -->

<!-- ============= Team Area Start =========== -->
<?php 
    $team_secondary_title = get_field('team_secondary_title','option');
    $team_secondary_content = get_field('team_secondary_content','option');
    $team_secodary_btn = get_field('team_secodary_btn','option');
    $team_members = get_field('team_member_realation', 'option');
    $media_icon = get_sub_field('media_icon'); 
    $social_link = get_sub_field('member_social_media_link');
?>

<?php if (!empty($team_members)) :?>
<section class="team-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-heading team-heading">
                    <h2 class=" wow fadeInDown"><?php echo $team_secondary_title ?></h2>
                    <p class=" wow fadeInUp"><?php echo $team_secondary_content ?></p>
                    <a class="theme-btn mt-30  wow fadeInRight" href="<?php echo $team_secodary_btn['url'] ?>"><?php echo $team_secodary_btn['title'] ?></a>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="row">
                	<?php 
            		foreach ($team_members as $post) : ?>
	   					<?php setup_postdata($post); ?>

                        <div class="col-md-6 wow fadeInRight">
                            <div class="single-team">

                                <div class="img-hidden">
                                    <img src="<?php echo the_post_thumbnail_url();?>" alt="team">
                                </div>

                                <div class="team-content">

                                    <h3><?php the_title() ?></h3>

                                    <?php if (get_field('team_members_bio_field') == 'Add Member Bio') : ?>
                                    	<p><?php the_field('member_bio_field') ?></p>	
									<?php endif ?>

                                    <p><?php the_field('member_designation') ?></p>

                                    <div class="team-social">
                                        <ul>
                                        	<?php
												if( have_rows('member_social_media_info') ):
												    while ( have_rows('member_social_media_info') ) : the_row(); ?>
                                           				<li><a href="<?php echo $social_link['url'] ?>"><?php echo $media_icon ?></a></li> <?php
												    endwhile;
												endif;
											?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif ?>
<!-- ============= Team Area End =========== -->

<!-- ================= Blog  Area Start =============== -->
<?php $blog_posts = get_field('recent_blogs', 'option'); ?>
<?php if (!empty($blog_posts)) : ?>

<section class="recent-blog-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading mb-30 text-center">
                    <h2 class="wow fadeInDown"><?php the_field('blog_page_secondary_section_title', 'option') ?></h2>
                    <p class="wow fadeInUp"><?php the_field('blog_page_secondary_section_content_text', 'option') ?></p>
                </div>
            </div>
        </div>
        <div class="row">
        	<?php 
    		foreach ($blog_posts as $post) : ?>
					<?php setup_postdata($post); ?>
	                <div class="col-md-6 dis-flex wow fadeInLeft">
	                    <div class="single-recent-post">
	                        <div class="img-hidden">
	                            <img src="<?php echo the_post_thumbnail_url();?>" alt="blog">
	                        </div>
	                        <div class="single-blog-content">
	                            <div class="single-blog-rating">
	                                <ul>
	                                    <li><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID','user_nicename')); ?>"><span class="author"><?php echo get_avatar( get_the_author_meta('ID')); ?></span></li>
	               						<li><a href="<?php bloginfo('url'); ?>"><span><i class="far fa-clock"></i></span><?php the_time('g:i a'); ?></a></li>
	                                    <li><a href="<?php bloginfo('url'); ?>"><span><i class="far fa-calendar-alt"></i></span><?php the_date( 'M j, Y' ); ?></a></li>
	                                </ul>
	                            </div>
	                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <?php
			 						$readmore = __('Read More...', 'BizCola');
			 						$more = '<a href=" '.get_permalink().' "> '.$readmore.'</a>';
			 						echo wp_trim_words( get_the_content(), 15, $more );
			 					?>
	                         </div>
	                     </div>
	                 </div>
                <?php endforeach; ?>
		     </div>
        </div>
    </div>
</section>
<?php endif ?>

<!-- ================= Blog  Area End =============== -->
