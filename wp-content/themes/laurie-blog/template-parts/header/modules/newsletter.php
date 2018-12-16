<?php
/**
 * Template part for displaying newsletter
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Laurie_Blog
 */

$newsletter_img = laurie_blog_get_theme_mod( 'newsletter_img', get_template_directory_uri() . '/images/newsletter.jpg' );
$newsletter_heading_1 = laurie_blog_get_theme_mod( 'newsletter_heading_1', 'The Best News In Your Inbox!' );
$newsletter_heading_2 = laurie_blog_get_theme_mod( 'newsletter_heading_2', 'Subscribe to our newsletter to receive news and updates.' );
$mailpoet_newsletter_id =  laurie_blog_get_theme_mod( 'mailpoet_newsletter_id', '1' );
$mailchimp_newsletter_id =  laurie_blog_get_theme_mod( 'mailchimp_newsletter_id', '#' );

?>

<?php if ( shortcode_exists( 'wysija_form' ) ) {	?>

	<div id="newsletter">
		
		<div class="row newsletter-wrapper">
			
			<div style="background-image: url(<?php echo esc_url( $newsletter_img ); ?>);" class="small-12 newsletter-inner columns">
				
				<div class="row">
					
					<div class="small-12 large-5 columns">

						<div class="newsletter-text">
							
							<h2><?php echo esc_attr( $newsletter_heading_1 ); ?></h2>
							<span class="newsletter-heading-2"><?php echo esc_html( $newsletter_heading_2 ); ?></span>

						</div>

					</div>

					<div class="small-12 large-7 columns">
						
						<div class="newsletter-form">

							<?php 

								$mailpoet_subscribe_id = esc_html( $mailpoet_newsletter_id );
								echo do_shortcode( '[wysija_form id="' . $mailpoet_subscribe_id . '"]' ); 

							?>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

	<?php } elseif ( shortcode_exists( 'mc4wp_form' ) ) { ?>

		<div id="newsletter">
		
		<div class="row newsletter-wrapper">
			
			<div style="background-image: url(<?php echo esc_url( $newsletter_img ); ?>);" class="small-12 newsletter-inner columns">
				
				<div class="row">
					
					<div class="small-12 large-5 columns">

						<div class="newsletter-text">
							
							<h2><?php echo esc_attr( $newsletter_heading_1 ); ?></h2>
							<span class="newsletter-heading-2"><?php echo esc_attr( $newsletter_heading_2 ); ?></span>

						</div>

					</div>

					<div class="small-12 large-7 columns">
						
						<div class="newsletter-form">

							<?php 

								$mailchimp_subscribe_id = esc_attr( $mailchimp_newsletter_id );
								echo do_shortcode( '[mc4wp_form id="' . $mailchimp_subscribe_id . '"]' ); 

							?>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

	<?php } ?>