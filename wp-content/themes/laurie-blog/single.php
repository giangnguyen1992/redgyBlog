<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Laurie_Blog
 */

get_header(); ?>

	<?php 

	if ( laurie_blog_get_theme_mod( 'single_sidebar_on_off', 'on' ) == 'on' ) : 

		if ( laurie_blog_get_theme_mod( 'single_sidebar_position', 'right' ) == 'left' ) : 

			get_sidebar( 'left' );

		endif;

	?>

	<div id="primary" class="content-area small-12 large-9 column">

	<?php else : ?>

		<div id="primary" class="content-area small-12 large-12 column">

	<?php endif; ?>
	
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'single' );

			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html__( 'Next Article', 'laurie-blog' ) . '</span> ' .
					'<span class="screen-reader-text">' . esc_html__( 'Next post:', 'laurie-blog' ) . '</span> ' .
					'<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html__( 'Previous Article', 'laurie-blog' ) . '</span> ' .
					'<span class="screen-reader-text">' . esc_html__( 'Previous post:', 'laurie-blog' ) . '</span> ' .
					'<span class="post-title">%title</span>',
			) );

			// about author
			get_template_part( 'template-parts/about-author' );
		
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
if ( laurie_blog_get_theme_mod( 'single_sidebar_on_off', 'on' ) == 'on' && laurie_blog_get_theme_mod( 'single_sidebar_position', 'right' ) == 'right' ) : 
	get_sidebar();
endif;
get_footer();
