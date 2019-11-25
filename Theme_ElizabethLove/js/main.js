jQuery(document).ready(function($) {

		        $('#customers-testimonials').owlCarousel({
		            loop: true,
		            center: true,
		            autoplay: true,
		             nav: true,
  					 navText: ['',''],
		            autoplayTimeout: 3000,
		            responsive: {
		              0: { items: 1 },
		              768: { items: 2 },
		              1170: { items: 3 }
		            }
		        });
		        $( ".owl-prev").html('<i class="fas fa-arrow-left"></i>');
 				$( ".owl-next").html('<i class="fas fa-arrow-right"></i>');
        	});