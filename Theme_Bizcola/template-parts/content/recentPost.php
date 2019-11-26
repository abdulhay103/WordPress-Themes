<div class="sm-post">
    <?php
        $blog_posts = new WP_Query( array( 'post_type' => 'blog', 'posts_per_page' => 3 ) );
        if ( $blog_posts->have_posts() ): while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>
            <a href="" class="sm-post-items  wow fadeInUp">
                <div class="zoom">
                    <?php the_post_thumbnail('thumbnail'); ?>
                </div>
                <p><?php echo wp_trim_words( get_the_content(), 10); ?></p>
            </a>
    <?php endwhile; endif; ?>
</div>