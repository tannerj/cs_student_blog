<div id="searchFormWrapper">
	<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <input type="text" value="<?php the_search_query();  ?>" name="s" id="s" placeholder="Search" />
    <input type="image" alt="searc" src="<?php bloginfo( 'template_url' ); ?>/images/search.png" />
	</form>
</div>
