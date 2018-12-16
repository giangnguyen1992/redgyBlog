<?php
	
	// Get author ID	
	if ( get_the_author_meta( 'ID' ) )
		$author_id = get_the_author_meta( 'ID' );
	else
		$author_id = 1;

?>

<?php if ( get_the_author_meta( 'description', $author_id ) != '' ): ?>

	<h5 class="about-author-title"><?php esc_html_e( 'About the author', 'laurie-blog' ); ?></h5>

	<div class="about-author clearfix">
						
		<div class="about-author-sidebar">
			<div class="about-author-avatar">
				<?php echo get_avatar( $author_id , 90 ); ?>
			</div><!-- .about-author-avatar -->
		</div><!-- .about-author-sidebar -->

		<div class="about-author-main">

			<div class="about-author-name-main">
				<span class="about-author-name"><?php the_author_posts_link(); ?></span>
			</div><!-- .about-author-sidebar-main -->

			<div class="about-author-bio">
				<?php echo get_the_author_meta( 'description', $author_id ); ?>
			</div><!-- .about-author-bio -->

			<div class="about-author-social">
				<?php if ( get_the_author_meta( 'laurie_blog_twitter', $author_id ) ) : ?>
					<a class="social-link-twitter" href="<?php echo get_the_author_meta( 'laurie_blog_twitter' ); ?>"><span class="fa fa-twitter"></span></a>
				<?php endif; ?>
				<?php if ( get_the_author_meta( 'laurie_blog_facebook', $author_id ) ) : ?>
					<a class="social-link-facebook" href="<?php echo get_the_author_meta( 'laurie_blog_facebook' ); ?>"><span class="fa fa-facebook"></span></a>
				<?php endif; ?>
				<?php if ( get_the_author_meta( 'laurie_blog_instagram', $author_id ) ) : ?>
					<a class="social-link-instagram" href="<?php echo get_the_author_meta( 'laurie_blog_instagram' ); ?>"><span class="fa fa-instagram"></span></a>
				<?php endif; ?>
				<?php if ( get_the_author_meta( 'laurie_blog_behance', $author_id ) ) : ?>
					<a class="social-link-behance" href="<?php echo get_the_author_meta( 'laurie_blog_behance' ); ?>"><span class="fa fa-behance"></span></a>
				<?php endif; ?>
				<?php if ( get_the_author_meta( 'laurie_blog_dribbble', $author_id ) ) : ?>
					<a class="social-link-dribbble" href="<?php echo get_the_author_meta( 'laurie_blog_dribbble' ); ?>"><span class="fa fa-dribbble"></span></a>
				<?php endif; ?>
				<?php if ( get_the_author_meta( 'laurie_blog_vine', $author_id ) ) : ?>
					<a class="social-link-vine" href="<?php echo get_the_author_meta( 'laurie_blog_vine' ); ?>"><span class="fa fa-vine"></span></a>
				<?php endif; ?>
			</div><!-- .about-author-social -->

		</div><!-- .about-author-main -->

	</div><!-- .about-author -->

<?php endif; ?>