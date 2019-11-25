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