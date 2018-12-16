<?php
/**
 * Template part for displaying navigation
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Laurie_Blog
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

?>

<nav id="site-navigation" class="main-navigation">

	<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><!-- <span class="fa fa-bars"></span> --></button>

	<div class="nav-wrapper">

		<?php 

			if ( has_nav_menu( 'menu-mobile' ) ) {

				wp_nav_menu( array( 'theme_location' => 'menu-mobile', 'menu_id' => 'primary-menu-mobile', 'menu_class' => 'nav-menu' ) ); 
			}

		?>

		<?php if ( $social_on_off == 'on' ) : ?>

				<ul id="social-mobile">

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

</nav>