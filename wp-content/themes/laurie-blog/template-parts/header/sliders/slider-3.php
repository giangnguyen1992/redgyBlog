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

<div id="slider-3" data-autoplay="<?php echo intval($autoslide_on_off) ?>">

	<div class="slider-content row">

		<?php

			/* Start the Loop */
			while ( $laurie_blog_query->have_posts() ) : $laurie_blog_query->the_post();
			
				get_template_part( 'template-parts/listing/post-slider-3' );

			endwhile;

		?>

	</div>



</div>

<?php 

	endif; 

	wp_reset_postdata();

?>