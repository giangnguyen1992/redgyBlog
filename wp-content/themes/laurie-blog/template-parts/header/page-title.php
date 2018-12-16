<?php

	$page_title = false;

/**
 * single
 */
if ( is_singular( array( 'post', 'page' ) ) && ! is_page_template( 'template-homepage.php') && ! is_archive() && ! is_search() ) {

	$page_title = get_the_title();

}

if ( is_category() ) {
	$page_title = esc_html__( 'Browsing Category: ', 'laurie-blog' ) . '<span>' . single_cat_title( '', false ) . '</span>';
} elseif ( is_tag() ) {
	$page_title = esc_html__( 'Browsing Tag: ', 'laurie-blog' ) . '<span>' . single_tag_title( '', false ) . '</span>';
} elseif ( is_author() ) {
	$page_title = esc_html__( 'All Posts By: ', 'laurie-blog' ) . '<span>' .get_the_author() . '</span>';
} elseif ( is_year() ) {
	$page_title = esc_html__( 'Browsing Year: ', 'laurie-blog' ) . '<span>' .get_the_date( 'Y' ) . '</span>';
} elseif ( is_month() ) {
	$page_title = esc_html__( 'Browsing Month: ', 'laurie-blog' ) . '<span>' .get_the_date( 'F Y' ) . '</span>';
} elseif ( is_day() ) {
	$page_title = esc_html__( 'Browsing Day: ', 'laurie-blog' ) . '<span>' .get_the_date( 'F j, Y' ) . '</span>';
} elseif ( is_post_type_archive() ) {
	$page_title = esc_html__( 'Browsing Post: ', 'laurie-blog' ) . '<span>' .post_type_archive_title( '', false ) . '</span>';
} elseif ( is_tax() ) {
	$page_title = esc_html__( 'Browsing Category: ', 'laurie-blog' ) . '<span>' .single_term_title( '', false ) . '</span>';
} elseif ( is_search() ) {
	$page_title = esc_html__( 'Search Results For: ', 'laurie-blog' ) . '<span>' .get_search_query() . '</span>';
} elseif ( is_404() ) {
	$page_title = esc_html__( 'Not Found', 'laurie-blog' );
}

?>

<div id="page-title">

	<?php if ( $page_title ) : ?>
		<h1><?php echo do_shortcode( $page_title ); ?></h1>
	<?php endif; ?>

	<?php if ( is_singular( 'post' ) ) : ?>
		<div class="tagline-post-cats">
			<?php the_category( ' ', '', get_the_ID() ); ?>
		</div><!-- .tagline-post-cats -->
	<?php endif; ?>

</div>