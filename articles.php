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
         ?>
			<?php foreach( $articles as $article ): ?>
			<li><a href="<?php echo get_permalink($article->ID); ?>" >
			<?php $postimageurl = get_post_meta($article->ID, 'post-img', true);
			
			if ($postimageurl){ ?>
				<a href="<?php echo get_permalink($article->ID); ?>" rel="bookmark"><img src="<?php echo $postimageurl; ?>" alt="<?php echo $article->post_title; ?>" width="100" height="80" length="100"/>
			      <?php }
			else { ?>
      				<a href="<?php echo get_permalink($article->ID); ?>" rel="bookmark"><img src="<?php bloginfo('template_url'); ?>/images/articles.jpg" alt="<?php echo $article->post_title; ?>" width="100" height="80" length="100"/>
			<?php } ?> 
			<br><?php echo $article->post_title; ?></a></li>
                        <?php endforeach; ?>
		
        </ul>
	</div>
    <?php get_sidebar(); ?>
</div><!-- end contentWrap -->
<?php get_footer(); ?>
