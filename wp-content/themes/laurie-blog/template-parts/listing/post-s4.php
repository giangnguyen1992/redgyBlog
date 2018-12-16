<article id="post-<?php the_ID(); ?>" <?php post_class('post-s4 medium-6 large-4 columns masonry-item'); ?>>

	<!-- Post Thumbnail -->
	<?php if ( has_post_thumbnail() ) : ?>	
	<div class="post-thumb">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'laurie-blog-listing3-thumb' ); ?></a>
	</div>
	<?php endif; ?>

<!-- Post Main Content -->
	<div class="post-main">

		<!-- Post Meta -->
		<?php

			if ( 'post' === get_post_type() ) : ?>

				<div class="entry-meta">

					<!-- Post Category -->
					<span class="entry-category"><?php the_category( ' ' ); ?></span>

					<?php laurie_blog_posted_on(); ?>
					
				</div><!-- .entry-meta -->

		<?php

			endif; 

		?>

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

			<a href="<?php the_permalink(); ?>"><span class="arrow">&#8594;</span></a>

		</div>

	</div>

<!-- 	<footer class="entry-footer">
		<?php laurie_blog_entry_footer(); ?>
	</footer>.entry-footer -->

</article><!-- #post-## -->