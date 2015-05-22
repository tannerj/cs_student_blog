<?php
/*
Template Name: student-to-student
*/
?>
<?php get_header(); ?>
<div id="contentWrapper">
	<div class="main_right whole">
	<h2>Student to Student</h2>
    	<?php
			$articles = query_posts( 
				array(
					'category_name' 	=> 'student-to-student', 
					'posts_per_page'	=> -1,
					)
				);
			foreach( $articles as $article )
			{
				//echo '<li><a href="'. get_permalink($article->ID) . '" >'. $article->post_title .'</a></li>';	
				echo '<p class="sts-question">' . $article->post_title . '</p>';
				echo '<p class="sts-answer">' . $article->post_content . '</p>';
			}
		?>
	</div>

    <?php get_sidebar(); ?>
</div><!-- end contentWrap -->
<?php get_footer(); ?>
