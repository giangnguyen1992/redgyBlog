<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Laurie_Blog
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area small-12 large-3 column">
	<?php dynamic_sidebar( 'sidebar-1' ); ?> 
</aside><!-- #secondary -->
