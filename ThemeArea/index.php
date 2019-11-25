<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Digital Agency Template</title>
    <?php wp_head(); ?>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="blue">
                <img src="<?php echo get_template_directory_uri();?>/img/header-shepe-blue.png" alt="">
            </div>
            <div class="white">
                <img src="<?php echo get_template_directory_uri();?>/img/header-shepe-white.png" alt="">
            </div>
            <div class="container">
                <img class="shepe1" src="<?php echo get_template_directory_uri();?>/img/shepe1.png" alt="">
                <img class="shepe2" src="<?php echo get_template_directory_uri();?>/img/shepe2.png" alt="">
                <img class="shepe3" src="<?php echo get_template_directory_uri();?>/img/shepe2.png" alt="">
                <img class="shepe4" src="<?php echo get_template_directory_uri();?>/img/shepe2.png" alt="">
                <img class="shepe5" src="<?php echo get_template_directory_uri();?>/img/shepe1.png" alt="">
                <img class="shepe6" src="<?php echo get_template_directory_uri();?>/img/shepe2.png" alt="">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="logo">
                            <?php if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo();} ?>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <?php wp_nav_menu(); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <?php
                            $var = new WP_Query( array('post_type' => 'custom_pages'));
                            while ( $var -> have_posts() ) : $var -> the_post(); 
                        ?>
                        <div class="header-text">
                            <h1><?php the_title(); ?></h1>
                            <?php the_content(); ?>
                            <button>Read More</button>
                            <button>Explore</button>
                        </div>
                    <?php endwhile ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <?php
                            $var = new WP_Query( array('post_type' => 'custom_secton2'));
                            while ( $var -> have_posts() ) : $var -> the_post(); 
                        ?>
                        <div class="another-text">
                            <h3><?php the_title(); ?></h3>
                            <?php the_content(); ?>
                        </div>
                    <?php endwhile ?>
                    </div>
                </div>
            </div>
        </header>
        <section class="development">
            <div class="blue">
                <img src="<?php echo get_template_directory_uri();?>/img/development-shepe-blue.png" alt="">
            </div>
            <div class="white">
                <img src="<?php echo get_template_directory_uri();?>/img/development-shepe-white.png" alt="">
            </div>
            <div class="container">
                <div class="row ">
                        <?php 
                            $var = new WP_Query(array('post_type' => 'custom_iconbox'));
                            while ($var -> have_posts()) : $var -> the_post();
                            $color = get_post_meta($post -> ID, 'color', true);
                        ?>
                    <div class="col-md-4 col-sm-4">
                        <div class="design-development one">
                            <i class="material-icons" style="background: <?php echo $color; ?>">lightbulb_outline</i>
                            <h2><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <?php endwhile ?>
                </div>
            </div>
        </section>
        <section class="works">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="work-images">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/HZRp6iRjnhQ" frameborder="0" allowfullscreen></iframe>
                            <div class="overlay-text">
                                <i class="material-icons">play_circle_filled</i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <?php 
                            $var = new WP_Query(array('post_type' => 'work_page'));
                            while ($var -> have_posts()) : $var -> the_post();
                        ?>
                        <div class="work-text-full">
                            <div class="work-text">
                                <h2><?php the_title(); ?></h2>
                                <?php the_content(); ?>
                            </div>
                        </div>
                    <?php endwhile ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="portfolia">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php 
                            $var = new WP_Query(array( 'post_type' => 'did_recently'));
                            while ($var -> have_posts()) : $var -> the_post();
                        ?>
                        <div class="port-text">
                            <h2><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                        </div>
                    <?php endwhile ?>
                    </div>
                </div>
                <div class="row">
                        <?php 
                            $var = new WP_Query(array('post_type' => 'hover_box'));
                            while ( $var -> have_posts()) : $var -> the_post();
                        ?>
                    <div class="col-md-4 col-sm-6">
                        <div class="portfolio-part">
                            <img src="<?php the_post_thumbnail( $size = 'post-thumbnail', $attr = 'Image_one' );?>" >
                            <div class="overlay-slide">
                                <h2><?php the_title(); ?></h2>
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                    <?php endwhile ?>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="penination">
                            <a href="#"><p>More Works</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="our-team">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php
                            $var = new WP_Query(array( 'post_type' => 'custom_team')); 
                            while ($var -> have_posts()) : $var -> the_post();
                        ?>
                        <div class="team-text">
                            <h2><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                        </div>
                    <?php endwhile ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="my-claint owl-carousel owl-theme">
                            <?php
                                $var = new WP_Query( array('post_type' => 'slider'));
                                while ( $var->have_posts() ) : $var->the_post(); 
                            ?>
                            <div class="item">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                <div class="item-overlay"></div>
                                <div class="item-text">
                                    <h3><?php the_title(); ?></h3>
                                    <h4><?php the_content(); ?></h4>
                                    <p><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></p>
                                </div>
                            </div>
                            <?php endwhile;  ?> 
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact">
            <div class="blue">
                <img src="<?php echo get_template_directory_uri();?>/img/contact-shepe-blue.png" alt="">
            </div>
            <div class="white">
                <img src="<?php echo get_template_directory_uri();?>/img/contact-shepe-white.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <?php 
                            $var = new WP_Query(array('post_type' => 'contact_us'));
                            while ($var -> have_posts()) : $var -> the_post();
                        ?>
                        <div class="contact-text">
                            <h2><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                        </div>
                        <?php endwhile ?>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <div class="contact-form">
                            <form action="#" method="post">
                                <div class="first">
                                    <input type="text" name="" placeholder="First Name">
                                </div>
                                <div class="last">
                                    <input type="text" name="" placeholder="Last Name">
                                </div>
                                <div class="email">
                                    <input type="email" name="" placeholder="Email Address">
                                </div>
                                <div class="message">
                                    <textarea placeholder="Your Message"></textarea>
                                </div>
                                <div class="checkbox-submit">
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="" checked> Allow Newsletter</label>
                                    </div>
                                    <div class="submit">
                                        <input type="submit" value="SEND">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="footer-icon">
                            <h2>Kulo</h2>
                            <p><a href="#"><i aria-hidden="true" class="fa fa-facebook"></i></a><a href="#"><i aria-hidden="true" class="fa fa-linkedin"></i></a><a href="#"><i aria-hidden="true" class="fa fa-dribbble"></i></a><a href="#"><i aria-hidden="true" class="fa fa-behance"></i></a><a href="#"><i aria-hidden="true" class="fa fa-google-plus"></i></a></p>
                            <h5>&copy; All Right Reserved. dart theme 2017</h5>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="footer-text">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-xs-6">
                                    <div class="footer-text-single">
                                        <h3>About Us</h3>
                                        <p><a href="#">Our Team</a></p>
                                        <p><a href="#">Company</a></p>
                                        <p><a href="#">Jobs</a></p>
                                        <p><a href="#">Newsletter</a></p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6">
                                    <div class="footer-text-single">
                                        <h3>Help Center</h3>
                                        <p><a href="#">Documentations</a></p>
                                        <p><a href="#">Tutorials</a></p>
                                        <p><a href="#">Term Of Use</a></p>
                                        <p><a href="#">Privecy Policy</a></p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6">
                                    <div class="footer-text-single">
                                        <h3>Tools</h3>
                                        <p><a href="#">Create Account</a></p>
                                        <p><a href="#">Log In</a></p>
                                        <p><a href="#">Services</a></p>
                                        <p><a href="#">Sitemap</a></p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6">
                                    <div class="footer-text-single">
                                        <h3>Get In Touch</h3>
                                        <p><a href="#">Contact Us</a></p>
                                        <p><a href="#">Request A Demo</a></p>
                                        <p><a href="#">+12 323 323 323</a></p>
                                        <p><a href="#">support@gmail.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <?php wp_footer(); ?>
</body>

</html>