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
