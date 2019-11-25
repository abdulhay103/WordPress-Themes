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
    <!-- ============= Service-top area Start =========== -->

    <section class="service-bg-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <div class="service-page-top">
                        <?php 
                            $service_hero_section_field = get_field('service_hero_section', 'option');
                            $hero_service_features_img = $service_hero_section_field['hero_service_features_img'];
                            $hero_service_title = $service_hero_section_field['hero_service_title'];
                            $hero_service_content = $service_hero_section_field['hero_service_content'];
                            $hero_service_button = $service_hero_section_field['hero_service_button'];

                        ?>
                        <h3 class="wow fadeInDown"><?php echo $hero_service_title ?></h3>
                        <p class="wow fadeInUp"><?php echo $hero_service_content ?></p>
                        <a class="theme-btn mt-30 wow fadeInRight" href="index.php?page_id=246"><?php echo $hero_service_button ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============= Service-top area Start =========== -->
    <!-- ============= Service  Area Start =========== -->
    <section class="service-page section-padding">
        <div class="container">
            <div class="row">
                <?php
                    $service_secondary_section_field = get_field('service_secondary_section_options', 'option');
                    $service_secondary_title = $service_secondary_section_field['service_secondary_title'];
                    $service_secondary_content = $service_secondary_section_field['service_secondary_content'];
                ?>
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2 class="wow fadeInDown"><?php echo $service_secondary_title ?></h2>
                        <p class="wow fadeInUp"><?php echo $service_secondary_content ?></p>
                    </div>
                </div>
            </div>
            <div class="row  text-center">
                <?php
                    $all_services = get_field('all_services', 'option');
                    foreach ($all_services as $post) : ?>
                        <?php setup_postdata($post); ?>
                        <div class="col-lg-6 wow fadeInRight">
                            <div class="service-page-items">
                                <div class="zoom">
                                    <img src="<?php echo the_post_thumbnail_url(); ?>" alt="service">
                                </div>
                                <div class="service-page-content">
                                    <h4><?php the_title() ?></h4>
                                    <?php
                                        $readmore = __('Read More...', 'BizCola');
                                        $more = '<a href=" '.get_permalink().' "> '.$readmore.'</a>';
                                        echo wp_trim_words( get_the_content(), 12, $more );
                                    ?>
                                </div>
                            </div>
                        </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- ============= Service  Area End =========== -->
<?php get_footer() ?>