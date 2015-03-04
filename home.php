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
    
<div class="main_right whole">
    <h2>Meet the Team</h2>
	<div class="meet-the-team">
    	<div class="mt-imagesBox"></div>
		<div class="mt-descriptions">
			<a class="viewAll" href="<?php echo get_bloginfo('url'); ?>/about#the-team">view all</a>
		</div>
	</div>
	<div class="mt-controls">
		<a class="next" href="#"><img src="<?php echo bloginfo('template_directory'); ?>/images/right_arrow.png" alt="next"></a>
		<a class="previous" href="#"><img src="<?php echo bloginfo('template_directory'); ?>/images/left_arrow.png" alt="next"></a>
	</div>
</div>
<!--    
	<div class="main_right right_half">
    	<h2>Latest Tweets</h2>
    </div>
-->
    <div id="update" class="main_right whole">
    	<h2>Latest Article</h2>
	<a class=" viewAll" href="<?php echo get_bloginfo('url'); ?>/articles">view all</a>
        <h3 class="latest-article"><?php echo $latest_post['post_title']; ?></h3>
        <h4>By <b><?php the_author_meta('display_name', $latest_post['post_author']); ?></b> on <b><?php echo mysql2date('j M Y', $latest_post['post_date']); ?></b> Editor <b>Marell</b></h4>
        <hr class="latest-article">
        <?php echo $latest_post_content; ?>
    </div>

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
<!--Meet the Team items -->
<div class="mt-imgBox">
	<img src="<?php echo $upload_dir['baseurl']; ?>/2013/05/mt-marell.jpg" />
</div>
<div class="mt-description">
	<h3>Marell</h3>
	<hr />
	<h4>Editor - East Carolina University</h4>
<p>
My name is Marell, and my home town is Charlotte, NC. I’m 22 years old, currently a junior at East Carolina University, and have been diagnosed with dyslexia. I’m majoring in English and minoring in Communications with the dream of one day becoming an accomplished novelist. I love college, and have had some amazing experiences at East Carolina. But I wasn’t always so enthusiastic when it came to academics. <a href="<?php echo get_bloginfo('url'); ?>/bio/marell" >read more</a>
</p>
</div>

<div class="mt-imgBox">
	<img src="<?php echo $upload_dir['baseurl']; ?>/2013/05/mt-daniel.jpg" />
</div>
<div class="mt-description">
	<h3>Daniel</h3>
	<hr />
	<h4>Author/Contributor - East Carolina University</h4>
<p>
My name is Daniel, I am 22 years old, and was born and raised in Charlotte, North Carolina. I was diagnosed with slow processing speed in my sophomore year of high school. I am currently in my senior year at East Carolina University, pursuing a major in Recreation and Leisure Studies. I want to do something related to outdoor recreation, because I love being outdoors and discovering new ways to enjoy what nature has to offer. <a href="<?php echo get_bloginfo('url'); ?>/bio/daniel">read more</a>
</p>
</div>

<div class="mt-imgBox">
	<img src="<?php echo $upload_dir['baseurl']; ?>/2013/11/mt-lee-2.jpg" />
</div>
<div class="mt-description">
	<h3>Lee</h3>
	<hr />
	<h4>Author/Contributor - East Carolina University</h4>
<p>
My name is Lee, I am 21 years old, have dyslexia, and am senior at East Carolina University. My major is Family and Community Services with a concentration in Early Intervention, and I hope to someday go to graduate school to become a social worker. After growing up in Washington, DC, I am a city girl at heart! <a href="<?php echo get_bloginfo('url'); ?>/bio/lee">read more</a>
</p>
</div>

<div class="mt-imgBox">
	<img src="<?php echo $upload_dir['baseurl']; ?>/2013/11/mt-courtney-2.jpg" />
</div>
<div class="mt-description">
	<h3>Courtney</h3>
	<hr />
	<h4>Author/Contributor - East Carolina University</h4>
<p>
Hi, my name is Courtney! I am 20 years old and from Raleigh, North Carolina. I am currently in my junior year at East Carolina University, where I am majoring in Communications with a concentration in public relations and minor in English. One day I hope to work with a non-profit organization or public relations firm. My personal learning differences are dyslexia with a processing disorder. <a href="<?php echo get_bloginfo('url'); ?>/bio/courtney" >read more</a>
</p>
</div>
<div class="mt-imgBox">
	<img src="<?php echo $upload_dir['baseurl']; ?>/2013/11/mt-becca.jpg" />
</div>
<div class="mt-description">
	<h3>Becca</h3>
	<hr />
	<h4>Author/Contributor - East Carolina University</h4>
<p>
My name is Becca, and I am from Clayton, Delaware. I’m 19 years old and currently in my sophomore year of college at East Carolina University. I was diagnosed in the fifth grade with dyslexia after much confusion and many tests. My major is psychology with a minor in sociology. Right now I’m not sure what exactly I want to do after college. If possible, I would love to work with students who have learning differences in some way.<a href="<?php echo get_bloginfo('url'); ?>/bio/becca" >read more</a>
</p>
</div>
<div class="mt-imgBox">
	<img src="<?php echo $upload_dir['baseurl']; ?>/2013/11/mt-stephanie-2.jpg" />
</div>
<div class="mt-description">
	<h3>Stephanie</h3>
	<hr />
	<h4>Author/Contributor - East Carolina University</h4>
<p>
My name is Stephanie. I am in my fourth year at East Carolina University, and my major is communications with a concentration in Public Relations. What I want to do when I grow up is still unknown, but I am thinking of maybe working for a sports team. I am diagnosed with a math difference and auditory processing. <a href="<?php echo get_bloginfo('url'); ?>/bio/stephanie" >read more</a>
</p>
</div>

