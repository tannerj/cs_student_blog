<?php get_header(); ?>
<div id="contentWrapper">
  <div id="content">
    <p>articles-classes.php</p>
      <?php
      $page = get_page_by_path( 'articles/classes' );;
      $images =& get_children('post_type=attachment&post_mime_type=image&post_parent={$page->ID}');
      //print_r($images);
      $page_data = get_page($page->ID);
      echo '<h2>' . $page_data->post_title . '</h2>';
      $content = apply_filters('the_content', $page_data->post_content);
      echo $content;
    ?>
        <hr />
  </div><!-- end content-->
    <?php get_sidebar(); ?>
</div><!-- end contentWrap -->
<?php get_footer(); ?>
