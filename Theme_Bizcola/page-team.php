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
<!-- ============= Team Area Start =========== -->
<section class="team-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <?php 
                    $team_secondary_title = get_field('team_secondary_title','option');
                    $team_secondary_content = get_field('team_secondary_content','option');
                    $team_secodary_btn = get_field('team_secodary_btn','option');
                ?>
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
<?php get_footer() ?>

    <script>
        //isotop filtering
        $('#container').imagesLoaded(function() {
            $('.filter-button-group').on('click', 'li', function() {
                var filterValue = $(this).attr('data-filter');
                $grid.isotope({
                    filter: filterValue
                });
            });
            var $grid = $('.grid').isotope({
                itemSelector: '.grid-item',
                percentPosition: true,
                masonry: {
                    // use outer width of grid-sizer for columnWidth
                    columnWidth: 1
                }
            })
        });

        // filtering li active
        $('.filter-btn').on("click", function() {
            if ($(this).hasClass('active-btn')) {
                $(this).removeClass('active-btn');
            } else {
                $(this).addClass('active-btn');
                $(this).siblings().removeClass('active-btn');
            }
        });

        $('#container-about').imagesLoaded(function() {
            $('.filter-button-group').on('click', 'li', function() {
                var filterValue = $(this).attr('data-filter');
                $grid.isotope({
                    filter: filterValue
                });
            });
            var $grid = $('.grid').isotope({
                itemSelector: '.grid-item',
                percentPosition: true,
                masonry: {
                    // use outer width of grid-sizer for columnWidth
                    columnWidth: 1
                }
            })
        });
    </script>