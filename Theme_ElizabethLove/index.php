

<?php get_header(); ?>


	<section id="home" class="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-12  banner_details">
					<?php 
						$banner = new WP_Query(array('post_type' => 'banner'));
						if ($banner->have_posts()) {
							while ($banner->have_posts()) {
								$banner->the_post();
								?>
								<h1><?php the_field('heading'); ?></h1>
								<h2><?php the_field('sub_heading'); ?></h2>
								<p><?php the_field('content'); ?></p>
								<h5><?php the_field('sub_content'); ?></h5>
								<?php
							}
						}
					?>
				</div>
		</div>
	</section>
	<section class="menu">
		<div class="container">
			<div class="row">
				<div class="col-md-3 logo">
					<?php if ( function_exists( 'the_custom_logo' )) { the_custom_logo();} ?>
				</div>
				<div class="col-md-9 navbar">
					<?php wp_nav_menu( array( 
						'theme_location' => 'top', 
						'menu_id' => 'Top Menu') ); 
					?>
				</div>
			</div>
		</div>
	</section>

	<section id="author" class="about">
		<div class="container">
			<div class="row">
			<?php 
				$author = new WP_Query(array('post_type'=>'author'));
				if ($author->have_posts()) {
					while ($author->have_posts()) {
								$author->the_post();
						?>  
						<div class="col-md-5 author_image m85">
							<img src="<?php the_field('author_image'); ?>">
						</div>
						<div class="col-md-7 author_details m85">
						<h1><?php the_field('heading'); ?></h1>
						<p><?php the_field('content'); ?></p>
						<a><?php the_field('button'); ?></a>
						</div>
						<?php
					}
				}
			?>
			</div>
		</div>
	</section>
	<section id="collection" class="collection">
		<div class="container">
			<div class="title">
				<?php 
					$section_title = new WP_Query(array('post_type'=>'section_title','tag'=>'title_collection'));
					if ($section_title->have_posts()) {
						while ($section_title->have_posts()) {
							$section_title->the_post();
							?>
							<h1><?php the_field('section_title'); ?></h1>
							<img src="<?php the_field('title_underscore'); ?>">
							<?php
						}
					}
				?>
			</div>
			<div class="row">
					<?php 
						$category_items = new WP_Query(array('post_type'=>'category_items'));
						if ($category_items->have_posts()) {
							while ($category_items->have_posts()) {
								$category_items->the_post();
								?>
								<div class="col-md-3 col-lg-3 col-sm-6 category_item">
									<img src="<?php the_field('category_image'); ?>">
									<a href="#"><?php the_field('reading_option'); ?><?php the_field('font_awesome_icon');?></a>
								</div>
								<?php
							}
						}
					?>
			</div>
		</div>
	</section>
	<section id="nonfiction" class="btn_holder">
		<div class="btn">
			<a href="">Visit me on<img src="<?php echo get_template_directory_uri(); ?>/img/amazon.png" alt="Logo_amazon"><i class="fas fa-angle-double-right"></i></a>
		</div>
	</section>

	<section id="opinion" class="openion">
		<div class="container">
			<div class="title">
				<?php 
					$section_title = new WP_Query(array('post_type'=>'section_title', 'tag'=>'title_openion'));
					if ($section_title->have_posts()) {
						while ($section_title->have_posts()) {
							$section_title->the_post();
							?>
							<h1><?php the_field('section_title'); ?></h1>
							<img src="<?php the_field('title_underscore'); ?>" alt="title_underscore_img">
							<?php
						}
					}
				?>
			</div>

			<div id="customers-testimonials" class="owl-carousel">
				<?php
					$testimonial = new WP_Query(array('post_type' => 'testimonial'));
					if ($testimonial-> have_posts()) {
						while ($testimonial->have_posts()) {
							$testimonial->the_post();
							?>
							<div class="box">
								<div class="level-item">
									<div>
										<div class="heading">
											<img class="avatar" src="<?php the_field('image'); ?>">
										</div>
										<hr>
										<div class="content">
											<p><?php the_field('opinion'); ?></p>
											<h3><?php the_field('end_of_voice'); ?></h3>
										</div>
									</div>
								</div>
							</div>
							<?php
						}
					}
				?>
			</div>
		</div>
	</section>


<?php get_footer(); ?>