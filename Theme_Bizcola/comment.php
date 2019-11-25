
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