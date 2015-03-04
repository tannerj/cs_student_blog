<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>
<div id="contentWrapper">
	<div id="content">
    <?php
			$page = get_page_by_path( 'contact' );;
			$images =& get_children('post_type=attachment&post_mime_type=image&post_parent={$page->ID}');
			//print_r($images);
			$page_data = get_page($page->ID);
			echo '<h2>' . $page_data->post_title . '</h2>';
			$content = apply_filters('the_content', $page_data->post_content);
		 	echo $content;
		?>
    <hr />
    <!--
    	<form action="/index.php" method="post">
        	<input type="text" id="name" name="name" />
        	<input type="submit" name="submit" value="submit" />
        </form>
     -->
	</div><!-- end content-->
  <?php get_sidebar(); ?>
</div><!-- end contentWrap -->
<?php get_footer(); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
