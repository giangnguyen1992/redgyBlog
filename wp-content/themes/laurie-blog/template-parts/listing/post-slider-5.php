<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<!-- Post Thumbnail -->
	<?php if ( has_post_thumbnail() ) : ?>	
		<div class="post-thumb">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'laurie-blog-slider-thumb' ); ?></a>
			<div class="thumb-overlay"></div>
		</div>
		<div class="post-thumb-mobile">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'laurie-blog-slider-mobile-thumb' ); ?></a>
			<div class="thumb-overlay"></div>
		</div>
	<?php endif; ?>

	<!-- Post Main Content -->
	<div class="post-main">
		
		<!-- Post Meta -->
		<?php if ( 'post' === get_post_type() ) : ?>

				<div class="entry-meta">

					<span class="entry-category"><?php the_category( ' ' ); ?></span>

					<?php laurie_blog_posted_on(); ?>
					
				</div><!-- .entry-meta -->

		<?php endif; ?>

		<!-- Post Title -->
		<header class="entry-header">
			<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif; ?>

		</header>

		<!-- Continue Reading <span class="arrow">&#8594;</span> -->
		<div class="continue-reading">

			<a href="<?php the_permalink(); ?>"><?php echo esc_html__( 'Continue Reading', 'laurie-blog' ) ?><span class="arrow">&#8594;</span></a>

		</div>

	</div>

</article><!-- #post-## -->
