<?php get_header(); ?>
<div id="contentWrapper">
  <div id="content">
    <?php $page_data = get_post($page->ID); ?>
    <?php $category = get_the_category($page->ID); ?>
    <h2> <a href="/category/<?php echo $category[0]->slug; ?>"><?php echo $category[0]->name; ?></a></h2>
    <h1><?php echo $page_data->post_title; ?></h1>
    <h4>By <b><?php the_author_meta('display_name', $page_data->post_author); ?></b> on <b><?php echo mysql2date('j M Y', $page_data->post_date); ?></b> Editor <b>Marell</b></h4>
    <hr class="title"/>
    <div class="fb-like" data-href="<?php echo get_permalink($page_data->ID); ?>" 
      data-width="48" data-height="24" data-colorscheme="light" data-layout="button_count" data-action="like" data-show-faces="false" data-send="false"></div>
      <div class="g-plusone" data-size="medium"></div>
      <script type="text/javascript">
        (function() {
            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
              po.src = 'https://apis.google.com/js/plusone.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                })();
      </script>
      <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
      <?php
        $content = apply_filters('the_content', $page_data->post_content);
        echo $content;
      ?>
  </div><!-- end content-->
  <?php get_sidebar(); ?>
</div><!-- end contentWrap -->
<?php get_footer(); ?>
