<?php
/**
 * Template part for displaying single posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Laurie_Blog
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<!-- Post Main Content -->
	<div class="post-main">

		<!-- Post Thumbnail -->
		<?php if ( has_post_thumbnail() ) : ?>	

			<div class="post-thumb">

				<?php the_post_thumbnail( 'laurie-blog-single-thumb' ); ?>
				<div class="thumb-overlay"></div>

			</div>

			<div class="post-thumb-mobile">

				<?php the_post_thumbnail( 'laurie-blog-slider-mobile-thumb' ); ?>
				<div class="thumb-overlay"></div>

			</div>
			
		<?php endif; ?>

		<!-- Post Title -->
		<header class="entry-header">

				<!-- Post Meta -->
			<?php if ( 'post' === get_post_type() ) : ?>

				<div class="entry-meta">

					<span class="entry-category"><?php the_category( ' ' ); ?></span>

					<?php laurie_blog_posted_on(); ?>
					
				</div><!-- .entry-meta -->

			<?php endif; ?>

			<?php
			if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
			else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif; ?>
			
		</header>

		<!-- Post Content -->
		<div class="entry-content">

			<!-- Post Excerpt -->
			<?php if ( has_excerpt( $post->ID ) ) {
				echo '<div class="deck">';
				echo '<span>' . get_the_excerpt() . '</span>';
				echo '</div>';
				} 
			?>

			<?php
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'laurie-blog' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">',
					'after'  => '</div>',
					'next_or_number' => 'next'
				) );
			?>
		</div>
	
	</div>

	<footer class="entry-footer">
		
		<?php laurie_blog_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
