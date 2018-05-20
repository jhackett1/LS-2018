<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
    <button type="submit" id="searchsubmit"><?php echo esc_attr_x( 'Search', 'submit button' ); ?></button>
</form>
