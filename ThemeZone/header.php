<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<title>ThemeZone</title>
	<?php wp_head(); ?>
</head>
<body>
	
	<div class="container">
		<div class="row">
			<div class="col-md-3 logo">
				<?php if ( function_exists( 'the_custom_logo' )) { the_custom_logo(); } ?>
			</div>
			<div class="col-md-9"><?php wp_nav_menu(); ?></div>
			
		</div>
	</div>