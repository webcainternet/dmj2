<form method="get" id="searchform" action="<?php bloginfo('home'); ?>">
	<input type="text" value="<?php the_search_query(); ?>" name="s">
    <input type="submit" value="<?php _e('Go!', 'theme1983'); ?>">
</form>