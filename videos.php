<?php
/*
Template Name: Videos
*/
?>
<?php get_header(); ?>
<div id="contentWrapper">
  <div id="content">
    <?php
      $page = get_page_by_path( 'videos' );
      $page_data = get_page($page->ID);
      echo '<h2>' . $page_data->post_title . '</h2>';
      $content = apply_filters('the_content', $page_data->post_content);
      echo $content;
    ?>
  </div><!-- end content-->
  <?php get_sidebar(); ?>
</div><!-- end contentWrap -->
<?php get_footer(); ?>
