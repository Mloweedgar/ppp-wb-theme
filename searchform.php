<form class="search-section" action="/" method="get">
    <input type="search" name="s" id="search" value="<?php the_search_query(); ?>"/>
    <button><img src="<?php echo get_bloginfo('template_directory'); ?>/images/icons-search.svg"/></button>
</form>