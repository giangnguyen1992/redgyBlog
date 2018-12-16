<?php
/**
 * Template part for displaying intro box
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Laurie_Blog
 */


$intro_box_url = laurie_blog_get_theme_mod( 'intro_box_url', '#' );
$intro_box_img = laurie_blog_get_theme_mod( 'intro_box_img');
$intro_box_text = laurie_blog_get_theme_mod( 'intro_box_text', 'Ut aliquet vel nunc at imperdiet. Aliquam erat volutpat. Quisque efficitur velit volutpat metus aliquet scelerisque. Curabitur tempus vestibulum mauris, et egestas mi pretium sed. ' );
$intro_box_title = laurie_blog_get_theme_mod( 'intro_box_title', 'Branding & design for creative people who want to build awesome websites.' );
$intro_box_img_position = laurie_blog_get_theme_mod( 'intro_box_img_position', 'background' );

?>

<div id="intro-box">
		
		<div class="row collapse">

		<?php if ( $intro_box_url || $intro_box_img || $intro_box_text || $intro_box_title ) :  ?>

			<div class="intro-box-wrapper small-12 columns">

				<?php if ( $intro_box_img && $intro_box_img_position != 'background' ) :  ?>
		
					<div class="intro-box row collapse">

						<div class="intro-box-content small-12 large-7 columns">

				<?php else : ?>

						<div style="background-image: url(<?php echo esc_url( $intro_box_img ); ?>);" class="intro-box-content bg-image">

				<?php endif; ?>

						<?php if ( $intro_box_title ) :  ?>

							<h2 class="intro-box-title"><?php echo esc_html( $intro_box_title ); ?></h2>
							
						<?php endif; ?>		

						<?php if ( $intro_box_text ) :  ?>

							<p class="intro-box-text"><?php echo esc_html( $intro_box_text ); ?></p>
							
						<?php endif; ?>	

						<?php if ( $intro_box_url ) :  ?>

								<div class="continue-reading">

									<a href="<?php echo esc_url( $intro_box_url ); ?>"><?php echo esc_html__( 'Continue Reading', 'laurie-blog' ) ?><span class="arrow">&#8594;</span></a>

								</div>
							
						<?php endif; ?>		

					</div>	

					<?php if ( $intro_box_img && $intro_box_img_position != 'background' ) :  ?>

						<div class="intro-box-img small-12 large-5 columns" style="background-image: url(<?php echo esc_url( $intro_box_img ); ?>);"></div>
						
					<?php endif; ?>		

				</div>

				<?php if ( $intro_box_img && $intro_box_img_position != 'background' ) :  ?>

					</div>

				<?php endif; ?>	

		

		<?php else : ?>

			<p style="text-align: center;">Add Content in "Appearance / Customize / Homepage Layout Options"</p>

		<?php endif; ?>

	</div>

</div>