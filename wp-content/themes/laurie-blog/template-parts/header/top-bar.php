<?php
/**
 * Template part for displaying navigation
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Laurie_Blog
 */

// Social options

$top_social_on_off = laurie_blog_get_theme_mod( 'top_social_on_off', 'on' );
$top_search_on_off = laurie_blog_get_theme_mod( 'top_search_on_off', 'on' );
$top_menu_on_off = laurie_blog_get_theme_mod( 'top_menu_on_off', 'on' );
$header_facebook = laurie_blog_get_theme_mod( 'header_facebook', '' );
$header_twitter = laurie_blog_get_theme_mod( 'header_twitter', '' );
$header_instagram = laurie_blog_get_theme_mod( 'header_instagram', '' );
$header_pinterest = laurie_blog_get_theme_mod( 'header_pinterest', '' );
$header_behance = laurie_blog_get_theme_mod( 'header_behance', '' );
$header_etsy = laurie_blog_get_theme_mod( 'header_etsy', '' );
$header_youtube = laurie_blog_get_theme_mod( 'header_youtube', '' );

?>


<div class="top-bar-wrapper">

	<div id="top-bar" class="row">

		<div class="top-bar-content">

			<?php if ( $top_social_on_off == 'on' ) : ?>

				<div class="small-2 columns">

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

				</div>

			<?php endif; ?>

			<?php if ( $top_menu_on_off == 'on' ) : 

				if ( $top_social_on_off == 'on' && $top_search_on_off == 'on' ) : ?>

					<nav id="top-bar-navigation" class="main-navigation top-bar-nav small-8 columns">

				<?php elseif ( $top_social_on_off == 'on' && $top_search_on_off == 'off' || $top_social_on_off == 'off' && $top_search_on_off == 'on' ) : ?> 

					<nav id="top-bar-navigation" class="main-navigation top-bar-nav small-10 columns">

				<?php else : ?> 

					<nav id="top-bar-navigation" class="main-navigation top-bar-nav small-12 columns">

				<?php endif; ?>

					<?php wp_nav_menu( array( 'theme_location' => 'top-bar-menu', 'menu_id' => 'primary-menu', 'menu_class' => 'nav-menu' ) ); ?>
					</nav><!-- #site-navigation -->

			<?php endif; ?>

			<?php if ( $top_search_on_off == 'on' ) : ?>

				<div class="small-2 columns">
				
					<?php get_search_form(); ?>

				</div>

			<?php endif; ?>

		</div>

	</div>

</div>