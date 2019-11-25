<?php get_header() ?>
<?php 
	$hero_title = get_field('contact_page_hero_title', 'option');
	$secondary_title = get_field('contact_page_secondary_title', 'option');
	$section_contact = get_field('contact_page_content', 'option');
	$contact_form = get_field('contact_form_seven', 'option');
	$section_map = get_field('contact_location_map', 'option');
?>

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
<section class="cantact-page section-padding">
    <div class="container">
		<?php if ((!empty($secondary_title)) && (!empty($section_contact))) : ?>
		    <div class="row">
		        <div class="col-lg-6 offset-lg-3">
		            <div class="section-heading">
		                <h2><?php echo $secondary_title ?></h2>
		                <p><?php echo $section_contact ?></p>
		            </div>
		        </div>
		    </div>
		<?php endif; ?>
		<?php if (!empty($contact_form)) : ?>
	        <div class="row mt-50">
	            <div class="col-lg-10 offset-lg-1">
	                <?php echo $contact_form ?>
	            </div>
	        </div>
		<?php endif; ?>
    </div>
</section>
<?php if (!empty($section_map)) : ?>
	<div class="map">
	    <object data="<?php echo $section_map?>"></object>
	</div>
<?php endif; ?>

<?php get_footer() ?>