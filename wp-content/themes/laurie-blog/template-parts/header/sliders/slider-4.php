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

<div id="slider-4" data-autoplay="<?php echo intval($autoslide_on_off) ?>">

	<div class="slider-content">

		<?php

			/* Start the Loop */
			while ( $laurie_blog_query->have_posts() ) : $laurie_blog_query->the_post();
			
				get_template_part( 'template-parts/listing/post-slider-4' );

			endwhile;

		?>

	</div>

</div>

<div id="slider-4-nav" data-autoplay="<?php echo intval($autoslide_on_off) ?>">

	<div class="slider-content">

		<?php while ( $laurie_blog_query->have_posts() ) : $laurie_blog_query->the_post(); ?>
			
			<!-- Post Thumbnail -->
			<?php if ( has_post_thumbnail() ) : ?>	
				<div class="post-thumb">
					<?php the_post_thumbnail( 'laurie-blog-slider-4-nav-thumb' ); ?>
				</div>
			<?php endif; ?>

		<?php endwhile;	?>

	</div>

</div>

<?php 

	endif; 

	wp_reset_postdata();

?>