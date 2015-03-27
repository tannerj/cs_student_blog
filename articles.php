<?php
/*
Template Name: Articles
*/
?>
<?php get_header(); ?>
<div id="contentWrapper">
	<div class="main_right whole">
    	<?php
			$page = get_page_by_path( 'articles' );
			$images =& get_children('post_type=attachment&post_mime_type=image&post_parent={$page->ID}');
			//print_r($images);
			$page_data = get_page($page->ID);
			echo '<h2>' . $page_data->post_title . '</h2>';
			$content = apply_filters('the_content', $page_data->post_content);
		 	echo $content;
		?>
	</div>
	<div class="main_right whole">
        <H2>Latest Articles</H2>
        <ul class='cf article'>
        <?php
			//Get Biographies category ID
			$bio = get_cat_ID('Contributor Biographies');
			$sts = get_cat_ID('Student to Student');
			$articles = query_posts( "cat=-{$bio},-{$sts}&posts_per_page=12" );
			foreach( $articles as $article )
			{
				echo '<li><a href="'. get_permalink($article->ID) . '" >'. $article->post_title .'</a></li>';	
			}
		?>
        </ul>
	</div>
    <?php get_sidebar(); ?>
</div><!-- end contentWrap -->
<?php get_footer(); ?>
