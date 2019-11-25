<?php get_header(); ?>
<!-- ==========Page area start ========== -->
<div class="page-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php if (!empty(get_the_title())): ?>
                    <div class="page-content">
                    <h2 class="wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;"><?php echo wp_title( $sep = '') ?></h2>
                    <ul class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <li><a href="<?php echo get_home_url(  ) ?>">Home - </a></li>
                        <li class="active"><a href=""><?php wp_title( $sep = '') ?></a></li>
                    </ul>
                </div>
                <?php endif ?>
            </div>
        </div>
    </div>
</div>
<!-- ============= Page area end =========== -->

<!-- *************** Blog Details Start *************** -->
<section class="blog-page section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <?php
                    $blog_posts = new WP_Query( array( 'post_type' => 'blog', 'posts_per_page' => 2 ) );
                    if ( $blog_posts->have_posts() ):
                        while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); 
                ?>
                
                    <!--Colonne Contenuto -->
                    <div class="blog-page-content">
                        <h3 class="wow fadeInDown"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <div class="user-option wow fadeInUp">
                            <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID','user_nicename')); ?>">
                                <div class="user">
                                    <h6><img src="<?php echo get_avatar_url( get_the_author_meta( 'ID'), 32 ); ?>"></h6>
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
                        <div class="blog-de-post">
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
                            <p><?php echo wp_trim_words( get_the_content(), 25); ?></p>
                            <a class="theme-btn mt-30" href="<?php the_permalink() ?>">Read More</a>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <div class="pagination">
                        <?php the_posts_pagination(); ?>
                    </div>
                <?php endif; ?>
 
                    <!-- <ul>
                        <li><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href=""><span>&#9679; &#9679; &#9679;</span></a></li>
                        <li><a href=""><i class="fas fa-angle-double-right"></i></a></li>
                    </ul> -->
            </div>


            <div class="col-lg-4">
                <div class="sidebar-right">

                    <div class="popular-post">
                        <h4 class=" wow fadeInUp">Most Popular</h4>
                        <?php $popular_post = new WP_Query( array(
                            'post_type'=>'blog', 
                            'posts_per_page' => 4, 
                            'meta_key' => 'wpb_post_views_count', 
                            'orderby' => 'meta_value_num', 
                            'order' => 'DESC'  ) );

                        while ($popular_post->have_posts()) : $popular_post->the_post(); ?>
                            <a href="">
                                <div class="popular-post-single  wow fadeInUp">
                                    <div class="popular-post-content">
                                        <h5><?php the_title(); ?></h5>
                                        <p><?php echo wp_trim_words( get_the_content(), 10); ?></p>
                                    </div>
                                    <div class="popular-post-img">
                                        <div class="zoom">
                                            <?php the_post_thumbnail('thumbnail'); ?>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        <?php endwhile ; ?>
                    </div>

                    <div class="follow-us">
                        <h4 class=" wow fadeInUp">Follow Us</h4>
                        <div class="footer-follow wow fadeInUp">
                            <p>
                                Save my name, email, and website in this browser for the next time I comment.
                            </p>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <h4 class=" wow fadeInUp">Newsletter</h4>
                        <p class=" wow fadeInUp">Fill your email below to subscribe to my newsletter</p>
                        <form action="index.html" class="subscrib">
                            <div class="input wow fadeInUp">
                                <input type="email" placeholder="Email">
                            </div>
                            <div class="input mb-0 wow fadeInUp">
                                <input type="text" placeholder="Subscribe" class="submit theme-btn" value="Subscribe">
                            </div>
                        </form>
                    </div>


                    <div class="popular-comment">
                        <h4 class="">Latest Comments</h4>

                        <?php $recent_comments= get_comments(array('number'=>'4'));
                            foreach ($recent_comments as $comment) : ?>
                                <div class="popular-comment-items  wow fadeInUp">
                                    <h5><span><i class="far fa-comment-dots"></i></span><?php echo $comment->comment_author; ?></h5>
                                    <p><?php echo $comment->comment_content; ?></p>
                                </div>
                        <?php endforeach; ?>
                    </div>


                    <div class="sm-post">
                        <?php
                            $blog_posts = new WP_Query( array( 'post_type' => 'blog', 'posts_per_page' => 3 ) );
                            if ( $blog_posts->have_posts() ): while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); 
                        ?>
                        <a href="" class="sm-post-items  wow fadeInUp">
                            <div class="zoom">
                                <?php the_post_thumbnail('thumbnail'); ?>
                            </div>
                            <p><?php echo wp_trim_words( get_the_content(), 10); ?></p>
                        </a>
                    <?php endwhile; endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- *************** Blog Details  End *************** -->
<?php get_footer(); ?>