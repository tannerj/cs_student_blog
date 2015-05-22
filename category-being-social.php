<?php get_header(); ?>
<div id="contentWrapper">
	<div id="content">
    	<?php
			$page = get_page_by_path( 'articles/social' );;
			$images =& get_children('post_type=attachment&post_mime_type=image&post_parent={$page->ID}');
			//print_r($images);
			$page_data = get_page($page->ID);
			echo '<h2>' . $page_data->post_title . '</h2>';
			$content = apply_filters('the_content', $page_data->post_content);
		 	echo $content;
		?>
        <hr />
        <h2>Articles about Being Social</h2>
        <ul class='cf article'>
        <?php
			$category = get_cat_ID('Being Social');
			$category_posts = get_posts(array('category' => $category,'posts_per_page' => 100));
         ?>
			<?php foreach( $category_posts as $post ): ?>
			<li><a href="<?php echo get_permalink($post->ID); ?>" >
			<?php $postimageurl = get_post_meta($post->ID, 'post-img', true);
			
			if ($postimageurl){ ?>
				<a href="<?php echo get_permalink($post->ID); ?>" rel="bookmark"><img src="<?php echo $postimageurl; ?>" alt="<?php echo $post->post_title; ?>" width="100" height="80" length="100"/>
			      <?php }
			else { ?>
      				<a href="<?php echo get_permalink($post->ID); ?>" rel="bookmark"><img src="<?php bloginfo('template_url'); ?>/images/articles.jpg" alt="<?php echo $post->post_title; ?>" width="100" height="80" length="100"/>
			<?php } ?> 
			<br><?php echo $post->post_title; ?></a></li>
                        <?php endforeach; ?>
        </ul>
	</div><!-- end content-->
    <?php get_sidebar(); ?>
</div><!-- end contentWrap -->
<?php get_footer(); ?>
