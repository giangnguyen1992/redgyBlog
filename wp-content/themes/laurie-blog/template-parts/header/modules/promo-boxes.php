<?php
/**
 * Template part for displaying promo boxes
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Laurie_Blog
 */

$boxes_style = laurie_blog_get_theme_mod( 'boxes_style', 'outside' );
$boxes_intro_text = laurie_blog_get_theme_mod( 'boxes_intro_text', '' );
$boxes_intro_link = laurie_blog_get_theme_mod( 'boxes_intro_link', '' );
$boxes_intro_link_url = laurie_blog_get_theme_mod( 'boxes_intro_link_url', '' );
$box1_img = laurie_blog_get_theme_mod( 'box1_img', get_template_directory_uri() . '/images/box-1.jpg' );
$box1_url = laurie_blog_get_theme_mod( 'box1_url', '#' );
$box1_text1 = laurie_blog_get_theme_mod( 'box1_text1', 'Interior Design' );
$box1_text2 = laurie_blog_get_theme_mod( 'box1_text2', 'Latest News' );

$box2_img = laurie_blog_get_theme_mod( 'box2_img', get_template_directory_uri() . '/images/box-2.jpg' );
$box2_url = laurie_blog_get_theme_mod( 'box2_url', '#' );
$box2_text1 = laurie_blog_get_theme_mod( 'box2_text1', "Hello, I'm Laurie!" );
$box2_text2 = laurie_blog_get_theme_mod( 'box2_text2', 'Learn More' );

$box3_img = laurie_blog_get_theme_mod( 'box3_img', get_template_directory_uri() . '/images/box-3.jpg' );
$box3_url = laurie_blog_get_theme_mod( 'box3_url', '#' );
$box3_text1 = laurie_blog_get_theme_mod( 'box3_text1', 'Follow On Instagram' );
$box3_text2 = laurie_blog_get_theme_mod( 'box3_text2', 'Follow Me' );



?>

<div id="promo-boxes">
		
	<?php if ( $boxes_intro_text ) : ?>

		<div class="row promo-box-intro">

			<div class="small-12 columns">
					
				<p><?php echo esc_html( $boxes_intro_text ); ?></p>

				<?php if ( $boxes_intro_link ) : ?>

					<a href="<?php echo esc_url( $boxes_intro_link_url ); ?>"><?php echo esc_html( $boxes_intro_link ); ?><span class="arrow">&#8594;</span></a>

				<?php endif; ?>

			</div>

		</div>

	<?php endif; ?>

	<div class="row">

		<?php if ( $box1_url || $box1_img || $box1_text1 || $box1_text2  ) :  ?>

			<div class="promo-box small-12 medium-4 columns">

				<?php if ( $boxes_style == 'outside' ) : ?>

					<?php if ( $box1_url ) :  ?>

						<a href="<?php echo esc_url( $box1_url ); ?>">

					<?php endif; ?>

					<?php if ( $box1_img ) :  ?>

						<img src="<?php echo esc_url( $box1_img ); ?>" alt="<?php esc_attr_e( 'Box 1 Image', 'laurie-blog' ); ?>">

					<?php endif; ?>
					
					<div class="promo-box-content">
					
						<?php if ( $box1_text1 ) :  ?>

							<span class="title"><?php echo esc_html( $box1_text1 ); ?></span>
						
						<?php endif; ?>

						<?php if ( $box1_text2 ) :  ?>

							<span class="action"><?php echo esc_html( $box1_text2 ); ?></span>
						
						<?php endif; ?>

					</div>

					<?php if ( $box1_url ) :  ?>

						</a>

					<?php endif; ?>
				
				<?php else : ?>

					<div style="background-image: url(<?php echo esc_url( $box1_img ); ?>);" class="promo-box-inside">
						
						<?php if ( $box1_url ) :  ?>

							<a class="promo-link" href="<?php echo esc_url( $box1_url ); ?>"></a>

						<?php endif; ?>

							<div class="promo-box-content" style="background-color: inherit;">
							
								<?php if ( $box1_text1 ) :  ?>

									<span class="title"><?php echo esc_html( $box1_text1 ); ?></span>
								
								<?php endif; ?>

							</div>

					</div>

				<?php endif; ?>

			</div>

		<?php else : ?>

			<div class="promo-box small-12 medium-4 columns">
				
				<div class="promo-box-content" style="background-color: inherit;">

					<span class="action">Add Content In Customizer</span>

				</div>

			</div>

		<?php endif; ?>

		<?php if ( $box2_url || $box2_img || $box2_text1 || $box2_text2  ) :  ?>

			<div class="promo-box small-12 medium-4 columns">

				<?php if ( $boxes_style == 'outside' ) : ?>

					<?php if ( $box2_url ) :  ?>

						<a href="<?php echo esc_url( $box2_url ); ?>">

					<?php endif; ?>

					<?php if ( $box2_img ) :  ?>

						<img src="<?php echo esc_url( $box2_img ); ?>" alt="<?php esc_attr_e( 'Box 2 Image', 'laurie-blog' ); ?>">

					<?php endif; ?>
					
					<div class="promo-box-content">
					
						<?php if ( $box2_text1 ) :  ?>

							<span class="title"><?php echo esc_html( $box2_text1 ); ?></span>
						
						<?php endif; ?>

						<?php if ( $box2_text2 ) :  ?>

							<span class="action"><?php echo esc_html( $box2_text2 ); ?></span>
						
						<?php endif; ?>

					</div>

					<?php if ( $box2_url ) :  ?>

						</a>

					<?php endif; ?>
				
				<?php else : ?>

					<div style="background-image: url(<?php echo esc_url( $box2_img ); ?>);" class="promo-box-inside">
						
						<?php if ( $box2_url ) :  ?>

							<a class="promo-link" href="<?php echo esc_url( $box2_url ); ?>"></a>

						<?php endif; ?>

							<div class="promo-box-content" style="background-color: inherit;">
							
								<?php if ( $box2_text1 ) :  ?>

									<span class="title"><?php echo esc_html( $box2_text1 ); ?></span>
								
								<?php endif; ?>

							</div>

					</div>

				<?php endif; ?>

			</div>

		<?php else : ?>

			<div class="promo-box small-12 medium-4 columns">
				
				<div class="promo-box-content">

					<span class="action">Add Content In Customizer</span>

				</div>

			</div>

		<?php endif; ?>	

				<?php if ( $box3_url || $box3_img || $box3_text1 || $box3_text2  ) :  ?>

			<div class="promo-box small-12 medium-4 columns">

				<?php if ( $boxes_style == 'outside' ) : ?>

					<?php if ( $box3_url ) :  ?>

						<a href="<?php echo esc_url( $box3_url ); ?>">

					<?php endif; ?>

					<?php if ( $box3_img ) :  ?>

						<img src="<?php echo esc_url( $box3_img ); ?>" alt="<?php esc_attr_e( 'Box 3 Image', 'laurie-blog' ); ?>">

					<?php endif; ?>
					
					<div class="promo-box-content">
					
						<?php if ( $box3_text1 ) :  ?>

							<span class="title"><?php echo esc_html( $box3_text1 ); ?></span>
						
						<?php endif; ?>

						<?php if ( $box3_text2 ) :  ?>

							<span class="action"><?php echo esc_html( $box3_text2 ); ?></span>
						
						<?php endif; ?>

					</div>

					<?php if ( $box3_url ) :  ?>

						</a>

					<?php endif; ?>
				
				<?php else : ?>

					<div style="background-image: url(<?php echo esc_url( $box3_img ); ?>);" class="promo-box-inside">
						
						<?php if ( $box3_url ) :  ?>

							<a class="promo-link" href="<?php echo esc_url( $box3_url ); ?>"></a>

						<?php endif; ?>

							<div class="promo-box-content" style="background-color: inherit;">
							
								<?php if ( $box3_text1 ) :  ?>

									<span class="title"><?php echo esc_html( $box3_text1 ); ?></span>
								
								<?php endif; ?>

							</div>

					</div>

				<?php endif; ?>

			</div>

		<?php else : ?>

			<div class="promo-box small-12 medium-4 columns">
				
				<div class="promo-box-content">

					<span class="action">Add Content In Customizer</span>

				</div>

			</div>

		<?php endif; ?>

	</div>

</div>