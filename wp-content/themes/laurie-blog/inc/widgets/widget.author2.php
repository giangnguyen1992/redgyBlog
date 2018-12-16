<?php

// Register Widget
add_action( 'widgets_init', create_function( '', 'register_widget( "laurie_blog_about_author_widget_2" );' ) );

// Widget Class
class laurie_blog_About_Author_Widget_2 extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	public function __construct() {
		parent::__construct(
			'laurie_blog_about_author_widget_2', // Base ID
			esc_html__( 'Laurie Blog - About Author 2', 'laurie-blog' ), // Name
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
		$textline1 = $instance['textline1'];
		$textline2 = $instance['textline2'];
		$author_signature = $instance['author_signature'];
		$text2 = $instance['text2'];
		$text2url = $instance['text2url'];

		echo $before_widget;

		if ( ! empty( $title ) )
			echo $before_title . $title . $after_title;

		/* Start - Widget Content */

		?>

		<div class="about-author-widget-2" <?php if ( $author_image != '' ) echo 'style="background-image:url(' . $author_image . ');"'; ?> data-ddst-selector=".about-author-widget-2" data-ddst-label="About Author 2" data-ddst-no-support="typography">

			<div class="about-author-widget-2-content">
				
				<div class="about-author-widget-text" data-ddst-selector=".about-author-widget-text" data-ddst-label="About Author - Text Line 1" data-ddst-no-support="background,borders"><a class="first-line" href="<?php echo esc_html( $text2url ); ?>"><?php echo esc_html( $textline1 ); ?></a><a href="<?php echo esc_html( $text2url ); ?>"><?php echo esc_html( $textline2 ); ?></a>
				</div>

				<?php if ( $author_signature !== '' ) : ?>
					<div class="about-author-signature"><img src="<?php echo esc_url( $author_signature ); ?>" alt="<?php echo esc_attr_e( $name ); ?>" /></div>
				<?php endif; ?>

				<div class="about-author-widget-text-2" data-ddst-selector=".about-author-widget-text-2" data-ddst-label="About Author - Text 2" data-ddst-no-support="background,borders">

					<a href="<?php echo esc_html( $text2url ); ?>"><?php echo esc_html( $text2 ); ?></a>

				</div>

			</div>

		</div>

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
		$instance['textline1'] = strip_tags( $new_instance['textline1'] );
		$instance['textline2'] = strip_tags( $new_instance['textline2'] );
		$instance['author_signature'] = strip_tags( $new_instance['author_signature'] );
		$instance['text2'] = strip_tags( $new_instance['text2'] );
		$instance['text2url'] = strip_tags( $new_instance['text2url'] );

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
		if ( isset( $instance[ 'author_image' ] ) ) $author_image = $instance[ 'author_image' ]; else $author_image = get_template_directory_uri() . '/images/about.jpg';
		if ( isset( $instance[ 'textline1' ] ) ) $textline1 = $instance[ 'textline1' ]; else $textline1 = 'Hi! Im Laurie.';
		if ( isset( $instance[ 'textline2' ] ) ) $textline2 = $instance[ 'textline2' ]; else $textline2 = 'I Love Interior Design.';
		if ( isset( $instance[ 'author_signature' ] ) ) $author_signature = $instance[ 'author_signature' ]; else $author_signature = get_template_directory_uri() . '/images/signature.png';
		if ( isset( $instance[ 'text2' ] ) ) $text2 = $instance[ 'text2' ]; else $text2 = 'Learn more about me';
		if ( isset( $instance[ 'text2url' ] ) ) $text2url = $instance[ 'text2url' ]; else $text2url = '#';

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
			<label for="<?php echo esc_attr( $this->get_field_id( 'textline1' ) ); ?>"><?php esc_html_e( 'Text Line 1 :', 'laurie-blog' ); ?></label> 
			<textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'textline1' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'textline1' ) ); ?>"><?php echo esc_html( $textline1 ); ?></textarea>
		</p>
			<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'textline2' ) ); ?>"><?php esc_html_e( 'Text Line 2 :', 'laurie-blog' ); ?></label> 
			<textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'textline2' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'textline2' ) ); ?>"><?php echo esc_html( $textline2 ); ?></textarea>
		</p>		
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'author_signature' ) ); ?>"><?php esc_html_e( 'Author Signature URL:', 'laurie-blog' ); ?></label> 
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'author_signature' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'author_signature' ) ); ?>" type="text" value="<?php echo esc_attr( $author_signature ); ?>" />
		</p>
				<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'text2' ) ); ?>"><?php esc_html_e( 'Text 2:', 'laurie-blog' ); ?></label> 
			<textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'text2' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'text2' ) ); ?>"><?php echo esc_html( $text2 ); ?></textarea>
		</p>
				</p>
				<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'text2url' ) ); ?>"><?php esc_html_e( 'Text 2 URL:', 'laurie-blog' ); ?></label> 
			<textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'text2url' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'text2url' ) ); ?>"><?php echo esc_html( $text2url ); ?></textarea>
		</p>

		<?php 

	}

}