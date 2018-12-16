<?php

function laurie_blog_category_options_add( $tag ) {

    $dd_category_meta = get_option( 'dd_category_meta' );

    ?>

    <tr class="form-field">
        <th scope="row" valign="top"><label for="dd-category-img"><?php esc_html_e( 'Image URL', 'laurie-blog'); ?></label></th>
        <td>
            <input type="text" id="dd-category-img" name="dd_category_meta[<?php echo esc_attr( $tag->term_id ); ?>][dd_category_img]" value="<?php if ( isset( $dd_category_meta[ $tag->term_id ] ) ) echo esc_attr( $dd_category_meta[ $tag->term_id ]['dd_category_img'] ); ?>" />
            <p class="description"><?php esc_html_e( 'Enter the URL to the image. Will be shown as background image below the header when viewing a category archive.', 'laurie-blog' ); ?></p>
        </td>
    </tr>
    
    <?php

} add_action( 'edit_category_form_fields', 'laurie_blog_category_options_add' );

function laurie_blog_category_options_save() {

    if ( isset( $_POST['dd_category_meta'] ) ) {

        if ( get_option('dd_category_meta' ) ) {
            $current_options = get_option( 'dd_category_meta' );
        } else {
            $current_options = array();
        }

        $post_info = $_POST['dd_category_meta'];
        if ( is_array( $post_info ) ) {
            foreach( $post_info as $key => $value ) {
                $current_options[$key] = $value;
            }
        }

        update_option('dd_category_meta', $current_options);
        
    }

} add_action( 'edit_category', 'laurie_blog_category_options_save' );

function laurie_blog_tag_options_add( $tag ) {

    $dd_tags_meta = get_option( 'dd_tags_meta' );

    ?>

    <tr class="form-field">
        <th scope="row" valign="top"><label for="dd-tag-img"><?php esc_html_e( 'Image URL', 'laurie-blog'); ?></label></th>
        <td>
            <input type="text" id="dd-tag-img" name="dd_tags_meta[<?php echo esc_attr( $tag->term_id ); ?>][dd_tag_img]" value="<?php if ( isset( $dd_tags_meta[ $tag->term_id ] ) ) echo esc_attr( $dd_tags_meta[ $tag->term_id ]['dd_tag_img'] ); ?>" />
            <p class="description"><?php esc_html_e( 'Enter the URL to the image. Will be shown as background image below the header when viewing a tag archive.', 'laurie-blog' ); ?></p>
        </td>
    </tr>
    
    <?php

} add_action( 'edit_tag_form_fields', 'laurie_blog_tag_options_add' );

function laurie_blog_tags_options_save() {

    if ( isset( $_POST['dd_tags_meta'] ) ) {

        if ( get_option('dd_tags_meta' ) ) {
            $current_options = get_option( 'dd_tags_meta' );
        } else {
            $current_options = array();
        }

        $post_info = $_POST['dd_tags_meta'];
        if ( is_array( $post_info ) ) {
            foreach( $post_info as $key => $value ) {
                $current_options[$key] = $value;
            }
        }

        update_option('dd_tags_meta', $current_options);
        
    }

} add_action( 'edit_post_tag', 'laurie_blog_tags_options_save' );