<?php get_header(); ?>
    <!-- ==========Page area start ========== -->
    <div class="page-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-content">
                        <h2><?php the_field('blog_details_title', 'option') ?></h2>
                        <ul>
                            <li><a href="index.php?page_id=233">Home - </a></li>
                            <li><a href="index.php?page_id=248">Blog - </a></li>
                            <li class="active"><a href="#">Blog Detail</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============= Page area end =========== -->
    <!-- *************** Blog Details Start *************** -->
    <section class="blog-details-page section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details">
                        <?php  if ( have_posts() ) : while ( have_posts() ) : the_post();
                            wpb_set_post_views(get_the_ID()); ?>

                        <h3 class="wow fadeInDown"><?php the_title(); ?></h3>
                        <div class="user-option wow fadeInUp">    
                            <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID','user_nicename')); ?>">
                                <div class="user">
                                    <h6><?php echo get_avatar( get_the_author_meta('ID')); ?></h6>
                                    <p><?php echo get_the_author_meta('display_name'); ?></p>
                                </div>
                            </a>
                            <a href="">
                                <div class="user">
                                    <h6><i class="fas fa-calendar-alt"></i></h6>
                                    <p><?php the_date(); ?></p>
                                </div>
                            </a>
                        </div>
                        <div class="blog-de-post">
                            <div class="zoom  wow fadeInUp">
                                <img src="<?php the_post_thumbnail_url(); ?>">
                            </div>
                            <p class="wow fadeInUp"><?php the_content(); ?></p>
                        </div>
                    <?php endwhile ; endif; ?>

                        <div class="next-pre-post wow fadeInUp">
                            <div class="pre-post">
                                <h6>Previous Post</h6>
                                <p><?php previous_post_link('%link'); ?></p>
                            </div>
                      
                            <div class="pre-post tx-right">
                                <h6>Next Post</h6>
                                <p><?php next_post_link('%link' ) ?></p>
                            </div>
                        </div>

                        <div class="post-shares  wow fadeInUp">
                            <ul>
                                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href=""><i class="fab fa-instagram"></i></a></li>
                                <li>40 Shares</li>
                            </ul>
                        </div>
                        <div class="post-tag  wow fadeInUp">
                            <div class="pagination">
                                <?php echo paginate_links( array(
                                        'prev_text' => __( '« Previous', 'BizCola' ),
                                        'next_text' => __( 'Next »', 'BizCola' ),
                                    ) ); ?>
                    </div>
                        </div>

                        <div class="comment-area wow fadeInUp">

                            <?php $commenter = wp_get_current_commenter(); ?>
                            <?php if ( 'open' == $post->comment_status ) : ?>
                            
                            <div id="respond">
                            
                                <h3><?php comment_form_title(); ?></h3>
                                
                                <?php cancel_comment_reply_link(); ?>
                                
                                <?php if ( get_option( 'comment_registration' ) && !$user_ID ) : ?>
                                
                                <p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
                                
                                <?php else : ?>
                                
                                <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
                                    <div class="input wow fadeInUp">
                                        <textarea name="comment" id="comment" cols="30" rows="8" placeholder="Comment*" tabindex="4"></textarea>
                                    </div>
                                
                                <?php if ( $user_ID ) : ?>
                                
                                <p>Logged in as <a href="<?php echo get_option( 'siteurl' ); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url( get_permalink() ); ?>" title="Log out of this account">Log out ?</a></p>
                                <?php else : ?>
                                <div class="input-50  wow fadeInUp">
                                    <div class="input">
                                        <input type="text" placeholder="Name*" name="author" id="author" value="<?php echo $commenter['comment_author']; ?>" tabindex="1">
                                    </div>
                                    <div class="input">
                                        <input type="email" placeholder="Email*" name="email" id="email" tabindex="2" value="<?php echo $commenter['comment_author_email']; ?>">
                                    </div>
                                </div>
                                <div class="input  wow fadeInUp">
                                    <input type="text" placeholder="Website" name="url" id="url" tabindex="3" value="<?php echo $commenter['comment_author_url']; ?>">
                                </div>
                                <div class="input checkbox">
                                    <label>
                                        <input class="wi-5" id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes" />
                                        <span>Save my name, email, and website in this browser for the next time I comment.</span>
                                    </label>
                                </div>
                                <?php endif; ?>
                                
                                <p><input name="submit" class="submit theme-btn  wow fadeInUp" type="submit" id="submit" tabindex="5" value="Submit" /></p>

                                <?php do_action( 'comment_form', $post->ID ); comment_id_fields(); ?>
                                
                                </form>
                                
                                <?php endif; // If registration required and not logged in ?>
                            </div>
                            
                            <?php endif; // If comments are open: delete this and the sky will fall on your head ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">

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

                    <?php dynamic_sidebar('sidebar-1'); ?>
g
                        <div class="popular-comment">
                            <h4 class="">Latest Comments</h4>
                            <?php
                            $comments = get_comments(array(
                                'post_id' => $post->ID,
                                'number' => '4' )); 
                            foreach ($comments as $comment) : ?>
                                <div class="popular-comment-items wow fadeInUp">
                                    <h5><span><i class="far fa-comment-dots"></i></span><?php echo $comment->comment_author; ?></h5>
                                    <p><?php echo $comment->comment_content; ?></p>
                                </div>                          
                            <?php endforeach; ?>
                        </div>
                        <div class="sm-post">
                            <a href="" class="sm-post-items  wow fadeInUp">
                                <div class="zoom">
                                    <img src="assets/img/blog-details/popular-post-5.jpg" alt="">
                                </div>
                                <p>Check Out New Trendy Smart
                                    Phones in Next Decade</p>
                            </a>
                            <a href="" class="sm-post-items  wow fadeInUp">
                                <div class="zoom">
                                    <img src="assets/img/blog-details/popular-post-6.jpg" alt="">
                                </div>
                                <p>Check Out New Trendy Smart
                                    Phones in Next Decade</p>
                            </a>
                            <a href="" class="sm-post-items  wow fadeInUp">
                                <div class="zoom">
                                    <img src="assets/img/blog-details/popular-post-7.jpg" alt="">
                                </div>
                                <p>Check Out New Trendy Smart
                                    Phones in Next Decade</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- *************** Blog Details  End *************** -->
<?php get_footer(); ?>