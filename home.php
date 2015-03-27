<?php
/*
Template Name: Home
*/

$upload_dir = wp_upload_dir();
$latest_post_args = array('numberposts' => '1', 'post_status' => 'publish');
$latest_post = wp_get_recent_posts($latest_post_args);
$latest_post = $latest_post[0]; //we only ask for one, get rid of wrapping array
$latest_post_content = apply_filters('the_content', $latest_post['post_content']);
?>
<?php get_header(); ?>
<div id="contentWrapper">  
<div class="main_right whole sts">
   	<h2>Student to Student</h2>
	<a class=" viewAll" href="<?php echo get_bloginfo('url'); ?>/student-to-student">view all</a>
	
	<p class="sts-question">
		Do you need a car your first year of college?
	</p>
	<p class="sts-answer">
		Some schools do not allow first year students to have cars while other schools do.  Also, the parking area for freshman might be pretty far away from campus and inconvenient to get to. Personally I don’t think you need a car your first year. Many schools have reliable transit systems to get you around campus and major spots in the surrounding town or city. So definitely check and see what kind of transportation system is offered at your university when determining if you want to bring a car.
	</p>

   </div>

    <div id="update" class="main_right whole">
	<?php 
  	$custom_fields = get_post_custom($page->ID);
  	$my_custom_field = $custom_fields['my_custom_field'];
	?>  
    	<h2>Latest Article</h2>
	<a class=" viewAll" href="<?php echo get_bloginfo('url'); ?>/articles">view all</a>
        <h3 class="latest-article"><?php echo $latest_post['post_title']; ?></h3>
	<h4>By <b><?php echo $author=get_post_meta($post->ID, 'author', true) ?></b> on <b><?php echo mysql2date('j M Y', $latest_post['post_date']); ?></b> Editor <b><?php echo $editor=get_post_meta($post->ID, 'editor', true) ?></b></h4>
        <hr class="latest-article">
        <?php echo $latest_post_content; ?>
    </div>

       
    	<?php
		/*
		$page_id = 25;
		$page_data = get_page($page_id);
		echo $page_data->post_content;
		*/
		 ?>
    <?php get_sidebar(); ?>
</div><!-- end contentWrap -->
<?php get_footer(); ?>

<?php 
$bioId = get_cat_ID('Contributor Biographies'); 
$excerpt = query_posts( array('author_in' => array()), 'cat='. $bioId);

?>