<?php

	/**
	 * Template part for displaying a mobile slider
	 *
	 * @link https://codex.wordpress.org/Template_Hierarchy
	 *
	 * @package Laurie_Blog
	 */

	$autoslide_on_off = laurie_blog_get_theme_mod( 'autoslide_on_off', 'on' );

	// query args
	$args = array(
	    'tag' => 'featured'
	);

	// query posts
	$laurie_blog_query = new WP_Query( $args ); 

	if ( $laurie_blog_query->have_posts() ) :

?>

<div id="slider-5" data-autoplay="<?php echo intval($autoslide_on_off) ?>">

	<div class="row">

		<div class="slider-content small-12 large-7 column">

			<?php

				/* Start the Loop */
				while ( $laurie_blog_query->have_posts() ) : $laurie_blog_query->the_post();
				
					get_template_part( 'template-parts/listing/post-slider-5' );

				endwhile;

			?>

		</div>

		<div class="slider-content-sidebar-1 small-12 medium-6 large-3 column">

			<?php if ( is_active_sidebar( 'sidebar-61' ) ) : ?>

				<?php dynamic_sidebar( 'sidebar-61' ); ?>

			<?php endif; ?>

		</div>

		<div class="slider-content-sidebar-2 small-12 medium-6 large-2 column">

			<?php if ( is_active_sidebar( 'sidebar-62' ) ) : ?>

				<?php dynamic_sidebar( 'sidebar-62' ); ?>

			<?php endif; ?>

		</div>

	</div>

</div>

<?php 

	endif; 

	wp_reset_postdata();

?>