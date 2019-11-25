
	<footer>
		<div class="container">
			<div class="social_icon center">
				<?php
					$social_icon = new WP_Query(array('post_type' => 'social_icon'));
					if ($social_icon->have_posts()) {
						while ($social_icon->have_posts()) {
							$social_icon->the_post();
							?>
							<a href="<?php the_field('social_media_link'); ?>"><?php the_field('social_media_icon'); ?></a>
							<?php
						}
					}
				?>
			</div>
			<div class="footer_menu center">
				<?php wp_nav_menu( array( 
						'theme_location' => 'top', 
						'menu_id' => 'Top Menu') ); 
					?>
			</div>
			<div class="copy_right center">
				<?php
					$copyright = new WP_Query(array('post_type' => 'copyright'));
					if ($copyright->have_posts()) {
					 	while ($copyright->have_posts()) {
					 		$copyright->the_post();
					 		?>
							<p><?php the_field('copyright_text'); ?></p>
					 		<?php
					 	}
					 } 
				?>
			</div>
		</div>
	</footer>

	<?php wp_footer(); ?>
</body>
</html>