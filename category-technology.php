<?php get_header(); ?>
<div id="contentWrapper">
  <div id="content">
   <?php
      $page = get_page_by_path( 'articles/technology' );;
      $images =& get_children('post_type=attachment&post_mime_type=image&post_parent={$page->ID}');
      //print_r($images);
      $page_data = get_page($page->ID);
      echo '<h2>' . $page_data->post_title . '</h2>';
      $content = apply_filters('the_content', $page_data->post_content);
      echo $content;
    ?>
    <hr />
    <h2>Technology Articles</h2>
    <ul class="cf article">
    <?php
      $category = get_cat_ID('Technology');
      $category_posts = get_posts(array(
        'category' => $category,
      ));
      foreach($category_posts as $post) {
        echo '<li><a href="'. get_permalink($post->ID) . '" >'. $post->post_title .'</a></li>';   
      }
    ?>
    </ul>
  </div><!-- end content-->
  <?php get_sidebar(); ?>
</div><!-- end contentWrap -->
<?php get_footer(); ?>
