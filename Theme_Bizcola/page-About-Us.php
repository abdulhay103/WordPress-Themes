<?php get_header() ?>
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
                <style type="text/css">
                    
                </style>
                <?php
            endwhile;
        endif;
        ?>
    </div>
</section>

<!-- ============= About Us Area End =========== -->
    <!-- ============= Team Area Start =========== -->
<section class="team-area section-padding">
    <div class="container">
        <div class="row">
            <?php 
                $team_secondary_title = get_field('team_secondary_title','option');
                $team_secondary_content = get_field('team_secondary_content','option');
                $team_secodary_btn = get_field('team_secodary_btn','option');
            ?>
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
                        $team_members = get_field('team_member_realation', 'option');
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
                                                        while ( have_rows('member_social_media_info') ) : the_row();
                                                            $media_icon = get_sub_field('media_icon'); 
                                                            $social_link = get_sub_field('member_social_media_link'); ?>
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
                        endforeach; 
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ============= Team Area End =========== -->

<!-- ============= Subscribe Area Start =========== -->
<section class="subscribe-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <?php 
                        $header_text = get_field('subscribe_header_text', 'option');
                        $content_text = get_field('subscribe_content_text', 'option');
                        $subscribe_input_field = get_field('subscribe_input_field', 'option');
                    ?>
                    <h2 class="wow fadeInDown"><?php echo $header_text ?></h2>
                    <p class="wow fadeInUp"><?php echo $content_text ?></p>
                </div>
            </div>
            <div class="col-lg-8 offset-lg-2 wow bounceIn">
               <?php echo $subscribe_input_field ?>
            </div>
        </div>
    </div>
</section>
<!-- ============= Subscribe Area End =========== -->

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
    <!-- ============= pop video Clients Area Start =========== -->
    <div class="pop-video">
        <div class="container">
            <div class="row">
                <?php 
                    if( have_rows('bizcola_about_section', 'option') ):
                        while ( have_rows('bizcola_about_section', 'option') ) : the_row();
                            $popup_video_bg = get_sub_field('popup_videos_bg_img');
                            $popup_videos_text_content = get_sub_field('popup_videos_text_content');
                            $popup_videos_link = get_sub_field('popup_videos_link');
                        ?>
                        <div class="col-lg-8 offset-lg-2">
                            <div class="pop-video-content">
                                <p class="wow fadeInDown"><?php echo $popup_videos_text_content ?></p>
                                <a data-fancybox href="<?php echo $popup_videos_link ?>" class=" wow fadeInUp">
                                    <div class="vi">
                                        <div class="example-1"><i class="fas fa-play"></i></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php endwhile;
                endif; ?>
            </div>
        </div>
    </div>
    <!-- ============= pop video Clients Area End =========== -->
    <!-- ============= pop video Clients Area End =========== -->
    <?php 
    $project_section_title = get_field('project_section_title','option');
    $project_section_content = get_field('project_section_content','option') 
    ?>
    <section class="project-gallery-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading">
                        <h2 class=" wow fadeInDown"><?php $project_section_title ?></h2>
                        <p class=" wow fadeInUp"><?php $project_section_content ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12  wow fadeInDown">
                    <div class="photo-gallery owl-carousel">
                        <div class="photo-item">
                            <img src="assets/img/gallery/gallery-1.jpg" alt="portlio-image">
                        </div>
                        <div class="photo-item">
                            <img src="assets/img/gallery/gallery-2.jpg" alt="portlio-image">
                        </div>
                        <div class="photo-item">
                            <img src="assets/img/gallery/gallery-3.jpg" alt="portlio-image">
                        </div>
                        <div class="photo-item">
                            <img src="assets/img/gallery/gallery-1.jpg" alt="portlio-image">
                        </div>
                        <div class="photo-item">
                            <img src="assets/img/gallery/gallery-2.jpg" alt="portlio-image">
                        </div>
                        <div class="photo-item">
                            <img src="assets/img/gallery/gallery-3.jpg" alt="portlio-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============= pop video Clients Area End =========== -->
<?php get_footer() ?>