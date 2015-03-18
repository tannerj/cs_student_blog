<?php
/*
Template Name: About
*/
?>
<!--Mahsa's first commit-->
<?php get_header(); ?>
<div id="contentWrapper">
  <div class="main_right whole">
    <img class="banner-top" src="<?php bloginfo('template_url'); ?>/images/2014_group.jpg" alt="group photo" />
      <?php
      $page = get_page_by_path( 'about' );;
      $page_data = get_page($page_id);
    ?>
      <h2><?php echo $page_data->post_title; ?></h2>
      <?php
      $content = apply_filters('the_content', $page_data->post_content);
      echo $content;
    ?>
    </div>
    <div class="main_right whole">
      <a name="the-team"></a><h2>The Team</h2>
    
    <?php
      $bio_id = get_cat_ID( 'Contributor Biographies' );
      $biographies = query_posts( 'cat=' . $bio_id .'&orderby=title&order=ASC' );
      foreach($biographies as $biography)
      {
        echo '<h3>'. $biography->post_title .'</h3>
          <p><img class="thumbnail" src="'. get_post_meta($biography->ID, 'thumbnail', true ) .
          '" />'. $biography->post_excerpt .' <a class="more" href="'. get_permalink($biography->ID) . '" >read more</a></p>';
      }
    wp_reset_query();
    ?>
    </div>
    <?php get_sidebar(); ?>
</div><!-- end contentWrap -->
<?php get_footer(); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
