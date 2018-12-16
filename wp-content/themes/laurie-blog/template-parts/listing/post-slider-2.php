<article style="background-image: url(<?php the_post_thumbnail_url(); ?>);" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<!-- Post Main Content -->
	<div class="post-main">
		
		<!-- Post Meta -->
		<?php if ( 'post' === get_post_type() ) : ?>

				<div class="entry-meta">

					<span class="entry-category"><?php the_category( ' ' ); ?></span>
					
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

		<!-- Post Content -->
		<div class="entry-content">
			<?php
				the_excerpt();
			?>
		</div>

	</div>

	<div class="slider-post-overlay"></div>
	
</article><!-- #post-## -->
