<?php
/**
 * Template part for displaying slider posts posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Laurie_Blog
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<!-- Post Thumbnail -->
	<?php if ( has_post_thumbnail() ) : ?>	
		<div class="post-thumb">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'laurie-blog-slider-thumb' ); ?></a>
		</div>
		<div class="post-thumb-mobile">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'laurie-blog-slider-mobile-thumb' ); ?></a>
		</div>
	<?php endif; ?>

	<!-- Post Main Content -->
	<div class="post-main">
		
		<!-- Post Category -->
		<span class="entry-category"><?php the_category( ' ' ); ?></span>

		<!-- Post Title -->
		<header class="entry-header">
			<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif; ?>

		</header>

		<!-- Post Meta -->
		<?php

			if ( 'post' === get_post_type() ) : ?>

				<div class="entry-meta">

					<?php laurie_blog_posted_on(); ?>
					
				</div><!-- .entry-meta -->

		<?php

			endif; 

		?>

	</div>

<!-- 	<footer class="entry-footer">
		<?php laurie_blog_entry_footer(); ?>
	</footer>.entry-footer -->

</article><!-- #post-## -->
