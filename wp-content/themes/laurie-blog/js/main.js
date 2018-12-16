"use strict";

/**
 * = Table Of Contents =
 * 
 * laurie_blog_masonry ( initiate masonry )
 *
 * # ready
 * # load
*/

function laurie_logo_position() {		

	var $windowSize = jQuery(window).width();	
	var $customLogoWidth = jQuery(".custom-logo").width();
	if ($windowSize > 970) {
		if ($customLogoWidth != null) { 
			var $siteNavWidth = $customLogoWidth;
		} else {
			var $siteNavWidth = jQuery(".site-title a").width();
		}
		jQuery('.header-2 .site-navigation').css('width', $siteNavWidth);	
	} else {
		jQuery('.header-2 .site-navigation').css({'width' : '70%', 'margin' : '0 auto'});	
	}
}

function laurie_slider5_nav() {		
	var $windowSize = jQuery(window).width();
	var $navNum = jQuery('#slider-4-nav .slick-track div').size();

	if ($navNum == 1) {
		var $slider5navWidth = '160';
	} else if ($navNum == 2) {
		var $slider5navWidth = '305';
	} else if ($navNum == 3) {
		var $slider5navWidth = '450';
	} else if ($navNum >= 4) {
		var $slider5navWidth = '594';
	}	

	var $slider5position = ($windowSize - $slider5navWidth) / 2;
	jQuery('#slider-4-nav').css('width', $slider5navWidth);
	jQuery('#slider-4-nav').css('left', $slider5position);

}

function laurie_slider5_center() {

	if ( jQuery('#slider-4').length ) {

		var sliderHeight,
		contentHeight,
		offset;

		jQuery('#slider-4 .post-thumb img').css({ minHeight : 0 });
		jQuery('#slider-4 .post-main').css({ marginTop : 0 });

		jQuery('#slider-4 .post-main').each(function() {

			sliderHeight = jQuery('#slider-4').height();
			contentHeight = jQuery(this).outerHeight();
			offset = sliderHeight / 2 - contentHeight / 2;

			if ( offset > 0 ) {
				jQuery(this).css({ marginTop : offset });
			}

		});

		jQuery('#slider-4 .post-thumb img').css({ minHeight : sliderHeight });

	}

}

function laurie_mobile_custom_bg() {		
	var $windowSize = jQuery(window).width();
	if ($windowSize < 970) {
		jQuery('body').css({'background-color' : 'inherit'});	
	} 
}

function laurie_elements_position() {	

	var $windowSize = jQuery(window).width();	
	var $space = 45;
	var $headerHeight = jQuery(".site-header-wrapper").height();
	var $headerouterHeight = jQuery(".site-header-wrapper").outerHeight();
	var $headerHeight = jQuery(".header-1,.header-2,.header-3").height();
	var $headerWidth = jQuery(".header-1 .small-12,.header-2 .small-12,.header-3 .small-12").width();
	var $logoWidth = jQuery(".site-branding").outerWidth(true);
	var $logoHeight = jQuery(".site-branding").outerHeight();
	var $headerElementsHeight = jQuery(".header-1-elements").height();
	var $headerElementsPosition = ($logoHeight - $headerElementsHeight) / 2;
	var $headerElementsWidth = ($headerWidth - $logoWidth) - 5;
	var $leftMenuWidth = jQuery("#desktop-site-navigation-left").width();
	var $leftMenuHeight = jQuery("#desktop-site-navigation-left").height();
	var $leftMenuHorizontalPosition = $space + $leftMenuWidth;
	var $leftMenuVerticalPosition = ($headerHeight - $leftMenuHeight) / 2;
	var $rightMenuWidth = jQuery("#desktop-site-navigation-right").width()
	var $rightMenuHeight = jQuery("#desktop-site-navigation-right").height();
	var $rightMenuHorizontalPosition = $space + $rightMenuWidth;
	var $rightMenuVerticalPosition = ($headerHeight - $rightMenuHeight) / 2;
	var $socialHeight = jQuery("#social-header").height();
	var $socialPosition = ($headerouterHeight - $socialHeight) / 2;
	var $searchHeight = jQuery(".site-header .search-form").height();
	var $searchPosition = ($headerouterHeight - $searchHeight) / 2;
	var $searchMobilePosition = ($headerHeight - $searchHeight) / 2 + 10;


	if ($windowSize > 992) {
		jQuery('.header-1-elements, .header-1-primary .main-navigation').css({'margin-top' : $headerElementsPosition });
	}
	jQuery('.header-2 #desktop-site-navigation-left').css({'left' : - $leftMenuHorizontalPosition, 'margin-top' : $leftMenuVerticalPosition - 1});
	jQuery('.header-2 #desktop-site-navigation-right').css({'right' : - $rightMenuHorizontalPosition, 'margin-top' : $rightMenuVerticalPosition - 1});
	jQuery('.header-2 #social-header').css('margin-top', $socialPosition);
	jQuery('.header-3 #social-header').css('margin-top', $socialPosition);

	if ($windowSize > 970) {
		jQuery('.header-2 .desktop-search .search-form').css('margin-top', $searchPosition);	
		jQuery('.header-3 .desktop-search .search-form').css('margin-top', $searchPosition);	
	} else {
		jQuery('.header-2 .desktop-search .search-form').css('margin-top', $searchMobilePosition);	
		jQuery('.header-3 .desktop-search .search-form').css('margin-top', $searchMobilePosition);	
	}

}

function laurie_slider_position() {	

	var $slider1Width = jQuery("#slider-1 .slider-content").width();
	var $slider1ContentWidth = jQuery("#slider-1 .entry-title a").width();
	var $arrow1Height = jQuery("#slider-1 .slick-arrow").height();
	var $arrow1HorizontalPosition = ((($slider1Width - $slider1ContentWidth) / 2) - $arrow1Height) / 2 ;
	jQuery('#slider-1 .slick-prev').css('left', $arrow1HorizontalPosition);
	jQuery('#slider-1 .slick-next').css('right', $arrow1HorizontalPosition);

	var $windowSize = jQuery(window).width();

}


/**
 * # ready
 */
jQuery(document).ready(function($){

	function laurie_desktop_dropdown() {		
		var $windowSizeMenu = jQuery(window).width();
		if ($windowSizeMenu > 990) {
		

		$('.main-navigation li').mouseenter(function(){
			$(this).children('.dropdown-toggle:not(.toggle-on)').trigger('click');
			}).mouseleave(function(){
			$(this).children('.dropdown-toggle.toggle-on').trigger('click');
		});

		} 
	}

	// Show header
	$('.site-header-wrapper, .menu-toggle').css('opacity', '1');	

	$('#slider-4 .slider-content').on( 'breakpoint', function(){
		laurie_slider5_center();
	});

	// Element Positionning
	laurie_slider5_nav();
	laurie_slider5_center();
	laurie_logo_position();
	laurie_mobile_custom_bg();
	laurie_slider_position();
	laurie_elements_position();
	laurie_desktop_dropdown();

	setTimeout( function(){
		laurie_slider5_center();
	}, 200 );


	$( window ).resize(function() {		

		laurie_slider5_nav();
		laurie_slider5_center();
		laurie_logo_position();
		laurie_mobile_custom_bg();
		laurie_slider_position();
		laurie_elements_position();
		laurie_desktop_dropdown();

		setTimeout( function(){
			laurie_slider5_center();
		}, 200 );

	});
		
});

/**
* # load
*/
jQuery(window).load(function(){

	jQuery('.masonry-init').masonry({
		itemSelector: '.masonry-item'
	});

	// Element Positionning
	laurie_slider5_nav();
	laurie_slider5_center();
	laurie_logo_position();
	laurie_mobile_custom_bg();
	laurie_slider_position();
	laurie_elements_position();

});