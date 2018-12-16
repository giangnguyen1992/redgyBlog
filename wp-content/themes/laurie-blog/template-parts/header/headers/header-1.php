<?php

	/**
	 * Template part for displaying header 1
	 *
	 * @link https://codex.wordpress.org/Template_Hierarchy
	 *
	 * @package laurie_blog
	 */

// Social options

$social_on_off = laurie_blog_get_theme_mod( 'social_on_off', 'on' );
$header_facebook = laurie_blog_get_theme_mod( 'header_facebook', '' );
$header_twitter = laurie_blog_get_theme_mod( 'header_twitter', '' );
$header_instagram = laurie_blog_get_theme_mod( 'header_instagram', '' );
$header_pinterest = laurie_blog_get_theme_mod( 'header_pinterest', '' );
$header_behance = laurie_blog_get_theme_mod( 'header_behance', '' );
$header_etsy = laurie_blog_get_theme_mod( 'header_etsy', '' );
$header_youtube = laurie_blog_get_theme_mod( 'header_youtube', '' );

// Search options

$search_on_off = laurie_blog_get_theme_mod( 'search_on_off', 'on' );
$top_search_on_off = laurie_blog_get_theme_mod( 'top_search_on_off', 'on' );

?>

	<div class="site-header-wrapper header-1 row">

		<div class="small-12 column">

			<div class="header-1-primary">

				<div class="site-branding">

					<?php 
							if ( has_custom_logo() ) :
							$custom_logo_id = get_theme_mod( 'custom_logo' );
							$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
						?>

						<a class="custom-logo-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img class="custom-logo" src="<?php echo esc_url($image[0]) ?>" alt="<?php echo esc_attr_e( get_bloginfo( 'name' ) ); ?>" />
						</a>

						<?php elseif ( is_front_page() && is_home() ) : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php else : ?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php endif; ?>

						<?php  
							$description = get_bloginfo( 'description', 'display' );
							if ( $description || is_customize_preview() ) : 
						?>

							<p class="site-description"><?php echo esc_html($description); /* WPCS: xss ok. */ ?></p>

					<?php endif; ?>

				</div><!-- .site-branding -->

				<nav class="main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'header-1-menu', 'menu_id' => 'primary-menu', 'menu_class' => 'nav-menu' ) ); ?>
				</nav><!-- #site-navigation -->

			</div><!-- .header-1-primary -->

			<div class="header-1-elements">

				<!-- Seach Box -->
				<?php if ( $search_on_off == 'on' ) : ?>

					<div class="desktop-search">
						
						<button class="search-toggle"></button>

						<?php get_search_form(); ?>

					</div>

				<?php endif; ?>

				<!-- Desktop Social -->
				<?php if ( $social_on_off == 'on' ) : ?>

					<ul id="social-header">

						<?php if ( $header_facebook ) :  ?>
							<li><a href="<?php echo esc_url( $header_facebook ); ?>"><i class="fa fa-facebook"></i></a></li>
						<?php endif; ?>
						<?php if ( $header_twitter ) :  ?>
							<li><a href="<?php echo esc_url( $header_twitter ); ?>"><i class="fa fa-twitter"></i></a></li>
						<?php endif; ?>
						<?php if ( $header_instagram ) :  ?>
							<li><a href="<?php echo esc_url( $header_instagram ); ?>"><i class="fa fa-instagram"></i></a></li>
						<?php endif; ?>
						<?php if ( $header_pinterest ) :  ?>
							<li><a href="<?php echo esc_url( $header_pinterest ); ?>"><i class="fa fa-pinterest"></i></a></li>
						<?php endif; ?>
						<?php if ( $header_behance ) :  ?>
							<li><a href="<?php echo esc_url( $header_behance ); ?>"><i class="fa fa-behance"></i></a></li>
						<?php endif; ?>
						<?php if ( $header_etsy ) :  ?>
							<li><a href="<?php echo esc_url( $header_etsy ); ?>"><i class="fa fa-etsy"></i></a></li>
						<?php endif; ?>
						<?php if ( $header_youtube ) :  ?>
							<li><a href="<?php echo esc_url( $header_youtube ); ?>"><i class="fa fa-youtube-play"></i></a></li>
						<?php endif; ?>

					</ul>

				<?php endif; ?>
				
			</div>

			<?php if ( $search_on_off == 'on' || $top_search_on_off == 'on' ) : ?>

				<div class="mobile-search">
					
					<button class="search-toggle"></button>

					<?php get_search_form(); ?>

				</div>

			<?php endif; ?>

		</div>

	</div>
