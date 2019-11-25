<?php
/**
 * The template for displaying the footer
 * @package WordPress
 * @subpackage Theme_BizCola
 * @since 1.0.0
 */

?>

<!-- ================= Contact Area Start =============== -->
    <section class="contact-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 wow fadeInRight">
                    <div class="contact-content">
                        <?php  
                            $contact_info_title = get_field('contact_info_title', 'option');
                            $contact_info_content_text = get_field('contact_info_content_text', 'option');
                        ?>
                        <h4><?php echo $contact_info_title ?></h4>
                        <p><?php echo $contact_info_content_text ?></p>
                        <?php
                            if (have_rows('immediate_contact_info', 'option')) :
                                while (have_rows('immediate_contact_info', 'option')) : the_row() ; ?>
                                    <h6><?php the_sub_field('single_contact_info');  ?></h6>  <?php  
                                endwhile;
                            endif; 
                        ?>
                        <div class="footer-socail">
                            <ul>
                                <?php
                                    if (have_rows('social_media_contact_info', 'option')) :
                                        while (have_rows('social_media_contact_info', 'option')) : the_row() ;
                                            $social_media_icon = get_sub_field('social_media_icon');
                                            $social_media_link = get_sub_field('social_media_link'); ?>

                                            <li><a href="<?php echo $social_media_link['url'] ?>"><?php echo $social_media_icon ?></a></li> <?php
                                        endwhile;
                                    endif; 
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 wow fadeInLeft">
                    <div class="contact-form">
                        <?php the_field('contact_from_7_footer','option') ?>   
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ================= Contact Area End =============== -->
    <footer>
        <p><?php the_field('footer_2', 'option') ?></p>
    </footer>

<?php wp_footer(); ?>

</body>
</html>
