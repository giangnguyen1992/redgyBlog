<?php

// Register Widget
add_action( 'widgets_init', create_function( '', 'register_widget( "laurie_blog_about_author_widget" );' ) );

// Widget Class
class laurie_blog_About_Author_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	public function __construct() {
		parent::__construct(
			'laurie_blog_about_author_widget', // Base ID
			esc_html__( 'Laurie Blog - About Author', 'laurie-blog' ), // Name
			array( 'description' => esc_html__( 'Show info about the author.', 'laurie-blog' ) ) // Args
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
		$author_image = $instance['author_image'];
		$text = $instance['text'];
		$author_signature = $instance['author_signature'];

		echo $before_widget;

		if ( ! empty( $title ) )
			echo $before_title . $title . $after_title;

		/* Start - Widget Content */

		?>

			<div class="about-author-widget" data-ddst-selector=".about-author-widget" data-ddst-label="About Author" data-ddst-no-support="typography">
					
				<?php if ( $author_image !== '' ) : ?>
					<div class="about-author-image"><img src="<?php echo esc_url( $author_image ); ?>" alt="<?php echo esc_attr_e( $name ); ?>" /></div>
				<?php endif; ?>

				<div class="about-author-widget-text" data-ddst-selector=".about-author-widget-text" data-ddst-label="About Author - Text" data-ddst-no-support="background,borders"><?php echo esc_html( $text ); ?></div>

				<?php if ( $author_signature !== '' ) : ?>
					<div class="about-author-signature"><img src="<?php echo esc_url( $author_signature ); ?>" alt="<?php echo esc_attr_e( $name ); ?>" /></div>
				<?php endif; ?>

			</div><!-- .about-author-widget -->

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
			
		$instance['author_image'] = strip_tags( $new_instance['author_image'] );
		$instance['text'] = strip_tags( $new_instance['text'] );
		$instance['author_signature'] = strip_tags( $new_instance['author_signature'] );

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
		if ( isset( $instance[ 'title' ] ) ) $title = $instance[ 'title' ]; else $title = 'About Me';
		if ( isset( $instance[ 'author_image' ] ) ) $author_image = $instance[ 'author_image' ]; else $author_image = get_template_directory_uri() . '/images/about2.jpg';
		if ( isset( $instance[ 'text' ] ) ) $text = $instance[ 'text' ]; else $text = 'Nullam consequat nisl sagittis orci vehicula, dignissim semper ligula.';
		if ( isset( $instance[ 'author_signature' ] ) ) $author_signature = $instance[ 'author_signature' ]; else $author_signature = get_template_directory_uri() . '/images/signature-black.png';

		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title:', 'laurie-blog' ); ?></label> 
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'author_image' ) ); ?>"><?php esc_html_e( 'Author Image URL:', 'laurie-blog' ); ?></label> 
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'author_image' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'author_image' ) ); ?>" type="text" value="<?php echo esc_attr( $author_image ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>"><?php esc_html_e( 'Content:', 'laurie-blog' ); ?></label> 
			<textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'text' ) ); ?>"><?php echo esc_html( $text ); ?></textarea>
		</p>		
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'author_signature' ) ); ?>"><?php esc_html_e( 'Author Signature URL:', 'laurie-blog' ); ?></label> 
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'author_signature' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'author_signature' ) ); ?>" type="text" value="<?php echo esc_attr( $author_signature ); ?>" />
		</p>

		<?php 

	}

}