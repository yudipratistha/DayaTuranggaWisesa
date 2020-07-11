$(window).on('load', function() {
		
	/* -----------------------------------
				1. Preloader
	----------------------------------- */
	$("#preloader").delay(1000).addClass('loaded');

	/* -----------------------------------
			3. Isotope Portfolio Setup
	----------------------------------- */
    if( $('.portfolio-items').length ) {
        var $elements = $(".portfolio-items"),
        $filters = $('.portfolio-filter ul li');
        $($filters[1]).attr("class", "active")
        var itemSelector = $('.portfolio-filter ul li').data('filter');
        var $container = $elements.isotope({filter: itemSelector});
        
        //Ascending order
	var responsiveIsotope = [
		[480, 4],
		[720, 6]
	];
        var itemsPerPageDefault = 6;
        var itemsPerPage = defineItemsPerPage();
        var currentNumberPages = 1;
        var currentPage = 1;
        var currentFilter = $('#filter-portfolio').val();
        var filterAtribute = 'data-filter';
        var pageAtribute = 'data-page';
        var pagerClass = 'isotope-pager';

        function changeFilter(selector) {
            console.log(selector)
            $container.isotope({
                filter: selector
            });
        }
        function goToPage(n) {
            currentPage = n;
                var selector = ( currentFilter != '*' ) ? '['+filterAtribute+'="'+currentFilter+'"]' : '';
                selector += '['+pageAtribute+'="'+currentPage+'"]';
            changeFilter(selector);
            
        }

        function defineItemsPerPage() {
            var pages = itemsPerPageDefault;

            for( var i = 0; i < responsiveIsotope.length; i++ ) {
                if( $(window).width() <= responsiveIsotope[i][0] ) {
                    pages = responsiveIsotope[i][1];
                    break;
                }
            }
            console.log(pages)
            return pages;
        }
        
        function setPagination() {

            var SettingsPagesOnItems = function(){

                var itemsLength = $container.children(itemSelector).length;
                
                var pages = Math.ceil(itemsLength / itemsPerPage);
                var item = 1;
                var page = 1;
                var selector = itemSelector;
                    selector += ( currentFilter != '*' ) ? '['+filterAtribute+'="'+currentFilter+'"]' : '';
                
                $container.children(selector).each(function(){
                    if( item > itemsPerPage ) {
                        page++;
                        item = 1;
                    }
                    
                    $(this).attr(pageAtribute, page);
                    item++;
                });

                currentNumberPages = page;

            }();

            var CreatePagers = function() {

                var $isotopePager = ( $('.'+pagerClass).length == 0 ) ? $('<div class="'+pagerClass+'"></div>') : $('.'+pagerClass);

                $isotopePager.html('');
                
                for( var i = 0; i < currentNumberPages; i++ ) {
                    var $pager = $('<a href="javascript:void(0);" class="pager" '+pageAtribute+'="'+(i+1)+'"></a>');
                        $pager.html(i+1);
                        if(i==0) $pager.addClass('pager-active')
                        $pager.click(function(){
                            var page = $(this).eq(0).attr(pageAtribute);
                            $isotopePager.find('.pager-active').removeClass('pager-active')
                            $(this).eq(0).addClass('pager-active')
                            goToPage(page);
                            
                        });

                    $pager.appendTo($isotopePager);
                }

                $container.after($isotopePager);

            }();

        }

        setPagination();
        goToPage(1);

        $filters.on('click', function(){
            $filters.removeClass('active');
            $(this).addClass('active');
            var selector = $(this).data('filter');
            currentFilter = selector;
            // $(".portfolio-items").isotope({
            //     filter: selector,
            //     hiddenStyle: {
            //         transform: 'scale(.2) skew(30deg)',
            //         opacity: 0
            //     },
            //     visibleStyle: {
            //         transform: 'scale(1) skew(0deg)',
            //         opacity: 1,
            //     },
            //     transitionDuration: '.5s'
            // });
            setPagination();
		    goToPage(1);
        });
    }
	
	/* -----------------------------------
			4. Blogs Masonry Setup
	----------------------------------- */
    $('.blog-masonry').isotope({ layoutMode: 'moduloColumns' });
	
});

$(document).ready(function() {
    "use strict";
	
	/* -----------------------------------
			5. Active Current Link
	----------------------------------- */
    $('.header-main ul li a').on('click',function() {
        if($('.header-main.on').length) {
            $('.header-main').removeClass('on');
        }
    });
	
	/* -----------------------------------
		6. Mobile Toggle Click Setup
	----------------------------------- */
    $('.header-toggle').on('click', function() {
        $('.header-main').toggleClass('on');
    });
	
	/* -----------------------------------
	      7. Testimonials OwlCarousel
	----------------------------------- */
	$(".testimonial .owl-carousel").owlCarousel({
        loop: true,
        margin: 30,
        autoplay: true,
        smartSpeed: 500,
        responsiveClass: true,
        dots: false,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
            },
            800: {
                items: 1,
            },
            1000: {
                items: 2,
            },
        },
    });
	
	/* -----------------------------------
	      	8. Chart Setup
	----------------------------------- */
	if ($('.chart').length > 0) {
	    $('.chart').easyPieChart({
          trackColor:'#0e0f10',
	      scaleColor:false,
	      easing: 'easeOutBounce',
	      scaleLength: 4,
	      lineCap: 'square',
	      lineWidth:5,
	      size:130,
	      animate: {
	                duration: 2500,
	                enabled: true
	    	}
	 	});
	 }
	
	/* -----------------------------------
	      	9. Portfolio Tilt Setup
	----------------------------------- */
    $('.pt-portfolio .portfolio-items .item figure').tilt({
        maxTilt: 3,
        glare: true,
        maxGlare: .6,
        reverse: true
    });
	
	/* -----------------------------------
	      10. Portfolio Image Link
	----------------------------------- */
	$(".portfolio-items .image-link").magnificPopup({
        type: "image"
	});
	
	/* -----------------------------------
	      11. Portfolio Video Link
	----------------------------------- */
	$(".portfolio-items .video-link").magnificPopup({
		type: "iframe"
	});
	
	/* -----------------------------------
	      12. Blog Video Link
	----------------------------------- */
	$(".pt-blog .blog-item .thumbnail .btn-play").magnificPopup({
		type: "iframe"
	});
	
	/* -----------------------------------
	    13. Validate Contact Form
	----------------------------------- */
	if ($("#contact-form").length) {
        $("#contact-form").validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },

                email: "required",
				
            },

            messages: {
                name: "Please enter your name",
                email: "Please enter your email address"
            },

            submitHandler: function (form) {
                $.ajax({
                    type: "POST",
                    url: "/mail.php",
                    data: $(form).serialize(),
                    success: function () {
                        $( "#loader").hide();
                        $( "#success").slideDown( "slow" );
                        setTimeout(function() {
                        $( "#success").slideUp( "slow" );
                        }, 3000);
                        form.reset();
                    },
                    error: function() {
                        $( "#loader").hide();
                        $( "#error").slideDown( "slow" );
                        setTimeout(function() {
                        $( "#error").slideUp( "slow" );
                        }, 3000);
                    }
                });
                return false;
            }

        });
    }
	
	/* Google Map Setup */
    if($('#map').length) {
        initMap();
     };

});

/* -----------------------------------
  		14. Google Map
----------------------------------- */
function initMap() {
    var latitude = $("#map").data('latitude'),
        longitude = $("#map").data('longitude'),
        zoom = $("#map").data('zoom'),
        cordinates = new google.maps.LatLng(latitude, longitude);

    var styles = [{"stylers":[{"saturation":-100},{"gamma":0.8},{"lightness":4},{"visibility":"on"}]},{"featureType":"landscape.natural","stylers":[{"visibility":"on"},{"color":"#5dff00"},{"gamma":4.97},{"lightness":-5},{"saturation":100}]}];
	
        var mapOptions = {
        zoom: zoom,
        center: cordinates,
        mapTypeControl: false,
        disableDefaultUI: true,
        zoomControl: true,
        scrollwheel: false,
        styles: styles
    };
    var map = new google.maps.Map(document.getElementById('map'), mapOptions);
    var marker = new google.maps.Marker({
        position: cordinates,
        map: map,
        title: "We are here!"
    });
}