<?php

/**
 * Register the options
 */
function laurie_blog_customizer_register_options( $options ) {

	$prefix = LAURIE_BLOG_CUSTOMIZER_PREPEND;

	// Top Bar Options
	$options[] = array(
		'type'	=> 'section',
		'id'	=> 'laurie_blog_top_bar_options',
		'title' => esc_html__( 'Top Bar Options & Colors', 'laurie-blog' ),
	);

		$options[] = array(
			'type'	=> 'option_select',
			'opts'  => array(
				'on' => esc_html__( 'On', 'laurie-blog' ),
				'off' => esc_html__( 'Off', 'laurie-blog' ),
			),
			'title' => esc_html__( 'Display Top Bar', 'laurie-blog' ),
			'id'	=> $prefix . 'top_bar_on_off',
			'def'	=> 'off',
		);

		$options[] = array(
			'type'	=> 'option_select',
			'opts'  => array(
				'on' => esc_html__( 'On', 'laurie-blog' ),
				'off' => esc_html__( 'Off', 'laurie-blog' ),
			),
			'title' => esc_html__( 'Display Social Icons', 'laurie-blog' ),
			'id'	=> $prefix . 'top_social_on_off',
			'def'	=> 'on',
		);

		$options[] = array(
			'type'	=> 'option_select',
			'opts'  => array(
				'on' => esc_html__( 'On', 'laurie-blog' ),
				'off' => esc_html__( 'Off', 'laurie-blog' ),
			),
			'title' => esc_html__( 'Display Menu', 'laurie-blog' ),
			'id'	=> $prefix . 'top_menu_on_off',
			'def'	=> 'on',
		);

		$options[] = array(
			'type'	=> 'option_select',
			'opts'  => array(
				'on' => esc_html__( 'On', 'laurie-blog' ),
				'off' => esc_html__( 'Off', 'laurie-blog' ),
			),
			'title' => esc_html__( 'Display Search Field', 'laurie-blog' ),
			'id'	=> $prefix . 'top_search_on_off',
			'def'	=> 'on',
		);

		$options[] = array(
			'type'	=> 'option_select',
			'opts'  => array(
				'left' => esc_html__( 'Left', 'laurie-blog' ),
				'center' => esc_html__( 'Center', 'laurie-blog' ),
				'right' => esc_html__( 'Right', 'laurie-blog' ),
			),
			'title' => esc_html__( 'Top Bar Menu Alignment', 'laurie-blog' ),
			'id'	=> $prefix . 'top_bar_alignment',
			'def'	=> 'center',
		);

		$options[] = array(
			'type'	=> 'option_text',
			'title' => esc_html__( 'Top Bar Padding', 'laurie-blog' ),
			'id'	=> $prefix . 'top_bar_padding',
			'def'	=> '0 0',
		);

		$options[] = array(
			'type'	=> 'option_text',
			'title' => esc_html__( 'Top Bar Sub-Nav Margin-Top', 'laurie-blog' ),
			'id'	=> $prefix . 'top_bar_sub_margin',
			'def'	=> '45px',
		);

		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Top Bar Background Color', 'laurie-blog' ),
			'id'	=> $prefix . 'top_bar_bg_color',
			'def'	=> '#fff',
		);

		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Top Bar Text Color', 'laurie-blog' ),
			'id'	=> $prefix . 'top_bar_nav_text_color',
			'def'	=> '#2d2e2f',
		);

		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Top Bar Hover/Active Text Color', 'laurie-blog' ),
			'id'	=> $prefix . 'top_bar_hover_text_color',
			'def'	=> '#999',
		);

		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Top Bar Arrow Color', 'laurie-blog' ),
			'id'	=> $prefix . 'top_bar_arrow_color',
			'def'	=> '#2d2e2f',
		);

		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Top Bar Sub-Nav Background Color', 'laurie-blog' ),
			'id'	=> $prefix . 'top_bar_nav_background_color',
			'def'	=> '#0a1628',
		);

		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Top Bar Sub-Nav Border Color', 'laurie-blog' ),
			'id'	=> $prefix . 'top_bar_sub_nav_border_color',
			'def'	=> '#0a1628',
		);

		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Top Bar Sub-Nav Separator Color', 'laurie-blog' ),
			'id'	=> $prefix . 'top_bar_sub_nav_separator_color',
			'def'	=> '#1e293a',
		);

		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Top Bar Sub-Nav Text Color', 'laurie-blog' ),
			'id'	=> $prefix . 'top_bar_sub_nav_text_color',
			'def'	=> '#fff',
		);

		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Top Bar Sub-Nav Hover/Active Text Color', 'laurie-blog' ),
			'id'	=> $prefix . 'top_bar_sub_nav_hover_text_color',
			'def'	=> '#ffe574',
		);

		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Top Bar Sub-Nav Arrow Color', 'laurie-blog' ),
			'id'	=> $prefix . 'top_bar_sub_nav_arrow_color',
			'def'	=> '#fff',
		);

		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Top Bar Social Icons Color', 'laurie-blog' ),
			'id'	=> $prefix . 'top_social_icons_color',
			'def'	=> '#2d2e2f',
		);

			$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Top Bar Social Icons Hover Color', 'laurie-blog' ),
			'id'	=> $prefix . 'top_social_icons_hover_color',
			'def'	=> '#ffe574',
		);
			
		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Top Bar Search Text Color', 'laurie-blog' ),
			'id'	=> $prefix . 'top_search_text_color',
			'def'	=> '#a9a9a9',
		);

		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Top Bar Search Text Active Color', 'laurie-blog' ),
			'id'	=> $prefix . 'top_search_text_active_color',
			'def'	=> '#fff',
		);

		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Top Bar Search Icon Color', 'laurie-blog' ),
			'id'	=> $prefix . 'top_search_icon_color',
			'def'	=> '#2d2e2f',
		);

	// Header Options & Colors
	$options[] = array(
		'type'	=> 'section',
		'id'	=> 'laurie_blog_header_options',
		'title' => esc_html__( 'Header Options & Colors', 'laurie-blog' ),
	);

		$options[] = array(
			'type'	=> 'option_select',
			'opts'  => array(
				'header-1' => esc_html__( 'Header 1', 'laurie-blog' ),
				'header-2' => esc_html__( 'Header 2', 'laurie-blog' ),
				'header-3' => esc_html__( 'Header 3', 'laurie-blog' ),

			),
			'title' => esc_html__( 'Header Style', 'laurie-blog' ),
			'id'	=> $prefix . 'header_style',
			'def'	=> 'header-1',
		);	

		$options[] = array(
			'type'	=> 'option_select',
			'opts'  => array(
				'on' => esc_html__( 'On', 'laurie-blog' ),
				'off' => esc_html__( 'Off', 'laurie-blog' ),
			),
			'title' => esc_html__( 'Display Search Box', 'laurie-blog' ),
			'id'	=> $prefix . 'search_on_off',
			'def'	=> 'on',
		);

		$options[] = array(
			'type'	=> 'option_select',
			'opts'  => array(
				'on' => esc_html__( 'On', 'laurie-blog' ),
				'off' => esc_html__( 'Off', 'laurie-blog' ),
			),
			'title' => esc_html__( 'Display Social Icons', 'laurie-blog' ),
			'id'	=> $prefix . 'social_on_off',
			'def'	=> 'on',
		);

		$options[] = array(
			'type'	=> 'option_text',
			'title' => esc_html__( 'Desktop Header Margin Bottom', 'laurie-blog' ),
			'id'	=> $prefix . 'header_margin',
			'def'	=> '30px',
		);

		$options[] = array(
			'type'	=> 'option_text',
			'title' => esc_html__( 'Desktop Header Padding', 'laurie-blog' ),
			'id'	=> $prefix . 'desktop_header_padding',
			'def'	=> '12px 0',
		);

		$options[] = array(
			'type'	=> 'option_text',
			'title' => esc_html__( 'Desktop Sub-Nav Margin Top', 'laurie-blog' ),
			'id'	=> $prefix . 'desktop_sub_margin',
			'def'	=> '63px',
		);

		$options[] = array(
			'type'	=> 'option_text',
			'title' => esc_html__( 'Mobile Header Padding', 'laurie-blog' ),
			'id'	=> $prefix . 'header_padding',
			'def'	=> '18px 0',
		);

		$options[] = array(
			'type'	=> 'option_text',
			'title' => esc_html__( 'Mobile Content Margin Top', 'laurie-blog' ),
			'id'	=> $prefix . 'mobile_content_margin',
			'def'	=> '25px',
		);

		$options[] = array(
			'type'	=> 'option_text',
			'title' => esc_html__( 'Desktop Content Margin Top', 'laurie-blog' ),
			'id'	=> $prefix . 'desktop_content_margin',
			'def'	=> '45px',
		);

		$options[] = array(
			'type'	=> 'option_text',
			'title' => esc_html__( 'Mobile Search Icon Padding', 'laurie-blog' ),
			'id'	=> $prefix . 'search_padding',
			'def'	=> '30px 25px',
		);

		$options[] = array(
			'type'	=> 'option_text',
			'title' => esc_html__( 'Mobile Search Field Padding', 'laurie-blog' ),
			'id'	=> $prefix . 'search_field_padding',
			'def'	=> '31px',
		);

		$options[] = array(
			'type'	=> 'option_text',
			'title' => esc_html__( 'Mobile Menu Icon Padding', 'laurie-blog' ),
			'id'	=> $prefix . 'menu_padding',
			'def'	=> '28px 25px',
		);

		$options[] = array(
			'type'	=> 'option_text',
			'title' => esc_html__( 'Mobile Menu Top Position', 'laurie-blog' ),
			'id'	=> $prefix . 'mobile_nav_top',
			'def'	=> '84px',
		);

		$options[] = array(
			'type'	=> 'option_text',
			'title' => esc_html__( 'Desktop Social Right Margin', 'laurie-blog' ),
			'id'	=> $prefix . 'desktop_social_margin',
			'def'	=> '50px',
		);

		$options[] = array(
			'type'	=> 'option_text',
			'title' => esc_html__( 'Facebook URL', 'laurie-blog' ),
			'id'	=> $prefix . 'header_facebook',
			'def'	=> '',
		);

		$options[] = array(
			'type'	=> 'option_text',
			'title' => esc_html__( 'Twitter URL', 'laurie-blog' ),
			'id'	=> $prefix . 'header_twitter',
			'def'	=> '',
		);

		$options[] = array(
			'type'	=> 'option_text',
			'title' => esc_html__( 'Instagram URL', 'laurie-blog' ),
			'id'	=> $prefix . 'header_instagram',
			'def'	=> '',
		);

		$options[] = array(
			'type'	=> 'option_text',
			'title' => esc_html__( 'Pinterest URL', 'laurie-blog' ),
			'id'	=> $prefix . 'header_pinterest',
			'def'	=> '',
		);

		$options[] = array(
			'type'	=> 'option_text',
			'title' => esc_html__( 'Behance URL', 'laurie-blog' ),
			'id'	=> $prefix . 'header_behance',
			'def'	=> '',
		);

		$options[] = array(
			'type'	=> 'option_text',
			'title' => esc_html__( 'Etsy URL', 'laurie-blog' ),
			'id'	=> $prefix . 'header_etsy',
			'def'	=> '',
		);

			$options[] = array(
			'type'	=> 'option_text',
			'title' => esc_html__( 'Youtube URL', 'laurie-blog' ),
			'id'	=> $prefix . 'header_youtube',
			'def'	=> '',
		);

			$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Header Background Color', 'laurie-blog' ),
			'id'	=> $prefix . 'header_bg_color',
			'def'	=> '#0a1628',
		);

		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Header 3 Navigation Background Color', 'laurie-blog' ),
			'id'	=> $prefix . 'header_3_bg_color',
			'def'	=> '#fff',
		);

		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Site Title Color', 'laurie-blog' ),
			'id'	=> $prefix . 'site_title_color',
			'def'	=> '#fff',
		);

		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Site Tagline Color', 'laurie-blog' ),
			'id'	=> $prefix . 'site_tagline_color',
			'def'	=> '#c0c0c0',
		);

		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Header Social Icons Color', 'laurie-blog' ),
			'id'	=> $prefix . 'social_icons_color',
			'def'	=> '#ffe574',
		);

		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Header Social Icons Hover Color', 'laurie-blog' ),
			'id'	=> $prefix . 'social_icons_hover_color',
			'def'	=> '#fff',
		);

		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Header Search Text Color', 'laurie-blog' ),
			'id'	=> $prefix . 'search_text_color',
			'def'	=> '#a9a9a9',
		);

		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Header Search Text Active Color', 'laurie-blog' ),
			'id'	=> $prefix . 'search_text_active_color',
			'def'	=> '#fff',
		);

		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Header Search Icon Color', 'laurie-blog' ),
			'id'	=> $prefix . 'search_icon_color',
			'def'	=> '#fff',
		);

		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Desktop Navigation Text Color', 'laurie-blog' ),
			'id'	=> $prefix . 'desktop_nav_text_color',
			'def'	=> '#fff',
		);

		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Desktop Navigation Hover/Active Text Color', 'laurie-blog' ),
			'id'	=> $prefix . 'desktop_nav_hover_text_color',
			'def'	=> '#ffe574',
		);

		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Desktop Navigation Arrow Color', 'laurie-blog' ),
			'id'	=> $prefix . 'desktop_nav_arrow_color',
			'def'	=> '#fff',
		);

		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Desktop Sub-Nav Background Color', 'laurie-blog' ),
			'id'	=> $prefix . 'desktop_sub_nav_background_color',
			'def'	=> '#0a1628',
		);

		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Desktop Sub-Nav Border Color', 'laurie-blog' ),
			'id'	=> $prefix . 'desktop_sub_nav_border_color',
			'def'	=> '#0a1628',
		);

		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Desktop Sub-Nav Separator Color', 'laurie-blog' ),
			'id'	=> $prefix . 'desktop_sub_nav_separator_color',
			'def'	=> '#1e293a',
		);

		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Desktop Sub-Nav Text Color', 'laurie-blog' ),
			'id'	=> $prefix . 'desktop_sub_nav_text_color',
			'def'	=> '#fff',
		);

		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Desktop Sub-Nav Hover/Active Text Color', 'laurie-blog' ),
			'id'	=> $prefix . 'desktop_sub_nav_hover_text_color',
			'def'	=> '#ffe574',
		);

		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Desktop Sub-Nav Arrow Color', 'laurie-blog' ),
			'id'	=> $prefix . 'desktop_sub_nav_arrow_color',
			'def'	=> '#fff',
		);

		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Mobile Menu Toggle Color', 'laurie-blog' ),
			'id'	=> $prefix . 'mobile_toggle_color',
			'def'	=> '#2d2e2f',
		);

		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Mobile Menu Background Color', 'laurie-blog' ),
			'id'	=> $prefix . 'mobile_bg_color',
			'def'	=> '#a1a1a1',
		);

		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Mobile Menu Text Color', 'laurie-blog' ),
			'id'	=> $prefix . 'mobile_text_color',
			'def'	=> '#fff',
		);

		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Mobile Menu Hover / Current Text Color', 'laurie-blog' ),
			'id'	=> $prefix . 'mobile_hover_color',
			'def'	=> '#333',
		);

		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Mobile Menu Separator Color', 'laurie-blog' ),
			'id'	=> $prefix . 'mobile_separator_color',
			'def'	=> '#fff',
		);

		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Mobile Menu Arrow Color', 'laurie-blog' ),
			'id'	=> $prefix . 'mobile_arrow_color',
			'def'	=> '#fff',
		);

		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Mobile Social Icons Color', 'laurie-blog' ),
			'id'	=> $prefix . 'mobile_social_icons_color',
			'def'	=> '#fff',
		);

		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Mobile Social Icons Hover Color', 'laurie-blog' ),
			'id'	=> $prefix . 'mobile_social_icons_hover_color',
			'def'	=> '#999',
		);

		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Mobile Search Icon Color', 'laurie-blog' ),
			'id'	=> $prefix . 'mobile_search_icon_color',
			'def'	=> '#fff',
		);

		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Mobile Search Text Color', 'laurie-blog' ),
			'id'	=> $prefix . 'mobile_search_text_color',
			'def'	=> '#a9a9a9',
		);

		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Mobile Search Text Active Color', 'laurie-blog' ),
			'id'	=> $prefix . 'mobile_search_text_active_color',
			'def'	=> '#fff',
		);


	// Homepage Layout Options
	$options[] = array(
		'type'	=> 'section',
		'id'	=> 'laurie_blog_homepage_options',
		'title' => esc_html__( 'Homepage Layout Options', 'laurie-blog' ),
	);

		$options[] = array(
			'type'	=> 'option_select',
			'opts'  => array(
				'wide' => esc_html__( 'Wide Layout', 'laurie-blog' ),
				'boxed' => esc_html__( 'Boxed Layout', 'laurie-blog' ),
			),
			'title' => esc_html__( 'Wide / Boxed Layout', 'laurie-blog' ),
			'id'	=> $prefix . 'wide_boxed',
			'def'	=> 'wide',
		);			

		$options[] = array(
			'type'	=> 'option_select',
			'opts'  => array(
				'post-s1' => esc_html__( 'Listing Style 1', 'laurie-blog' ),
				'post-s2' => esc_html__( 'Listing Style 2', 'laurie-blog' ),
				'post-s3' => esc_html__( 'Listing Style 3', 'laurie-blog' ),
				'post-s4' => esc_html__( 'Listing Style 4', 'laurie-blog' ),
				'post-s5' => esc_html__( 'Listing Style 5', 'laurie-blog' ),
			),
			'title' => esc_html__( 'Posts Listing Style (Homepage)', 'laurie-blog' ),
			'id'	=> $prefix . 'posts_style',
			'def'	=> 'post-s1',
		);	

		$options[] = array(
			'type'	=> 'option_select',
			'opts'  => array(
				'post-s1' => esc_html__( 'Listing Style 1', 'laurie-blog' ),
				'post-s2' => esc_html__( 'Listing Style 2', 'laurie-blog' ),
				'post-s3' => esc_html__( 'Listing Style 3', 'laurie-blog' ),
				'post-s4' => esc_html__( 'Listing Style 4', 'laurie-blog' ),
				'post-s5' => esc_html__( 'Listing Style 5', 'laurie-blog' ),
			),
			'title' => esc_html__( 'Posts Listing Style (Blog Template)', 'laurie-blog' ),
			'id'	=> $prefix . 'posts_style_template',
			'def'	=> 'post-s1',
		);	

		$options[] = array(
			'type'	=> 'option_select',
			'opts'  => array(
				'on' => esc_html__( 'On', 'laurie-blog' ),
				'off' => esc_html__( 'Off', 'laurie-blog' ),
			),
			'title' => esc_html__( 'Sidebar On/Off', 'laurie-blog' ),
			'id'	=> $prefix . 'sidebar_on_off',
			'def'	=> 'on',
		);

		$options[] = array(
			'type'	=> 'option_select',
			'opts'  => array(
				'right' => esc_html__( 'Right', 'laurie-blog' ),
				'left' => esc_html__( 'Left', 'laurie-blog' ),
			),
			'title' => esc_html__( 'Sidebar Position', 'laurie-blog' ),
			'id'	=> $prefix . 'sidebar_position',
			'def'	=> 'right',
		);

		$options[] = array(
			'type'	=> 'option_text',
			'title' => esc_html__( 'Desktop Homepage Content Margin Top', 'laurie-blog' ),
			'id'	=> $prefix . 'homepage_content_margin',
			'def'	=> '45px',
		);

	// Home - Slider Module
	$options[] = array(
		'type'	=> 'section',
		'id'	=> 'laurie_blog_slider_options',
		'title' => esc_html__( 'Home - Slider Module', 'laurie-blog' ),
	);

	$options[] = array(
			'type'	=> 'option_select',
			'opts'  => array(
				'on' => esc_html__( 'On', 'laurie-blog' ),
				'off' => esc_html__( 'Off', 'laurie-blog' ),
			),
			'title' => esc_html__( 'Slider On/Off', 'laurie-blog' ),
			'id'	=> $prefix . 'slider_on_off',
			'def'	=> 'off',
		);

		$options[] = array(
			'type'	=> 'option_select',
			'opts'  => array(
				'slider-5' => esc_html__( 'Slider 1', 'laurie-blog' ),
				'slider-4' => esc_html__( 'Slider 2', 'laurie-blog' ),
				'slider-3' => esc_html__( 'Slider 3', 'laurie-blog' ),
				'slider-1' => esc_html__( 'Slider 4', 'laurie-blog' ),
				'slider-2' => esc_html__( 'Slider 5', 'laurie-blog' ),
			),
			'title' => esc_html__( 'Slider Style', 'laurie-blog' ),
			'id'	=> $prefix . 'slider_style',
			'def'	=> 'slider-1',
		);		

		$options[] = array(
			'type'	=> 'option_text',
			'title' => esc_html__( 'Auto Slide Speed (In milliseconds, leave at 0 to turn it off)', 'laurie-blog' ),
			'id'	=> $prefix . 'autoslide_on_off',
			'def'	=> '0',
	);

			$options[] = array(
			'type'	=> 'option_select',
			'opts'  => array(
				'yes' => esc_html__( 'Yes', 'laurie-blog' ),
				'no' => esc_html__( 'No', 'laurie-blog' ),
			),
			'title' => esc_html__( 'Remove Slider Posts From Blogroll', 'laurie-blog' ),
			'id'	=> $prefix . 'slider_remove',
			'def'	=> 'yes',
		);

	$options[] = array(
		'type'	=> 'option_text',
		'title' => esc_html__( 'Mobile Slider Margin', 'laurie-blog' ),
		'id'	=> $prefix . 'slider_margin',
		'def'	=> '80px 0',
	);

	$options[] = array(
		'type'	=> 'option_text',
		'title' => esc_html__( 'Desktop Slider Margin', 'laurie-blog' ),
		'id'	=> $prefix . 'slider_desktop_margin',
		'def'	=> '55px 0',
	);

	// Home - Promo Boxes Module
	$options[] = array(
		'type'	=> 'section',
		'id'	=> 'laurie_blog_promo_boxes_options',
		'title' => esc_html__( 'Home - Promo Boxes Module', 'laurie-blog' ),
	);

		$options[] = array(
			'type'	=> 'option_select',
			'opts'  => array(
				'on' => esc_html__( 'On', 'laurie-blog' ),
				'off' => esc_html__( 'Off', 'laurie-blog' ),
			),
			'title' => esc_html__( 'Promo Boxes On/Off', 'laurie-blog' ),
			'id'	=> $prefix . 'boxes_on_off',
			'def'	=> 'off',
		);

		$options[] = array(
			'type'	=> 'option_select',
			'opts'  => array(
				'outside' => esc_html__( 'Outside', 'laurie-blog' ),
				'inside' => esc_html__( 'Inside', 'laurie-blog' ),
			),
			'title' => esc_html__( 'Promo Boxes Text Style', 'laurie-blog' ),
			'id'	=> $prefix . 'boxes_style',
			'def'	=> 'outside',
		);


		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Promo Boxes Background Color', 'laurie-blog' ),
			'id'	=> $prefix . 'boxes_bg_color',
			'def'	=> '#f3f3f4',
		);

		$options[] = array(
			'type'	=> 'option_text',
			'title' => esc_html__( 'Promo Boxes Padding (e.g. 30px 0)', 'laurie-blog' ),
			'id'	=> $prefix . 'boxes_padding',
			'def'	=> '80px 0',
		);


		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Promo Boxes Intro Text Color', 'laurie-blog' ),
			'id'	=> $prefix . 'boxes_intro_text_color',
			'def'	=> '#2d2e2f',
		);

		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Promo Boxes Link Text Color', 'laurie-blog' ),
			'id'	=> $prefix . 'boxes_intro_link_color',
			'def'	=> '#7d8289',
		);

		$options[] = array(
			'type'	=> 'option_text',
			'title' => esc_html__( 'Promo Boxes Text Margin Bottom', 'laurie-blog' ),
			'id'	=> $prefix . 'boxes_intro_margin',
			'def'	=> '50px',
		);

		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Promo Boxes Text 1 Color', 'laurie-blog' ),
			'id'	=> $prefix . 'boxes_text1_color',
			'def'	=> '#0a1628',
		);

		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Promo Boxes Text 1 Color When Hovered (inside the box)', 'laurie-blog' ),
			'id'	=> $prefix . 'boxes_text1_hover_color',
			'def'	=> '#fff',
		);

		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Promo Boxes Text 2 Color', 'laurie-blog' ),
			'id'	=> $prefix . 'boxes_text2_color',
			'def'	=> '#999',
		);

		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Promo Boxes Text BG Color (inside the box)', 'laurie-blog' ),
			'id'	=> $prefix . 'boxes_text_bg_color',
			'def'	=> '#fff',
		);

		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Promo Boxes Text BG Color When Hovered (inside the box)', 'laurie-blog' ),
			'id'	=> $prefix . 'boxes_text_bg_hover_color',
			'def'	=> '#0a1628',
		);

		$options[] = array(
			'type'	=> 'option_color',
			'title' => esc_html__( 'Promo Boxes Text BG Color (outside the box)', 'laurie-blog' ),
			'id'	=> $prefix . 'boxes_text_bg_color_outside',
			'def'	=> '#fff',
		);

		$options[] = array(
			'type'	=> 'option_text',
			'title' => esc_html__( 'Promo Boxes Text Padding (outside the box)', 'laurie-blog' ),
			'id'	=> $prefix . 'boxes_text_padding_outside',
			'def'	=> '35px 0',
		);

		$options[] = array(
			'type'	=> 'option_text',
			'title' => esc_html__( 'Promo Boxes - Intro Text', 'laurie-blog' ),
			'id'	=> $prefix . 'boxes_intro_text',
			'def'	=> '',
		);

		$options[] = array(
			'type'	=> 'option_text',
			'title' => esc_html__( 'Promo Boxes - Intro Link', 'laurie-blog' ),
			'id'	=> $prefix . 'boxes_intro_link',
			'def'	=> '',
		);

		$options[] = array(
			'type'	=> 'option_select',
			'opts'  => array(
				'left' => esc_html__( 'Left', 'laurie-blog' ),
				'center' => esc_html__( 'Center', 'laurie-blog' ),
				'right' => esc_html__( 'Right', 'laurie-blog' ),
			),
			'title' => esc_html__( 'Promo Boxes Text Alignment', 'laurie-blog' ),
			'id'	=> $prefix . 'boxes_intro_text_alignment',
			'def'	=> 'center',
		);

		$options[] = array(
			'type'	=> 'option_text',
			'title' => esc_html__( 'Promo Boxes - Intro Link URL', 'laurie-blog' ),
			'id'	=> $prefix . 'boxes_intro_link_url',
			'def'	=> '#',
		);

		$options[] = array(
			'type'	=> 'option_image',
			'title' => esc_html__( 'Box 1 - Image', 'laurie-blog' ),
			'id'	=> $prefix . 'box1_img',
			'def'	=> get_template_directory_uri() . '/images/box-1.jpg',
		);

		$options[] = array(
			'type'	=> 'option_text',
			'title' => esc_html__( 'Box 1 - URL', 'laurie-blog' ),
			'id'	=> $prefix . 'box1_url',
			'def'	=> '#',
		);

		$options[] = array(
			'type'	=> 'option_text',
			'title' => esc_html__( 'Box 1 - Text 1', 'laurie-blog' ),
			'id'	=> $prefix . 'box1_text1',
			'def'	=> 'Interior Design',
		);

		$options[] = array(
			'type'	=> 'option_text',
			'title' => esc_html__( 'Box 1 - Text 2', 'laurie-blog' ),
			'id'	=> $prefix . 'box1_text2',
			'def'	=> 'Latest News',
		);

		$options[] = array(
			'type'	=> 'option_image',
			'title' => esc_html__( 'Box 2 - Image', 'laurie-blog' ),
			'id'	=> $prefix . 'box2_img',
			'def'	=> get_template_directory_uri() . '/images/box-2.jpg',
		);

		$options[] = array(
			'type'	=> 'option_text',
			'title' => esc_html__( 'Box 2 - URL', 'laurie-blog' ),
			'id'	=> $prefix . 'box2_url',
			'def'	=> '#',
		);

		$options[] = array(
			'type'	=> 'option_text',
			'title' => esc_html__( 'Box 2 - Text 1', 'laurie-blog' ),
			'id'	=> $prefix . 'box2_text1',
			'def'	=> 'Hi! I’m Laurie.'
		);

		$options[] = array(
			'type'	=> 'option_text',
			'title' => esc_html__( 'Box 2 - Text 2', 'laurie-blog' ),
			'id'	=> $prefix . 'box2_text2',
			'def'	=> 'Learn Moew',
		);

		$options[] = array(
			'type'	=> 'option_image',
			'title' => esc_html__( 'Box 3 - Image', 'laurie-blog' ),
			'id'	=> $prefix . 'box3_img',
			'def'	=> get_template_directory_uri() . '/images/box-3.jpg',
		);

		$options[] = array(
			'type'	=> 'option_text',
			'title' => esc_html__( 'Box 3 - URL', 'laurie-blog' ),
			'id'	=> $prefix . 'box3_url',
			'def'	=> '#',
		);

		$options[] = array(
			'type'	=> 'option_text',
			'title' => esc_html__( 'Box 3 - Text 1', 'laurie-blog' ),
			'id'	=> $prefix . 'box3_text1',
			'def'	=> 'Follow On Instagram',
		);

		$options[] = array(
			'type'	=> 'option_text',
			'title' => esc_html__( 'Box 3 - Text 2', 'laurie-blog' ),
			'id'	=> $prefix . 'box3_text2',
			'def'	=> 'Follow Us',
		);

	// Single Post Layout Options
	$options[] = array(
		'type'	=> 'section',
		'id'	=> 'laurie_blog_single_options',
		'title' => esc_html__( 'Single Post Layout Options', 'laurie-blog' ),
	);

		$options[] = array(
			'type'	=> 'option_select',
			'opts'  => array(
				'on' => esc_html__( 'On', 'laurie-blog' ),
				'off' => esc_html__( 'Off', 'laurie-blog' ),
			),
			'title' => esc_html__( 'Sidebar On/Off', 'laurie-blog' ),
			'id'	=> $prefix . 'single_sidebar_on_off',
			'def'	=> 'on',
		);

		$options[] = array(
			'type'	=> 'option_select',
			'opts'  => array(
				'right' => esc_html__( 'Right', 'laurie-blog' ),
				'left' => esc_html__( 'Left', 'laurie-blog' ),
			),
			'title' => esc_html__( 'Sidebar Position', 'laurie-blog' ),
			'id'	=> $prefix . 'single_sidebar_position',
			'def'	=> 'right',
		);

	// Footer Options
	$options[] = array(
		'type'	=> 'section',
		'id'	=> 'laurie_blog_footer_options',
		'title' => esc_html__( 'Footer Options', 'laurie-blog' ),
	);
		$options[] = array(
			'type'	=> 'option_image',
			'title' => esc_html__( 'Footer Logo', 'laurie-blog' ),
			'id'	=> $prefix . 'footer_logo',
			'def'	=> get_template_directory_uri() . '',
		);

		$options[] = array(
			'type'	=> 'option_text',
			'title' => esc_html__( 'Footer Text', 'laurie-blog' ),
			'id'	=> $prefix . 'footer_text',
			'def'	=> 'Donec et metus at nulla pellentesque maximus. Vestibulum vel diam nisl. Vestibulum sit amet arcu orci. Sed fermentum dolor libero, in luctus massa rutrum non. Duis quis tristique orci, quis eleifend mauris ...',
		);

			$options[] = array(
			'type'	=> 'option_select',
			'opts'  => array(
				'on' => esc_html__( 'On', 'laurie-blog' ),
				'off' => esc_html__( 'Off', 'laurie-blog' ),
			),
			'title' => esc_html__( 'Footer Social On/Off', 'laurie-blog' ),
			'id'	=> $prefix . 'footer_social',
			'def'	=> 'on',
		);

			$options[] = array(
			'type'	=> 'option_image',
			'title' => esc_html__( 'Footer Background Img', 'laurie-blog' ),
			'id'	=> $prefix . 'footer_bg',
			'def'	=> get_template_directory_uri() . '/images/footer-bg.jpg',
		);
		$options[] = array(
			'type'	=> 'option_text',
			'title' => esc_html__( 'Footer Text Left', 'laurie-blog' ),
			'id'	=> $prefix . 'footer_text_left',
			'def'	=> 'Class aptent taciti sociosqu ad litora torquent.',
		);

		$options[] = array(
			'type'	=> 'option_text',
			'title' => esc_html__( 'Footer Text Right', 'laurie-blog' ),
			'id'	=> $prefix . 'footer_text_right',
			'def'	=> 'Suspendisse quis accumsan arcu.',
		);

	return $options;

} add_filter( 'laurie_blog_customizer_register', 'laurie_blog_customizer_register_options', 10, 1 );

/**
 * Output custom CSS from color options
 */
function laurie_blog_customizer_frontend_custom_css() {

	// will store CSS in this var
	$custom_css = '';

	// body text color
	if ( $body_text_color = laurie_blog_get_theme_mod( 'body_text_color', false ) ) {
		$custom_css .= 'body { color: ' . $body_text_color . ' } ';
	}

	// top bar bg color
	if ( $top_bar_bg_color = laurie_blog_get_theme_mod( 'top_bar_bg_color', false ) ) {
		$custom_css .= '.top-bar-wrapper { background-color: ' . $top_bar_bg_color . ' } ';
	}

	// top bar text color
	if ( $top_bar_nav_text_color = laurie_blog_get_theme_mod( 'top_bar_nav_text_color', false ) ) {
		$custom_css .= '.top-bar-nav.main-navigation a { color: ' . $top_bar_nav_text_color . ' } ';
	}

	// top bar hover color
	if ( $top_bar_hover_text_color = laurie_blog_get_theme_mod( 'top_bar_hover_text_color', false ) ) {
		$custom_css .= '@media screen and (min-width: 62em) { .top-bar-nav.main-navigation .current-menu-item a, .top-bar-nav.main-navigation .current_page_item a, .top-bar-nav.main-navigation a:hover, .top-bar-nav.main-navigation .sub-menu a:hover, .top-bar-nav.main-navigation a:active, .top-bar-nav.main-navigation .sub-menu a:active, .top-bar-nav.main-navigation a:focus, .top-bar-nav.main-navigation .sub-menu a:focus  { color: ' . $top_bar_hover_text_color . ' } }  ';
	}

	// top bar arrow color
	if ( $top_bar_arrow_color = laurie_blog_get_theme_mod( 'top_bar_arrow_color', false ) ) {
		$custom_css .= '@media screen and (min-width: 62em) { .top-bar-nav .dropdown-toggle:after { color: ' . $top_bar_arrow_color . ' } } ';
	}

	// top bar sub navigation background color
	if ( $top_bar_nav_background_color = laurie_blog_get_theme_mod( 'top_bar_nav_background_color', false ) ) {
		$custom_css .= '@media screen and (min-width: 62em) { .top-bar-nav.main-navigation ul ul.toggled-on  { background-color: ' . $top_bar_nav_background_color . ' } } ';
	}

	// top bar sub navigation border color
	if ( $top_bar_sub_nav_border_color = laurie_blog_get_theme_mod( 'top_bar_sub_nav_border_color', false ) ) {
		$custom_css .= '@media screen and (min-width: 62em) { .top-bar-nav.main-navigation ul ul.toggled-on  { border-color: ' . $top_bar_sub_nav_border_color . ' } } ';
	}

	// top bar sub navigation separator color
	if ( $top_bar_sub_nav_separator_color = laurie_blog_get_theme_mod( 'top_bar_sub_nav_separator_color', false ) ) {
		$custom_css .= '@media screen and (min-width: 62em) { .top-bar-nav.main-navigation li li { border-color: ' . $top_bar_sub_nav_separator_color . ' } } ';
	}

	// top bar sub navigation text color
	if ( $top_bar_sub_nav_text_color = laurie_blog_get_theme_mod( 'top_bar_sub_nav_text_color', false ) ) {
		$custom_css .= '@media screen and (min-width: 62em) { .top-bar-nav.main-navigation .sub-menu a { color: ' . $top_bar_sub_nav_text_color . ' } } ';
	}

	// top bar sub navigation hover color
	if ( $top_bar_sub_nav_hover_text_color = laurie_blog_get_theme_mod( 'top_bar_sub_nav_hover_text_color', false ) ) {
		$custom_css .= '@media screen and (min-width: 62em) { .top-bar-nav.main-navigation .sub-menu .current-menu-item a, .top-bar-nav.main-navigation .sub-menu a:hover, .top-bar-nav.main-navigation .sub-menu a:active, .top-bar-nav.main-navigation .sub-menu a:focus  { color: ' . $top_bar_sub_nav_hover_text_color . ' } } ';
	}

	// top bar sub navigation arrow color
	if ( $top_bar_sub_nav_arrow_color = laurie_blog_get_theme_mod( 'top_bar_sub_nav_arrow_color', false ) ) {
		$custom_css .= '@media screen and (min-width: 62em) { .top-bar-nav .sub-menu .dropdown-toggle:after { color: ' . $top_bar_sub_nav_arrow_color . ' } } ';
	}

	// header bg color
	if ( $header_bg_color = laurie_blog_get_theme_mod( 'header_bg_color', false ) ) {
		$custom_css .= '.site-header { background-color: ' . $header_bg_color . ' } ';
	}

	// header 3 bg color
	if ( $header_3_bg_color = laurie_blog_get_theme_mod( 'header_3_bg_color', false ) ) {
		$custom_css .= '#desktop-site-navigation.header-3-nav { background-color: ' . $header_3_bg_color . ' } ';
	}

	// site title color
	if ( $site_title_color = laurie_blog_get_theme_mod( 'site_title_color', false ) ) {
		$custom_css .= '.site-title { color: ' . $site_title_color . ' } ';
	}

	// site tagline color
	if ( $site_tagline_color = laurie_blog_get_theme_mod( 'site_tagline_color', false ) ) {
		$custom_css .= '.site-description { color: ' . $site_tagline_color . ' } ';
	}

	// top bar social icons color
	if ( $top_social_icons_color = laurie_blog_get_theme_mod( 'top_social_icons_color', false ) ) {
		$custom_css .= '.top-bar-wrapper #social-header li a { color: ' . $top_social_icons_color . ' } ';
	}

	// top bar social icons color hover
	if ( $top_social_icons_hover_color = laurie_blog_get_theme_mod( 'top_social_icons_hover_color', false ) ) {
		$custom_css .= '.top-bar-wrapper #social-header li a:hover, .top-bar-wrapper #social-header li a:focus, .top-bar-wrapper #social-header li a:active { color: ' . $top_social_icons_hover_color . ' } ';
	}

	// header social icons color
	if ( $social_icons_color = laurie_blog_get_theme_mod( 'social_icons_color', false ) ) {
		$custom_css .= '#social-header li a { color: ' . $social_icons_color . ' } ';
	}

	// header social icons color hover
	if ( $social_icons_hover_color = laurie_blog_get_theme_mod( 'social_icons_hover_color', false ) ) {
		$custom_css .= '#social-header li a:hover, #social-header li a:focus, #social-header li a:active { color: ' . $social_icons_hover_color . ' } ';
	}

	// top bar search text color
	if ( $top_search_text_color = laurie_blog_get_theme_mod( 'top_search_text_color', false ) ) {
		$custom_css .= '.top-bar-wrapper ::-webkit-input-placeholder { color: ' . $top_search_text_color . ' } .top-bar-wrapper ::-moz-placeholder { color: ' . $top_search_text_color . ' } ';
	}

	// Top bar search text color hover
	if ( $top_search_text_active_color = laurie_blog_get_theme_mod( 'top_search_text_active_color', false ) ) {
		$custom_css .= '#top-bar .search-form input:focus { color: ' . $top_search_text_active_color . ' } ';
	}

	// top bar search icon color
	if ( $top_search_icon_color = laurie_blog_get_theme_mod( 'top_search_icon_color', false ) ) {
		$custom_css .= '#top-bar .search-icon, #top-bar .search-toggle:after, #top-bar .search-icon:after { color: ' . $top_search_icon_color . ' } ';
	}

	// header search text color
	if ( $search_text_color = laurie_blog_get_theme_mod( 'search_text_color', false ) ) {
		$custom_css .= 'header ::-webkit-input-placeholder { color: ' . $search_text_color . ' } header ::-moz-placeholder { color: ' . $search_text_color . ' } ';
	}

	// header search text color
	if ( $search_text_active_color = laurie_blog_get_theme_mod( 'search_text_active_color', false ) ) {
		$custom_css .= '.site-header-wrapper .search-form input:focus { color: ' . $search_text_active_color . ' } ';
	}

	// mobile  search text color
	if ( $mobile_search_text_color = laurie_blog_get_theme_mod( 'mobile_search_text_color', false ) ) {
		$custom_css .= '.mobile-search ::-webkit-input-placeholder { color: ' . $mobile_search_text_color . ' } .mobile-search ::-moz-placeholder { color: ' . $mobile_search_text_color . ' } ';
	}

	// mobile  search text color hover
	if ( $mobile_search_text_active_color = laurie_blog_get_theme_mod( 'mobile_search_text_active_color', false ) ) {
		$custom_css .= '.site-header-wrapper .mobile-search .search-form input:focus { color: ' . $mobile_search_text_active_color . ' } ';
	}

	// header search icon color
	if ( $search_icon_color = laurie_blog_get_theme_mod( 'search_icon_color', false ) ) {
		$custom_css .= '@media screen and (min-width: 62em) { .search-icon, .search-toggle:after, .search-icon:after { color: ' . $search_icon_color . ' } } ';
	}

	// mobile search icon color
	if ( $mobile_search_icon_color = laurie_blog_get_theme_mod( 'mobile_search_icon_color', false ) ) {
		$custom_css .= '.mobile-search .search-icon, .mobile-search .search-toggle:after, .mobile-search .search-icon:after { color: ' . $mobile_search_icon_color . ' } ';
	}

	// desktop navigation text color
	if ( $desktop_nav_text_color = laurie_blog_get_theme_mod( 'desktop_nav_text_color', false ) ) {
		$custom_css .= '@media screen and (min-width: 62em) { .main-navigation a, .header-3-nav.main-navigation a { color: ' . $desktop_nav_text_color . ' } } ';
	}

	// desktop navigation hover color
	if ( $desktop_nav_hover_text_color = laurie_blog_get_theme_mod( 'desktop_nav_hover_text_color', false ) ) {
		$custom_css .= '@media screen and (min-width: 62em) { .main-navigation .current-menu-item a, .main-navigation .current_page_item a, .main-navigation a:hover, .main-navigation a:active, .main-navigation a:focus  { color: ' . $desktop_nav_hover_text_color . ' } } ';
	}

	// desktop navigation arrow color
	if ( $desktop_nav_arrow_color = laurie_blog_get_theme_mod( 'desktop_nav_arrow_color', false ) ) {
		$custom_css .= '@media screen and (min-width: 62em) { .dropdown-toggle:after, .header-3-nav .dropdown-toggle:after { color: ' . $desktop_nav_arrow_color . ' } } ';
	}

	// desktop sub navigation background color
	if ( $desktop_sub_nav_background_color = laurie_blog_get_theme_mod( 'desktop_sub_nav_background_color', false ) ) {
		$custom_css .= '@media screen and (min-width: 62em) { .main-navigation ul ul.toggled-on, .header-3-nav.main-navigation ul ul.toggled-on  { background-color: ' . $desktop_sub_nav_background_color . ' } } ';
	}

	// desktop sub navigation border color
	if ( $desktop_sub_nav_border_color = laurie_blog_get_theme_mod( 'desktop_sub_nav_border_color', false ) ) {
		$custom_css .= '@media screen and (min-width: 62em) { .main-navigation ul ul.toggled-on, .header-3-nav.main-navigation ul ul.toggled-on  { border-color: ' . $desktop_sub_nav_border_color . ' } } ';
	}

	// desktop sub navigation separator color
	if ( $desktop_sub_nav_separator_color = laurie_blog_get_theme_mod( 'desktop_sub_nav_separator_color', false ) ) {
		$custom_css .= '@media screen and (min-width: 62em) { .main-navigation .sub-menu li, .header-3-nav.main-navigation li li { border-color: ' . $desktop_sub_nav_separator_color . ' } } ';
	}

	// desktop sub navigation text color
	if ( $desktop_sub_nav_text_color = laurie_blog_get_theme_mod( 'desktop_sub_nav_text_color', false ) ) {
		$custom_css .= '@media screen and (min-width: 62em) { .main-navigation .sub-menu a, .main-navigation .current-menu-item .sub-menu a, .main-navigation .current_page_item .sub-menu a { color: ' . $desktop_sub_nav_text_color . ' } } ';
	}

	// desktop sub navigation hover color
	if ( $desktop_sub_nav_hover_text_color = laurie_blog_get_theme_mod( 'desktop_sub_nav_hover_text_color', false ) ) {
		$custom_css .= '@media screen and (min-width: 62em) { .main-navigation .current-menu-item .sub-menu .current-menu-item a, .main-navigation .current_page_item .sub-menu .current_page_item a,.main-navigation .sub-menu a:hover, .main-navigation .sub-menu a:active, .main-navigation .sub-menu a:focus  { color: ' . $desktop_sub_nav_hover_text_color . ' } } ';
	}

	// desktop sub navigation arrow color
	if ( $desktop_sub_nav_arrow_color = laurie_blog_get_theme_mod( 'desktop_sub_nav_arrow_color', false ) ) {
		$custom_css .= '@media screen and (min-width: 62em) { .sub-menu .dropdown-toggle:after { color: ' . $desktop_sub_nav_arrow_color . ' } } ';
	}

	// mobile menu toggle color
	if ( $mobile_toggle_color = laurie_blog_get_theme_mod( 'mobile_toggle_color', false ) ) {
		$custom_css .= '.menu-toggle { color: ' . $mobile_toggle_color . ' } ';
	}

	// mobile menu background color
	if ( $mobile_nav_top = laurie_blog_get_theme_mod( 'mobile_nav_top', false ) ) {
		$custom_css .= '.nav-wrapper { top: ' . $mobile_nav_top . ' } ';
	}

	// mobile menu background color
	if ( $mobile_bg_color = laurie_blog_get_theme_mod( 'mobile_bg_color', false ) ) {
		$custom_css .= '.nav-wrapper { background-color: ' . $mobile_bg_color . ' } ';
	}

	// mobile menu text color
	if ( $mobile_text_color = laurie_blog_get_theme_mod( 'mobile_text_color', false ) ) {
		$custom_css .= '.main-navigation #primary-menu-mobile a { color: ' . $mobile_text_color . ' } ';
	}

	// mobile menu current / hover / activbe text color
	if ( $mobile_hover_color = laurie_blog_get_theme_mod( 'mobile_hover_color', false ) ) {
		$custom_css .= '.main-navigation #primary-menu-mobile .current-menu-item a,.main-navigation #primary-menu-mobile .current_page_item a, .main-navigation #primary-menu-mobile a:hover, .main-navigation #primary-menu-mobile a:active, .main-navigation #primary-menu-mobile a:focus  { color: ' . $mobile_hover_color . ' } ';
	}

	// mobile navigation separator color
	if ( $mobile_separator_color = laurie_blog_get_theme_mod( 'mobile_separator_color', false ) ) {
		$custom_css .= '.main-navigation #primary-menu-mobile li { border-color: ' . $mobile_separator_color . ' } ';
	}

	// mobile menu arrow color
	if ( $mobile_arrow_color = laurie_blog_get_theme_mod( 'mobile_arrow_color', false ) ) {
		$custom_css .= '#primary-menu-mobile .dropdown-toggle:after { color: ' . $mobile_arrow_color . ' } ';
	}

	// mobile header padding
	if ( $header_padding = laurie_blog_get_theme_mod( 'header_padding', false ) ) {
		$custom_css .= '@media screen and (max-width: 62em) { #masthead .site-header-wrapper { padding: ' . $header_padding . ' } } ';
	}

	// mobile social icons color
	if ( $mobile_social_icons_color = laurie_blog_get_theme_mod( 'mobile_social_icons_color', false ) ) {
		$custom_css .= '#social-mobile li a { color: ' . $mobile_social_icons_color . ' } ';
	}

	// mobile social icons color
	if ( $mobile_social_icons_hover_color = laurie_blog_get_theme_mod( 'mobile_social_icons_hover_color', false ) ) {
		$custom_css .= '#social-mobile li a:hover, #social-mobile li a:focus, #social-mobile li a:active { color: ' . $mobile_social_icons_hover_color . ' } ';
	}

	// top bar sub navigation margin
	if ( $top_bar_alignment = laurie_blog_get_theme_mod( 'top_bar_alignment', false ) ) {
		$custom_css .= '@media screen and (min-width: 62em) { #top-bar-navigation { text-align: ' . $top_bar_alignment . ' } }';
	}

	// top bar padding
	if ( $top_bar_padding = laurie_blog_get_theme_mod( 'top_bar_padding', false ) ) {
		$custom_css .= '.top-bar-wrapper { padding: ' . $top_bar_padding . ' }';
	}

	// top bar sub navigation margin
	if ( $top_bar_sub_margin = laurie_blog_get_theme_mod( 'top_bar_sub_margin', false ) ) {
		$custom_css .= '@media screen and (min-width: 62em) { .top-bar-nav.main-navigation ul ul.toggled-on { top: ' . $top_bar_sub_margin . ' } }';
	}

	// header margin
	if ( $header_margin = laurie_blog_get_theme_mod( 'header_margin', false ) ) {
		$custom_css .= '@media screen and (min-width: 62em) { #masthead.site-header { margin-bottom: ' . $header_margin . ' } }';
	}

	// mobile search padding
	if ( $search_padding = laurie_blog_get_theme_mod( 'search_padding', false ) ) {
		$custom_css .= '.search-toggle, .search-toggle-active { padding: ' . $search_padding . ' } ';
	}

	// mobile search field padding
	if ( $search_field_padding = laurie_blog_get_theme_mod( 'search_field_padding', false ) ) {
		$custom_css .= '.site-header .search-form input { padding: ' . $search_field_padding . ' } ';
	}

	// mobile menu padding
	if ( $menu_padding = laurie_blog_get_theme_mod( 'menu_padding', false ) ) {
		$custom_css .= '.menu-toggle { padding: ' . $menu_padding . ' } ';
	}

	// mobile slider margin
	if ( $slider_margin = laurie_blog_get_theme_mod( 'slider_margin', false ) ) {
		$custom_css .= '#slider-1, #slider-2,#slider-3, #slider-4,#slider-5 { margin: ' . $slider_margin . ' }';
	}

		// desktop slider margin bottom
	if ( $slider_desktop_margin = laurie_blog_get_theme_mod( 'slider_desktop_margin', false ) ) {
			$custom_css .= '@media screen and (min-width: 62em) { #slider-1, #slider-2, #slider-3, #slider-4,#slider-5 { margin: ' . $slider_desktop_margin . ' } }';
	}

	// desktop header padding
	if ( $desktop_header_padding = laurie_blog_get_theme_mod( 'desktop_header_padding', false ) ) {
		$custom_css .= '@media screen and (min-width: 62em) { .site-header-wrapper.header-1,.site-header-wrapper.header-2,.site-header-wrapper.header-3 { padding: ' . $desktop_header_padding . ' } }';
	}

	// desktop sub navigation margin
	if ( $desktop_sub_margin = laurie_blog_get_theme_mod( 'desktop_sub_margin', false ) ) {
		$custom_css .= '@media screen and (min-width: 62em) { .main-navigation ul ul.toggled-on, .header-3-nav.main-navigation ul ul.toggled-on { top: ' . $desktop_sub_margin . ' } }';
	}

	// mobile content margin
	if ( $mobile_content_margin = laurie_blog_get_theme_mod( 'mobile_content_margin', false ) ) {
		$custom_css .= '@media screen and (max-width: 62em) { #page { margin-top: ' . $mobile_content_margin . ' } }';
	}

	// desktop content margin top
	if ( $desktop_content_margin = laurie_blog_get_theme_mod( 'desktop_content_margin', false ) ) {
		$custom_css .= '@media screen and (min-width: 62em) { .single .site-content, .archive .site-content, .page .site-content, .search .site-content, .category .site-content, .error404 .site-content, .woocommerce .site-content { margin-top: ' . $desktop_content_margin . ' } }';
	}

	// homepage content margin top
	if ( $homepage_content_margin = laurie_blog_get_theme_mod( 'homepage_content_margin', false ) ) {
		$custom_css .= '@media screen and (min-width: 62em) { .home .site-content { margin-top: ' . $homepage_content_margin . ' } }';
	}

	// mobile content margin
	if ( $desktop_social_margin = laurie_blog_get_theme_mod( 'desktop_social_margin', false ) ) {
		$custom_css .= '@media screen and (min-width: 80em) { .header-1 #social-header { margin-right: ' . $desktop_social_margin . ' } }';
	}

	// promo boxes background color
	if ( $boxes_bg_color = laurie_blog_get_theme_mod( 'boxes_bg_color', false ) ) {
		$custom_css .= '#promo-boxes { background-color: ' . $boxes_bg_color . ' } ';
	}

	// promo boxes intro text color
	if ( $boxes_intro_text_color = laurie_blog_get_theme_mod( 'boxes_intro_text_color', false ) ) {
		$custom_css .= '.promo-box-intro p { color: ' . $boxes_intro_text_color . ' } ';
	}

	// promo boxes intro link color
	if ( $boxes_intro_link_color = laurie_blog_get_theme_mod( 'boxes_intro_link_color', false ) ) {
		$custom_css .= '.promo-box-intro a { color: ' . $boxes_intro_link_color . ' } ';
	}

	// promo boxes intro margin bottom
	if ( $boxes_intro_margin = laurie_blog_get_theme_mod( 'boxes_intro_margin', false ) ) {
		$custom_css .= '.promo-box-intro { margin-bottom: ' . $boxes_intro_margin . ' } ';
	}

	// promo boxes text 1 color
	if ( $boxes_text1_color = laurie_blog_get_theme_mod( 'boxes_text1_color', false ) ) {
		$custom_css .= '.promo-box-content .title, .promo-box-inside .promo-box-content span { color: ' . $boxes_text1_color . ' } ';
	}

	// promo boxes text 1 hover color
	if ( $boxes_text1_hover_color = laurie_blog_get_theme_mod( 'boxes_text1_hover_color', false ) ) {
		$custom_css .= '.promo-box-inside:hover .promo-box-content span { color: ' . $boxes_text1_hover_color . ' } ';
	}

	// promo boxes text 2 color
	if ( $boxes_text2_color = laurie_blog_get_theme_mod( 'boxes_text2_color', false ) ) {
		$custom_css .= '.promo-box-content .action { color: ' . $boxes_text2_color . ' } ';
	}

	// promo boxes text aligment
	if ( $boxes_intro_text_alignment = laurie_blog_get_theme_mod( 'boxes_intro_text_alignment', false ) ) {
		$custom_css .= '.promo-box-intro { text-align: ' . $boxes_intro_text_alignment . ' } ';
	}	

	// promo boxes text background color
	if ( $boxes_text_bg_color = laurie_blog_get_theme_mod( 'boxes_text_bg_color', false ) ) {
		$custom_css .= '.promo-box-inside .promo-box-content span { background-color: ' . $boxes_text_bg_color . ' } ';
	}

	// promo boxes text background hover color
	if ( $boxes_text_bg_hover_color = laurie_blog_get_theme_mod( 'boxes_text_bg_hover_color', false ) ) {
		$custom_css .= '.promo-box-inside:hover .promo-box-content span { background-color: ' . $boxes_text_bg_hover_color . ' } ';
	}

	// promo boxes text background color outside
	if ( $boxes_text_bg_color_outside = laurie_blog_get_theme_mod( 'boxes_text_bg_color_outside', false ) ) {
		$custom_css .= '.promo-box-content { background-color: ' . $boxes_text_bg_color_outside . ' } ';
	}

	// promo boxes text padding color outside
	if ( $boxes_text_padding_outside = laurie_blog_get_theme_mod( 'boxes_text_padding_outside', false ) ) {
		$custom_css .= '.promo-box-content { padding: ' . $boxes_text_padding_outside . ' } ';
	}

	

	// promo boxes padding
	if ( $boxes_padding = laurie_blog_get_theme_mod( 'boxes_padding', false ) ) {
		$custom_css .= '@media screen and (min-width: 62em) { #promo-boxes { padding: ' . $boxes_padding . ' } } ';
	}

	// append to style.css
	wp_add_inline_style( 'laurie-blog-style', $custom_css );

} add_action( 'wp_enqueue_scripts', 'laurie_blog_customizer_frontend_custom_css', 11 );

/**
 * Add options to customizer
 */
function laurie_blog_customizer_register( $wp_customize ) {
	
	$customizer_options = apply_filters( 'laurie_blog_customizer_register', array() );

	$section_priority = 200;
	$setting_priority = 5;
	$current_section_id = '';
	$current_setting_id = '';
	
	foreach ( $customizer_options as $customizer_option ) {

		if( $customizer_option['type'] == 'section' ){
			
			/* New Section */
			
			$section_priority += 50;
			$setting_priority = 5;
			$current_section_id = $customizer_option['id'];

			if ( ! isset( $customizer_option['descr'] ) )
				$customizer_option['descr'] = '';
			
			$wp_customize->add_section( $current_section_id, array(
				'title' => $customizer_option['title'],
				'priority' => $section_priority,
				'description' => $customizer_option['descr']
			) );
			
		} elseif ( $customizer_option['type'] == 'option_color' ) {
			
			/* New Option (COLOR) */
			
			$current_setting_id = $customizer_option['id'];
			$setting_priority += 5;
			
			$wp_customize->add_setting( $current_setting_id, array(
				'default' => $customizer_option['def'],
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_html',
			) );
			
				$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $current_setting_id, array(
					'label' => $customizer_option['title'],
					'section' => $current_section_id,
					'priority' => $setting_priority
				) ) );
			
		} elseif ( $customizer_option['type'] == 'option_text' ) {
			
			/* New Option (TEXT) */
			
			$current_setting_id = $customizer_option['id'];
			$setting_priority += 5;

			if ( ! isset( $customizer_option['descr'] ) )
				$customizer_option['descr'] = '';

			$wp_customize->add_setting( $current_setting_id, array(
				'default'	=> $customizer_option['def'],
				'type'		=> 'theme_mod',
				'sanitize_callback' => 'esc_html',
			) );
				
				$wp_customize->add_control( $current_setting_id, array(
					'label'		=> $customizer_option['title'],
					'description' => $customizer_option['descr'],
					'section' 	=> $current_section_id,
					'type'		=> 'text',
					'priority'	=> $setting_priority
				));

		} elseif ( $customizer_option['type'] == 'option_textarea' ) {
			
			/* New Option (TEXT) */
			
			$current_setting_id = $customizer_option['id'];
			$setting_priority += 5;

			if ( ! isset( $customizer_option['descr'] ) )
				$customizer_option['descr'] = '';

			$wp_customize->add_setting( $current_setting_id, array(
				'default'	=> $customizer_option['def'],
				'type'		=> 'theme_mod',
				'sanitize_callback' => 'esc_html',
			) );
				
				$wp_customize->add_control( $current_setting_id, array(
					'label'		=> $customizer_option['title'],
					'description' => $customizer_option['descr'],
					'section' 	=> $current_section_id,
					'type'		=> 'textarea',
					'priority'	=> $setting_priority
				));
			
		} elseif ( $customizer_option['type'] == 'option_select' ) {
			
			/* New Option (SELECT) */
			
			$current_setting_id = $customizer_option['id'];
			$setting_priority += 5;
			
			$wp_customize->add_setting( $current_setting_id, array(
				'default'	=> $customizer_option['def'],
				'type'		=> 'theme_mod',
				'sanitize_callback' => 'esc_html',
			) );
				
				$wp_customize->add_control( $current_setting_id, array(
					'label'		=> $customizer_option['title'],
					'section' 	=> $current_section_id,
					'type'		=> 'select',
					'choices'	=> $customizer_option['opts'],
					'priority'	=> $setting_priority,
				));
			
		} elseif ( $customizer_option['type'] == 'option_checkbox' ) {
			
			/* New Option (checkbox) */
			
			$current_setting_id = $customizer_option['id'];
			$setting_priority += 5;
			
			$wp_customize->add_setting( $current_setting_id, array(
				'default'	=> $customizer_option['def'],
				'type'		=> 'theme_mod',
				'sanitize_callback' => 'esc_html',
			) );
				
				$wp_customize->add_control( $current_setting_id, array(
					'label'		=> $customizer_option['title'],
					'section' 	=> $current_section_id,
					'type'		=> 'checkbox',
					'priority'	=> $setting_priority,
				));
			
		} elseif ( $customizer_option['type'] == 'option_image' ) {
			
			/* New Option (image) */
			
			$current_setting_id = $customizer_option['id'];
			$setting_priority += 5;
			
			$wp_customize->add_setting( $current_setting_id, array(
				'default'	=> $customizer_option['def'],
				'type'		=> 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			
				$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $current_setting_id, array(
					'label'		=> $customizer_option['title'],
					'section' 	=> $current_section_id,
					'priority'	=> $setting_priority,
				) ) );
			
		}
		
	}

} add_action( 'customize_register', 'laurie_blog_customizer_register' );