<?php
/**
 * The template for displaying 404 pages (not found)
 * @package WordPress
 * @subpackage BizCola
 * @since 1.0.0
 */

get_header();
?>

<section class="blog-page section-padding">
    <div class="container">
        <div class="row">
                <?php
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $loop = new WP_Query( array( 'post_type' => 'blog',
                        'posts_per_page' => 1,
                        'paged'          => $paged )
                );
                if ( $loop->have_posts() ):
                    while ( $loop->have_posts() ) : $loop->the_post(); ?>
	                    <!--Colonne Contenuto -->
	                    <div class="blog-page-content">
	                    	<div class="row">
		                        <h3 class="wow fadeInDown"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		                        <div class="blog-de-post col-lg-6">
		                            <div class="zoom  wow fadeInUp">
		                                <?php 
		                                    $thaumbnail_img = get_the_post_thumbnail_url();
		                                    $alt = 'Empty Thumbnail Image';
		                                ?>
		                                <img src=" <?php echo $thaumbnail_img ?>" alt="<?php if(empty($thaumbnail_img)): echo $alt; endif ?>">
		                            </div>
		                            <div class="post-tag  wow fadeInUp">
		                                <ul>
		                                    <?php 
		                                        $categories = get_the_category();
		                                        if ($categories) :
		                                            foreach ($categories as $category) : ?>
		                                                <li><a href="<?php the_permalink(); ?>"><?php echo $category->name; ?></a></li>
		                                            <?php endforeach;
		                                        endif;
		                                    ?>
		                                </ul>
		                            </div>
		                        </div>
		                        <div class="user-option wow fadeInUp col-lg-6">
		                            <div class="row">
		                            	<div class="col-md-12">
		                            		<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID','user_nicename')); ?>">
			                                <div class="user">
			                                    <h6><img src="<?php echo get_avatar_url( get_the_author_meta( 'ID') ); ?>"></h6>
			                                    <p><?php echo get_the_author(); ?></p>
			                                </div>
			                            </a>
			                            <a href="<?php the_permalink(); ?>">
			                                <div class="user">
			                                    <h6><i class="fas fa-calendar-alt"></i></h6>
			                                    <p><?php the_date( 'F j, Y' ); ?></p>
			                                </div>
			                            </a>
		                            	</div>
			                            <p><?php echo wp_trim_words( get_the_content(), 25); ?></p>
			                            <a class="theme-btn mt-30" href="<?php the_permalink() ?>">Read More</a>
			                        </div>
		                        </div>
		                    </div>
                		</div>
                    <?php endwhile; ?>
                    <div class="pagination">
                        <?php // pagination_bar( $loop ); ?>
                    </div>
                <?php wp_reset_postdata();
                endif; ?>
                    <!-- <ul>
                        <li><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href=""><span>&#9679; &#9679; &#9679;</span></a></li>
                        <li><a href=""><i class="fas fa-angle-double-right"></i></a></li>
                    </ul> -->
        </div>
    </div>
</section>
<?php get_footer();