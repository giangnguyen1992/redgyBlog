"use strict";

/**
 * File plugins.js.
 */
( function( $ ) {

	// Move Social Sharing In Meta 

	$(".addtoany_content_top").prependTo(".entry-meta");

	var autoplay1 = $('#slider-1').data('autoplay');
	if (autoplay1 > 0) {
		var autoState1 = true;
	} else {
		var autoState1 = false;
	}

	$('#slider-1 .slider-content')
	.on('init', function(slick) {
	$('#slider-1 .slider-content').fadeTo( 600 , 1, function() {
	});
	})
	.slick({
		arrows: true,
		dots: false,
		fade: true,
		autoplay: autoState1,
 		autoplaySpeed: autoplay1,
		adaptiveHeight: true,
		mobileFirst: true,
		cssEase: 'linear'
	});

	$('#slider-2 .slider-content')
		.on('init', function(slick) {
		$('#slider-2 .slider-content').fadeTo( 600 , 1, function() {
		// animation complete.
		});
		})

		var autoplay2 = $('#slider-2').data('autoplay');
		if (autoplay2 > 0) {
			var autoState2 = true;
		} else {
			var autoState2 = false;
		}

		$('#slider-2 .slider-content').slick({
		centerMode: true,
		centerPadding: '0px',
		slidesToShow: 2,
		arrows: false,
		autoplay: autoState2,
 		autoplaySpeed: autoplay2,
		dots: true,
		  responsive: [
	    {
	      breakpoint: 1000,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1,
	        adaptiveHeight: true
	      }
	    }
	    // You can unslick at a given breakpoint now by adding:
	    // settings: "unslick"
	    // instead of a settings object
	  ]
	});

	$('#slider-3 .slider-content')
	.on('init', function(slick) {
	$('#slider-3 .slider-content').fadeTo( 600 , 1, function() {
	// animation complete.
	});
	})

	var autoplay3 = $('#slider-3').data('autoplay');
	if (autoplay3 > 0) {
		var autoState3 = true;
	} else {
		var autoState3 = false;
	}

	$('#slider-3 .slider-content').slick({
	infinite: true,
	slidesToShow: 3,
	slidesToScroll: 3,
	arrows: false,
	autoplay: autoState3,
 	autoplaySpeed: autoplay3,
	dots: true,
	   responsive: [
	    {
	      breakpoint: 1200,
	      settings: {
	        slidesToShow: 3,
	        slidesToScroll: 3,
	        infinite: true
	      }
	    },
	    {
	      breakpoint: 1100,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 2
	      }
	    },
	    {
	      breakpoint: 800,
	      settings: {
	        slidesToShow: 1,
	        dots: true,
	        arrows: false,
	        adaptiveHeight: true,
	        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});


	$('#slider-4 .slider-content')
	.on('init', function(slick) {
		$('#slider-4 .slider-content,#slider-4-nav').addClass('active');
	});

	var autoplay4 = $('#slider-4').data('autoplay');
	if (autoplay4 > 0) {
		var autoState4 = true;
	} else {
		var autoState4 = false;
	}

	$('#slider-4 .slider-content').slick({
	infinite: true,
	slidesToShow: 1,
	slidesToScroll: 1,
	autoplay: autoState4,
	fade: true,
 	autoplaySpeed: autoplay4,
	arrows: false,
	asNavFor: '#slider-4-nav .slider-content',
	dots: false,
   	responsive: [
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 1,
        dots: true,
        adaptiveHeight: true,
        slidesToScroll: 1
  }
}
// You can unslick at a given breakpoint now by adding:
// settings: "unslick"
// instead of a settings object
]
});

	$('#slider-4-nav .slider-content').slick({
	  slidesToShow: 4,
	  variableWidth: true,
	  slidesToScroll: 1,
	  asNavFor: '#slider-4 .slider-content',
	  arrows: false,
	  dots: false,
	  centerMode: false,
	  swipe: false,
	  focusOnSelect: true
});

	$('#slider-5 .slider-content')
	.on('init', function(slick) {
		$('#slider-5 .slider-content,.slider-content-sidebar-2,.slider-content-sidebar-1').addClass('active');
	});

	var autoplay5 = $('#slider-5').data('autoplay');
	if (autoplay5 > 0) {
		var autoState5 = true;
	} else {
		var autoState5 = false;
	}

	$('#slider-5 .slider-content').slick({
	infinite: true,
	slidesToShow: 1,
	adaptiveHeight: true,
	slidesToScroll: 1,
	fade: true,
	arrows: true,
	autoplay: autoState5,
 	autoplaySpeed: autoplay5,
	dots: false,
	   	responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        fade: false,        
        dots: true,
        arrows: false,
        adaptiveHeight: true,
        slidesToScroll: 2,
        infinite: true
      }
    },
    {
      breakpoint: 700,
      settings: {
        slidesToShow: 1,
        dots: true,
        arrows: false,
        adaptiveHeight: true,
        slidesToScroll: 1
  }
}
// You can unslick at a given breakpoint now by adding:
// settings: "unslick"
// instead of a settings object
]
});

	/**
	 * first leter into big cap
	 */
	function laurie_blog_first_letter_cap() {

		jQuery('.single-post .entry-content p:first').html(function (i, html) {
			if ( html.substr(0, 1) == '<' ) {
				if ( jQuery(this).next('p').length ) {
					if ( jQuery(this).next('p').html().substr(0, 1) == '<' ) { /* nothing */ } else {
						jQuery(this).next('p').html(function (i2, html2) {
							return html2.replace(/^[^a-zA-Z]*([a-zA-Z])/g, '<span class="drop-cap">$1</span>');		
						});
					}
				}
			} else {
				return html.replace(/^[^a-zA-Z]*([a-zA-Z])/g, '<span class="drop-cap">$1</span>');
			}
		});

	}

	// capitalize
	laurie_blog_first_letter_cap();

	// Wrap centered images in a new figure element

	$('img.aligncenter').wrap('<figure class="centered-image"></figure>');

	// Toggle visibility for the search form

	var $searchform = $('.site-header .search-form');

	$(document).on( 'click', '.search-toggle', function(){ 

		$(this).toggleClass('search-toggle-active');
		$('.custom-logo-link, .site-title').toggleClass('hide-logo');
		if($($searchform).css('opacity') == 0) {
		    $($searchform).fadeTo( 400 , 1, function() {
		$('.site-header .search-form input').focus();
		});
		} else {
			 $($searchform).fadeTo( 400 , 0, function() {	
			 	 $($searchform).css("display", "none");
		});
		} 	

	});

} )( jQuery );