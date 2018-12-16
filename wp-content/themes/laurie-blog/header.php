<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Laurie_Blog
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php $wide_boxed = laurie_blog_get_theme_mod( 'wide_boxed', 'wide' ); if ( $wide_boxed == 'wide' ) : ?> 
	<div id="page" class="site">
<?php else : ?>
	<div id="page" class="boxed site">
<?php endif; ?>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'laurie-blog' ); ?></a>

<?php
	// Header Style
	$header = laurie_blog_get_theme_mod( 'header_style', 'header-1' );
?>

<?php if ( has_header_image() ) : ?>
	<header style="background-image: url(<?php header_image(); ?>);" id="masthead" class="site-header site-header-<?php echo esc_attr( $header ); ?>">
<?php else : ?>
	<header id="masthead" class="site-header site-header-<?php echo esc_attr( $header ); ?>">
<?php endif; ?>


	<?php 
		// Top Bar
		if ( laurie_blog_get_theme_mod( 'top_bar_on_off', 'off' ) == 'on' ) : 
		get_template_part( 'template-parts/header/top-bar' );	
		endif;
	?>

	<?php 
		get_template_part( 'template-parts/header/headers/' . $header );
	?>

	<!-- Mobile Navigation -->
	<?php get_template_part( 'template-parts/header/mobile-navigation' ); ?>			

</header>

	<?php if ( laurie_blog_get_theme_mod( 'header_style', 'header-1' ) == 'header-3' ) : ?>
				<nav id="desktop-site-navigation" class="main-navigation header-3-nav">
					<?php wp_nav_menu( array( 'theme_location' => 'header-1-menu', 'menu_id' => 'primary-menu', 'menu_class' => 'nav-menu' ) ); ?>
				</nav><!-- #site-navigation -->
	<?php endif ?>

	<?php 
		// Slider
		if ( is_front_page() && is_home() && laurie_blog_get_theme_mod( 'slider_on_off', 'off' ) == 'on' ) : 
			// Slider Style
			$slider = laurie_blog_get_theme_mod( 'slider_style', 'slider-1' );
			get_template_part( 'template-parts/header/sliders/' . $slider );
		endif;
		// Promo Boxes
		if ( is_front_page() && is_home() && laurie_blog_get_theme_mod( 'boxes_on_off', 'off' ) == 'on' ) : 
		get_template_part( 'template-parts/header/modules/promo-boxes' );	
		endif;
		// Newsletter
		if ( is_front_page() && is_home() && laurie_blog_get_theme_mod( 'newsletter_on_off', 'off' ) == 'on' ) : 
		get_template_part( 'template-parts/header/modules/newsletter' );	
		endif;
		// Intro Boxes
		if ( is_front_page() && is_home() && laurie_blog_get_theme_mod( 'intro_box_on_off', 'off' ) == 'on' ) : 
		get_template_part( 'template-parts/header/modules/intro-box' );	
		endif;
	?>	
	
	<div id="content" class="site-content row">