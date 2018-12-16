<?php
/**
 * Include the TGM_Plugin_Activation class.
 */
require_once get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';

/**
 * Register plugins for TGM
 *
 * @since 1.0
 */
function laurie_blog_register_required_plugins() {
	
	$plugins = array(

		array(
			'name'      => esc_html__( 'One Click Demo Import', 'laurie-blog' ),
			'slug'      => 'one-click-demo-import',
			'required'  => false,
		),
		array(
			'name'      => esc_html__( 'Yellow Pencil', 'laurie-blog' ),
			'slug'      => 'waspthemes-yellow-pencil',
			'source'    => get_template_directory() . '/inc/tgm/plugins/waspthemes-yellow-pencil.zip',
			'required'  => false,
		),
		array(
			'name'      => esc_html__( 'Woocommerce', 'laurie-blog' ),
			'slug'      => 'woocommerce',
			'required'  => false,
		),
		array(
			'name'      => esc_html__( 'Woocommerce Archive Customiser', 'laurie-blog' ),
			'slug'      => 'woocommerce-product-archive-customiser',
			'required'  => false,
		),
		array(
			'name'      => esc_html__( 'MailPoet Newsletters', 'laurie-blog' ),
			'slug'      => 'wysija-newsletters',
			'required'  => false,
		),
		array(
			'name'      => esc_html__( 'Mailchimp Newsletters', 'laurie-blog' ),
			'slug'      => 'mailchimp-for-wp',
			'required'  => false,
		),
		array(
			'name'      => esc_html__( 'Contact Form 7', 'laurie-blog' ),
			'slug'      => 'contact-form-7',
			'required'  => false,
		),
		array(
			'name'      => esc_html__( 'WP Instagram Widget', 'laurie-blog' ),
			'slug'      => 'wp-instagram-widget',
			'required'  => false,
		),
		array(
			'name'      => esc_html__( 'AddToAny Share Buttons', 'laurie-blog' ),
			'slug'      => 'add-to-any',
			'required'  => false,
		)
	);

	$config = array(
		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );

} add_action( 'tgmpa_register', 'laurie_blog_register_required_plugins' );
