<?php

// Register Widget
add_action( 'widgets_init', create_function( '', 'register_widget( "laurie_blog_subscribe_widget" );' ) );

// Widget Class
class laurie_blog_Subscribe_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	public function __construct() {
		parent::__construct(
			'laurie_blog_subscribe_widget', // Base ID
			esc_html__( 'Laurie Blog - Subscribe', 'laurie-blog' ), // Name
			array( 'description' => esc_html__( 'Show subscription form.', 'laurie-blog' ) ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		
		// Options
		$bg_image = $instance['bg_image'];
		$heading_primary = $instance['heading_primary'];
		$heading_secondary = $instance['heading_secondary'];
		$form_shortcode = $instance['form_shortcode'];
		$smalltext = $instance['smalltext'];

		echo $before_widget;

		if ( ! empty( $title ) )
			echo $before_title . $title . $after_title;

		/* Start - Widget Content */

		?>

			<div class="subscribe-widget" <?php if ( $bg_image != '' ) echo 'style="background-image:url(' . $bg_image . ');"'; ?> data-ddst-selector=".subscribe-widget" data-ddst-label="Subscribe" data-ddst-no-support="typography">

				<div class="subscribe-widget-inner" data-ddst-selector=".subscribe-widget-inner" data-ddst-label="Subscribe Inner" data-ddst-no-support="typography">

					<div class="subscribe-widget-text" data-ddst-selector=".subscribe-widget-text" data-ddst-label="Subscribe - Text Line 1" data-ddst-no-support="background,borders"><a href="#"><?php echo esc_html( $heading_primary ); ?></a><a href="#"><?php echo esc_html( $heading_secondary ); ?></a>
					</div>
					<?php echo do_shortcode( $form_shortcode ); ?>

					<div class="subscribe-widget-small-text" data-ddst-selector=".subscribe-widget-small-text" data-ddst-label="Subscribe - Small Text" data-ddst-no-support="background,borders">

						<?php echo esc_html( $smalltext ); ?>

					</div>

				</div><!-- .subscribe-widget-inner -->

			</div><!-- .subscribe-widget -->

		<?php

		/* End - Widget Content */

		echo $after_widget;

	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		
		$instance = array();
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['bg_image'] = strip_tags( $new_instance['bg_image'] );
		$instance['heading_primary'] = strip_tags( $new_instance['heading_primary'] );
		$instance['heading_secondary'] = strip_tags( $new_instance['heading_secondary'] );
		$instance['form_shortcode'] = strip_tags( $new_instance['form_shortcode'] );
		$instance['smalltext'] = strip_tags( $new_instance['smalltext'] );
	

		return $instance;

	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {

		// Get values
		if ( isset( $instance[ 'title' ] ) ) $title = $instance[ 'title' ]; else $title = '';
		if ( isset( $instance[ 'bg_image' ] ) ) $bg_image = $instance[ 'bg_image' ]; else $bg_image = get_template_directory_uri() . '/images/newsletter.jpg';
		if ( isset( $instance[ 'heading_primary' ] ) ) $heading_primary = $instance[ 'heading_primary' ]; else $heading_primary = 'Subscribe To';
		if ( isset( $instance[ 'heading_secondary' ] ) ) $heading_secondary = $instance[ 'heading_secondary' ]; else $heading_secondary = 'The Newsletter';
		if ( isset( $instance[ 'form_shortcode' ] ) ) $form_shortcode = $instance[ 'form_shortcode' ]; else $form_shortcode = '';
		if ( isset( $instance[ 'smalltext' ] ) ) $smalltext = $instance[ 'smalltext' ]; else $smalltext = 'Only the good stuff, no spam';
		

		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title:', 'laurie-blog' ); ?></label> 
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'bg_image' ) ); ?>"><?php esc_html_e( 'BG Image URL:', 'laurie-blog' ); ?></label> 
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'bg_image' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'bg_image' ) ); ?>" type="text" value="<?php echo esc_attr( $bg_image ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'heading_primary' ) ); ?>"><?php esc_html_e( 'First Line:', 'laurie-blog' ); ?></label> 
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'heading_primary' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'heading_primary' ) ); ?>" type="text" value="<?php echo esc_attr( $heading_primary ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'heading_secondary' ) ); ?>"><?php esc_html_e( 'Second Line:', 'laurie-blog' ); ?></label> 
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'heading_secondary' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'heading_secondary' ) ); ?>" type="text" value="<?php echo esc_attr( $heading_secondary ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'form_shortcode' ) ); ?>"><?php esc_html_e( 'Form Shortcode :', 'laurie-blog' ); ?></label> 
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'form_shortcode' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'form_shortcode' ) ); ?>" type="text" value="<?php echo esc_attr( $form_shortcode ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'smalltext' ) ); ?>"><?php esc_html_e( 'Small Text:', 'laurie-blog' ); ?></label> 
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'smalltext' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'smalltext' ) ); ?>" type="text" value="<?php echo esc_attr( $smalltext ); ?>" />
		</p>

		<?php 

	}

}