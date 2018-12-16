<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Laurie_Blog
 */

$footer_logo = laurie_blog_get_theme_mod( 'footer_logo' );
$footer_text = laurie_blog_get_theme_mod( 'footer_text', '' );
$footer_social = laurie_blog_get_theme_mod( 'footer_social', '' );
$footer_bg = laurie_blog_get_theme_mod( 'footer_bg', get_template_directory_uri() . '' );
$footer_text_left = laurie_blog_get_theme_mod( 'footer_text_left', '' );
$footer_text_right = laurie_blog_get_theme_mod( 'footer_text_right', '' );
$footer_social = laurie_blog_get_theme_mod( 'footer_social', 'on' );
$header_facebook = laurie_blog_get_theme_mod( 'header_facebook', '' );
$header_twitter = laurie_blog_get_theme_mod( 'header_twitter', '' );
$header_instagram = laurie_blog_get_theme_mod( 'header_instagram', '' );
$header_pinterest = laurie_blog_get_theme_mod( 'header_pinterest', '' );
$header_behance = laurie_blog_get_theme_mod( 'header_behance', '' );
$header_etsy = laurie_blog_get_theme_mod( 'header_etsy', '' );
$header_youtube = laurie_blog_get_theme_mod( 'header_youtube', '' );

?>

	</div><!-- #content -->

	<?php if ( $footer_bg ) :  ?>

		<footer style="background-image: url(<?php echo esc_url( $footer_bg ); ?>);" class="footer-bg" id="colophon">

	<?php else : ?>

		<footer id="colophon">

	<?php endif ?>

		<div class="site-footer row"> 

			<div class="site-footer-content column">

				<?php if ( $footer_logo ) : ?>

				<div class="footer-logo"><img src="<?php echo esc_url( $footer_logo ); ?>" alt="<?php esc_attr_e( 'Footer logo', 'laurie-blog' ); ?>"></div>

				<?php endif; ?>

				<?php if ( $footer_text ) :  ?>

				<div class="footer-text"><?php echo esc_html( $footer_text ); ?></div>

				<?php endif; ?>	

				<?php if ( $footer_social == 'on' ) : ?>

				<ul id="social-footer">

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

		</div>

	</footer><!-- #footer-widgets -->

	<div id="footer-widgets">

		<div class="row"> 

			<?php if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) ) : ?>

					<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
					<div class="footer-widgets-1 small-12 large-4 column">
					<?php dynamic_sidebar( 'footer-1' ); ?>
					</div><!-- .footer-widgets-1 -->
					<?php endif; ?>

					<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
					<div class="footer-widgets-2 small-12 large-4 column">
					<?php dynamic_sidebar( 'footer-2' ); ?>
					</div><!-- .footer-widgets-2 -->
					<?php endif; ?>

					<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
					<div class="footer-widgets-3 small-12 large-4 column">
					<?php dynamic_sidebar( 'footer-3' ); ?>
					</div><!-- .footer-widgets-3 -->
					<?php endif; ?>

			<?php endif; ?>

		</div>

	</div><!-- #footer-widgets -->

	<?php if ( is_active_sidebar( 'sidebar-instagram' ) ) : ?>
				
		<div id="instagram-footer">
			
			<?php dynamic_sidebar( 'sidebar-instagram' ); ?>

		</div>

	<?php endif; ?>
		
		<?php if ( $footer_text_left || $footer_text_right ) :  ?>

			<div class="small-site-footer">

				<div class="row">

				<?php if ( $footer_text_left ) : ?>

					<div class="small-footer-left small-12 medium-6 column">

						<?php echo esc_html( $footer_text_left ); ?>

					</div>

				<?php endif; ?>

				<?php if ( $footer_text_right ) : ?>

					<div class="small-footer-right small-12 medium-6 column">

						<?php echo esc_html( $footer_text_right ); ?>

					</div>

				<?php endif; ?>

				</div>

			</div>

		<?php endif; ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
