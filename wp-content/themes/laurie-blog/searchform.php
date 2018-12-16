<form class="search-form" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">

    <div class="search-form-inner">

        <input type="text" value="" name="s" placeholder="<?php esc_attr_e( 'Type & Hit Enter ...', 'laurie-blog' ); ?>" />

        <span class="search-icon"></span>

        <div class="search-form-submit"><input type="submit" id="searchsubmit" value="<?php esc_attr_e( 'Submit', 'laurie-blog' ); ?>"></div>

    </div>

</form>