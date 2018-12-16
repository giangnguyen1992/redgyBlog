<?php

add_action( 'widgets_init', create_function( '', 'register_widget( "laurie_blog_posts_list_widget" );' ) );
class Laurie_Blog_Posts_List_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	public function __construct() {
		parent::__construct(
			'laurie_blog_posts_list_widget', // Base ID
			esc_html__( 'Laurie Blog - Posts List', 'laurie-blog' ), // Name
			array( 'description' => esc_html__( 'Show recent or popular posts.', 'laurie-blog' ) ) // Args
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
		
		$amount = $instance['amount'];
		$type = $instance['type'];
		$blog_categories = $instance['blog_categories'];

		// Order by
		$orderby = 'date';
		if ( $type == 'popular' ) {
			$orderby = 'comment_count';
		}

		echo $before_widget;

		if ( ! empty( $title ) )
			echo $before_title . $title . $after_title;

		/* Start - Widget Content */

		// vars used
		$count = 0;
		$real_count = 0;
		$post_columns = 12;
		$max_columns = 12 / $post_columns;

		// query arguments
		$args = array(
			'post_type' => 'post',
			'posts_per_page' => $amount,
			'orderby' => $orderby
		);

		// blog categories
		if ( $blog_categories !== 'all' ) {
			$args['tax_query'] = array(
				array(
					'taxonomy' => 'category',
					'field'    => 'term_id',
					'terms'    => $blog_categories,
				),
			);
		}

		// do the query
		$laurie_blog_query = new WP_Query( $args );

		if ( $laurie_blog_query->have_posts() ) :

			?>

			<div class="posts-list-widget clear">

				<?php 

					// start posts loop
					while ( $laurie_blog_query->have_posts() ) : $laurie_blog_query->the_post();

						// increase counts
						$count++;
						$real_count++;

						?>

						<article <?php post_class(); ?>>

						<!-- Post Thumbnail -->
						<?php if ( has_post_thumbnail() ) : ?>	
						<div class="post-thumb">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'laurie-blog-post-widget-thumb' ); ?></a>
						</div>
						<?php endif; ?>

						<!-- Post Main Content -->
						<div class="post-main">
						
							<!-- Post Title -->
							<header class="entry-header">
								<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
							</header>

							<!-- Post Meta -->
							<?php
							if ( 'post' === get_post_type() ) : ?>
							<div class="entry-meta">
								<?php laurie_blog_posted_on(); ?>
							</div><!-- .entry-meta -->
							<?php
							endif; ?>

						</div>

					</article><!-- #post-## -->

					<?php
					// end posts loop
					endwhile; 

				?>

			</div><!-- .posts-list-widget -->

			<?php

		endif;

		wp_reset_postdata();

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
		$instance['amount'] = strip_tags( $new_instance['amount'] );
		$instance['blog_categories'] = strip_tags( $new_instance['blog_categories'] );
		$instance['type'] = strip_tags( $new_instance['type'] );

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

		// Blog categories
		$blog_categories = get_terms( 'category' );
		$blog_categories_options = array(
			'all' => 'All',
		);
		foreach ( $blog_categories as $blog_category ) {
			$blog_categories_options[$blog_category->term_id] = $blog_category->name;
		}

		// Get values
		if ( isset( $instance[ 'title' ] ) ) $title = $instance[ 'title' ]; else $title = 'Recent Posts';
		if ( isset( $instance[ 'amount' ] ) ) $amount = $instance[ 'amount' ]; else $amount = '4';
		if ( isset( $instance[ 'blog_categories' ] ) ) $blog_categories = $instance[ 'blog_categories' ]; else $blog_categories = 'all';
		if ( isset( $instance[ 'type' ] ) ) $type = $instance[ 'type' ]; else $type = 'recent';

		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title:', 'laurie-blog' ); ?></label> 
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'amount' ) ); ?>"><?php esc_html_e( 'Amount:', 'laurie-blog' ); ?></label> 
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'amount' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'amount' ) ); ?>" type="text" value="<?php echo esc_attr( $amount ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'type' ) ); ?>"><?php esc_html_e( 'Type:', 'laurie-blog' ); ?></label> 
			<select class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'type' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'type' ) ); ?>">
				<option <?php if ( $type == 'recent' ) echo 'selected="selected"'; ?> value="recent"><?php esc_html_e( 'Recent', 'laurie-blog' ); ?></option>
				<option <?php if ( $type == 'popular' ) echo 'selected="selected"'; ?> value="popular"><?php esc_html_e( 'Popular', 'laurie-blog' ); ?></option>
			</select>
		</p>	
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'blog_categories' ) ); ?>"><?php esc_html_e( 'Blog Category:', 'laurie-blog' ); ?></label> 
			<select class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'blog_categories' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'blog_categories' ) ); ?>">
				<?php foreach ( $blog_categories_options as $cat_id => $cat_name ) : ?>
					<option <?php if ( $blog_categories == $cat_id ) echo 'selected="selected"'; ?> value="<?php echo esc_attr( $cat_id ); ?>"><?php echo esc_html( $cat_name ); ?></option>
				<?php endforeach; ?>
			</select>
		</p>	
		<?php 

	}

}