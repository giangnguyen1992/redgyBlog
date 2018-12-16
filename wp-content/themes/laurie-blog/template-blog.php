<?php 

/**
 * Template Name: Blog
 */

get_header(); ?>

<?php

	if ( laurie_blog_get_theme_mod( 'slider_remove', 'yes' ) == 'yes' ) : 
		// tag to hide
		$tag_to_hide = 'featured';
	else : 
		$tag_to_hide = '';
	endif;

	// posts style
	$posts_style_template = laurie_blog_get_theme_mod( 'posts_style_template', 'post-s1' );

	// current page
	if ( is_numeric( get_query_var( 'page' ) ) ) { $paged = get_query_var( 'page' ); } elseif ( is_numeric( get_query_var( 'paged' ) ) ) { $paged = get_query_var( 'paged' ); } else { $paged = 1; }

	$pageNumber = $wp_query->query_vars['paged'];

	// query args
	$args = array(
		'post_type' => 'post',
		'paged' => $paged,
		'tax_query' => array(
			array(
				'taxonomy' => 'post_tag',
				'field'    => 'slug',
				'terms'    => $tag_to_hide,
				'operator' => 'NOT IN'					
			),
		),
	);

	// query posts
	$laurie_blog_query = new WP_Query( $args ); 

	?>

		<?php 

			if ( laurie_blog_get_theme_mod( 'sidebar_on_off', 'on' ) == 'on' ) : 

				if ( laurie_blog_get_theme_mod( 'sidebar_position', 'right' ) == 'left' ) : 

					get_sidebar( 'left' );

				endif;

		?>

			<div id="primary" class="content-area small-12 large-9 column">

		<?php else : ?>

			<div id="primary" class="content-area small-12 large-12 column">

		<?php 

		endif; 

		if ( laurie_blog_get_theme_mod( 'posts_style_template', 'post-s1' ) == 'post-s3' || laurie_blog_get_theme_mod( 'posts_style_template', 'post-s1' ) == 'post-s4' ) : ?>

			<div class="row collapse masonry">

				<main id="main" class="site-main masonry-init">

		<?php else: ?>

				<main id="main" class="site-main">

		<?php endif; ?>

			<?php	

				if ( $laurie_blog_query->have_posts() ) :

				// amount of pages
				$num_pages = $laurie_blog_query->max_num_pages;

				if ( is_home() && ! is_front_page() ) : ?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>
				<?php
				endif;

				/* Start the Loop */
				while ( $laurie_blog_query->have_posts() ) : $laurie_blog_query->the_post();

					$layout = laurie_blog_get_theme_mod( 'posts_style_template', 'post-s1' );

					get_template_part( 'template-parts/listing/' . $layout );

				endwhile;

				if ( laurie_blog_get_theme_mod( 'posts_style_template', 'post-s1' ) != 'post-s3' && laurie_blog_get_theme_mod( 'posts_style_template', 'post-s1' ) != 'post-s4' ) : 

					/* Custom post navigation */
					laurie_blog_pagination( array( 'pages' => $num_pages ) );

				endif;

				else :

				get_template_part( 'template-parts/content', 'none' );

			endif; 

			// reset query
			wp_reset_postdata();

			?>

			</main><!-- #main -->

			<?php if ( laurie_blog_get_theme_mod( 'posts_style_template', 'post-s1' ) == 'post-s3' || laurie_blog_get_theme_mod( 'posts_style_template', 'post-s1' ) == 'post-s4' ) : ?>

				<div class="small-12 columns">

					<?php

					/* Custom post navigation */
					laurie_blog_pagination( array( 'pages' => $num_pages ) ); 

					?>

				</div>

			</div>

			<?php endif; ?>
			
		</div><!-- #primary -->

<?php

if ( laurie_blog_get_theme_mod( 'sidebar_on_off', 'on' ) == 'on' && laurie_blog_get_theme_mod( 'sidebar_position', 'right' ) == 'right' ) : 
	get_sidebar();
endif;

get_footer();
