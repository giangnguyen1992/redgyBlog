<article style="background-image: url(<?php the_post_thumbnail_url(); ?>);" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<!-- Post Main Content -->
	<div class="post-main">

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

		<!-- Continue Reading <span class="arrow">&#8594;</span> -->
		<div class="continue-reading">

			<a href="<?php the_permalink(); ?>"><?php echo esc_html__( 'Continue Reading', 'laurie-blog' ) ?></a>

		</div>

	</div>

	<div class="slider-post-overlay"></div>

</article><!-- #post-## -->
