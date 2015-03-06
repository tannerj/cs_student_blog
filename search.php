<?php
global $query_string;
$query_args = explode("&", $query_string);
$search_query = array();
?>
<?php get_header(); ?>
<div id="contentWrapper">
  <div id="content" class="main_right whole">
    <h2>Search Results</h2>
    <ul>
    <?php
      foreach($query_args as $key => $string) {
        $query_split = explode("=", $string);
        $search_query[$query_split[0]] = urldecode($query_split[1]);
      }
      $search = new WP_Query($search_query);
      if ($search->have_posts()) {
        echo "<ul>";
        while ($search->have_posts()) {
          $search->the_post();
          echo "<li>" . get_the_title() . "</li>";
        }
        echo "</ul>";
      }
    ?>
  </div><!-- end content-->
  <?php get_sidebar(); ?>
</div><!-- end contentWrap -->
<?php get_footer(); ?>
