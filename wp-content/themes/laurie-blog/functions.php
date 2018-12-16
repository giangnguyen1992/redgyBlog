<?php
/**
 * Laurie Blog functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Laurie_Blog
 */

define( 'LAURIE_BLOG_CUSTOMIZER_PREPEND', 'laurie_blog_theme_' );

if ( ! function_exists( 'laurie_blog_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

function laurie_blog_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Laurie Blog, use a find and replace
	 * to change 'laurie-blog' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'laurie-blog', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'laurie-blog-slider-thumb', 869, 579, true );
	add_image_size( 'laurie-blog-slider-3-thumb', 744, 744, true );
	add_image_size( 'laurie-blog-slider-4-thumb', 960, 755, true );
	add_image_size( 'laurie-blog-slider-4-nav-thumb', 130, 84, true );
	add_image_size( 'laurie-blog-slider-4-mobile-thumb', 796, 800, true );
	add_image_size( 'laurie-blog-slider-mobile-thumb', 950, 900, true );
	add_image_size( 'laurie-blog-listing1-thumb', 509, 393, true );
	add_image_size( 'laurie-blog-listing2-thumb', 1032, 570, true );
	add_image_size( 'laurie-blog-listing3-thumb', 538, 353, true );
	add_image_size( 'laurie-blog-post-widget-thumb', 450, 450, true );
	add_image_size( 'laurie-blog-post-widget-thumb-2', 610, 372, true );
	add_image_size( 'laurie-blog-single-thumb', 1131, 605, true );

	
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-left' => esc_html__( 'Left Menu', 'laurie-blog' ),
		'menu-right' => esc_html__( 'Right Menu', 'laurie-blog' ),
		'header-1-menu' => esc_html__( 'Header 1 & 3 Menu', 'laurie-blog' ),
		'menu-mobile' => esc_html__( 'Mobile Menu', 'laurie-blog' ),
		'top-bar-menu' => esc_html__( 'Top Bar Menu', 'laurie-blog' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'gallery',
		'caption',
		'comment-list',
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Add theme support for Woocommerce
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );

}
endif;
add_action( 'after_setup_theme', 'laurie_blog_setup' );

// Allow Shortcodes in the Excerpt field
 add_filter('the_excerpt', 'do_shortcode');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function laurie_blog_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'laurie_blog_content_width', 1032 );
}
add_action( 'after_setup_theme', 'laurie_blog_content_width', 0 );


/* Add class to the body if it has a featured image and if it has a slider*/

function laurie_blog_body_class($classes) {
	if ( has_post_thumbnail() ) {
		array_push($classes, 'has-featured-image');
	}
	if (isset($_GET['boxed'])) {
		array_push($classes, 'is-boxed');
	}
	if (isset($_GET['slider'])) {
		array_push($classes, 'has-no-slider');
	} elseif ( laurie_blog_get_theme_mod( 'slider_on_off', 'off' ) == 'on'  ) {
		array_push($classes, 'has-slider');
	}
	return $classes;
}
add_filter('body_class', 'laurie_blog_body_class' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function laurie_blog_widgets_init() {

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'laurie-blog' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'laurie-blog' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Slider #6 - Sidebar 1', 'laurie-blog' ),
		'id'            => 'sidebar-61',
		'description'   => esc_html__( 'Add widgets here.', 'laurie-blog' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Slider #6 - Sidebar 2', 'laurie-blog' ),
		'id'            => 'sidebar-62',
		'description'   => esc_html__( 'Add widgets here.', 'laurie-blog' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Woocommerce Sidebar', 'laurie-blog' ),
		'id'            => 'sidebar-woo',
		'description'   => esc_html__( 'Add widgets here.', 'laurie-blog' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget 1', 'laurie-blog' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'laurie-blog' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget 2', 'laurie-blog' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'laurie-blog' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget 3', 'laurie-blog' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'laurie-blog' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Instagram Footer', 'laurie-blog' ),
		'id'            => 'sidebar-instagram',
		'description'   => esc_html__( 'Add widgets here.', 'laurie-blog' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'laurie_blog_widgets_init' );

/**
 * Returns customizer option value
 *
 * @since 1.0
 */
function laurie_blog_get_theme_mod( $option_id, $default = '' ) {

	$return = get_theme_mod( LAURIE_BLOG_CUSTOMIZER_PREPEND . $option_id, $default );
	if ( $return == '' ) { $return = $default; }

	return $return;

}

function ocdi_import_files() {
  return array(
    array(
      'import_file_name'             => 'Demo Import 1',
      'local_import_file'            => trailingslashit( get_template_directory() ) . 'import/laurie-blog-content-1.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'import/laurie-blog-widget-1.wie',
      'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'import/laurie-blog-customizer-1.dat',
      'import_preview_image_url'     => get_template_directory_uri() . '/import/demo1.jpg',
      'import_notice'              => __( 'All changes that you made in "Appearance > Customize" will be override. Are you sure you want to continue?', 'laurie-blog' ),
      'preview_url'                  => 'http://www.danyduchainethemes.com/laurie-blog-1',
    ),
    array(
      'import_file_name'             => 'Demo Import 2',
      'local_import_file'            => trailingslashit( get_template_directory() ) . 'import/laurie-blog-content-2.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'import/laurie-blog-widget-2.wie',
      'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'import/laurie-blog-customizer-2.dat',
      'import_preview_image_url'     => get_template_directory_uri() . '/import/demo2.jpg',
      'import_notice'              => __( 'All changes that you made in "Appearance > Customize" will be override. Are you sure you want to continue?', 'laurie-blog' ),
      'preview_url'                  => 'http://www.danyduchainethemes.com/laurie-blog-2',
    ),
    array(
      'import_file_name'             => 'Demo Import 3',
      'local_import_file'            => trailingslashit( get_template_directory() ) . 'import/laurie-blog-content-3.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'import/laurie-blog-widget-3.wie',
      'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'import/laurie-blog-customizer-3.dat',
      'import_preview_image_url'     => get_template_directory_uri() . '/import/demo3.jpg',
      'import_notice'              => __( 'All changes that you made in "Appearance > Customize" will be override. Are you sure you want to continue?', 'laurie-blog' ),
      'preview_url'                  => 'http://www.danyduchainethemes.com/laurie-blog-3',
    ),
    array(
      'import_file_name'             => 'Demo Import 4',
      'local_import_file'            => trailingslashit( get_template_directory() ) . 'import/laurie-blog-content-4.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'import/laurie-blog-widget-4.wie',
      'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'import/laurie-blog-customizer-4.dat',
      'import_preview_image_url'     => get_template_directory_uri() . '/import/demo4.jpg',
      'import_notice'              => __( 'All changes that you made in "Appearance > Customize" will be override. Are you sure you want to continue?', 'laurie-blog' ),
      'preview_url'                  => 'http://www.danyduchainethemes.com/laurie-blog-4',
    )
  );
}
add_filter( 'pt-ocdi/import_files', 'ocdi_import_files' );

// display custom admin notice
function laurie_custom_admin_notice() { 

	if ( class_exists( 'OCDI_Plugin' ) ) {
		
	} else {

?>
	
	<div class="notice notice-success is-dismissible">
		<p><?php esc_html_e('Hi and welcome to Laurie theme. First of all, thank you for buying the theme, I really hope you will enjoy working with it. If you just installed the theme, your next step to setup the demo content is to install the plugin "One Click Demo Import". Simply click on "Begin installing plugins" below and you will be able to install it. Once the plugin is installed (and activated), simply click on "Appearance" on the left sidebar and click on "Import Demo Data". From there you will be able to import the demo content. Please contact me on the support forum if you have any problems with the theme : https://danyduchaine.ticksy.com/ - Dany', 'laurie-blog'); ?></p>
	</div>
	
<?php } }
add_action('admin_notices', 'laurie_custom_admin_notice');

add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );

/**
 * Enqueue scripts and styles.
 */
function laurie_blog_scripts() {

	// Theme
	$laurie = wp_get_theme();

	// Styles
	wp_enqueue_style( 'laurie-blog-style', get_stylesheet_uri(), array(), $laurie->get('Version') );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/fonts/font-awesome/css/font-awesome.css' );
	wp_enqueue_style( 'foundation', get_template_directory_uri() . '/css/foundation.css' );

	// Scripts
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.min.js', array( 'jquery' ), $laurie->get('Version'), true );
	wp_enqueue_script( 'laurie-blog-navigation', get_template_directory_uri() . '/js/navigation.js', array( 'jquery' ), $laurie->get('Version'), true );
	wp_enqueue_script( 'laurie-blog-plugins', get_template_directory_uri() . '/js/plugins.js', array( 'jquery' ), $laurie->get('Version'), true );
	wp_enqueue_script( 'laurie-blog-main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), $laurie->get('Version'), true );
	wp_enqueue_script( 'jquery-masonry' );

	wp_localize_script( 'laurie-blog-navigation', 'screenReaderText', array(
	'expand'   => '<span class="screen-reader-text">' . esc_html__( 'expand child menu', 'laurie-blog' ) . '</span>',
	'collapse' => '<span class="screen-reader-text">' . esc_html__( 'collapse child menu', 'laurie-blog' ) . '</span>',
	) );
	
	wp_enqueue_script( 'laurie-blog-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), $laurie->get('Version'), true );

	// Google Fonts
	wp_enqueue_style( 'laurie-blog-google-fonts', laurie_blog_fonts_url(), array(), true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'laurie_blog_scripts' );

if ( ! function_exists( 'laurie_blog_fonts_url' ) ) {

	/**
	 * Returns the google fonts URL
	 *
	 * @since 1.0
	 */
	function laurie_blog_fonts_url() {
		
		$font_url = '';

		/*
		Translators: If there are characters in your language that are not supported
		by chosen font(s), translate this to 'off'. Do not translate into your own language.
		*/
		$font_state = _x( 'on', 'Google fonts: on or off', 'laurie-blog' );
		if ( 'off' !== $font_state ) {
			$font_url = add_query_arg( 'family', urlencode( 'Roboto:400,500,600|Material Icons' ), "//fonts.googleapis.com/css" );
		}

		return $font_url;
	}

}

/**
 * Include TGM Init ( plugin activation )
 */
include get_template_directory() . '/inc/tgm/tgm-init.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom taxonomy options.
 */

require get_template_directory() . '/inc/taxonomy-options.php';

/**
 * Custom functions that act independently of the theme templates.
 */

require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/theme-options.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Include Widgets
 */

include get_template_directory() . '/inc/widgets/widget.author.php';
include get_template_directory() . '/inc/widgets/widget.author2.php';
include get_template_directory() . '/inc/widgets/widget.ad-banner.php';
include get_template_directory() . '/inc/widgets/widget.posts.php';
include get_template_directory() . '/inc/widgets/widget.posts2.php';
include get_template_directory() . '/inc/widgets/widget.subscribe.php';