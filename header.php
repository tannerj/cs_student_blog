<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<title>
<?php 
  global $page, $paged;
  wp_title( '|', true, 'right');
  bloginfo('name');
  $site_description = get_bloginfo('description', 'display');
  if($site_description && (is_home() || is_front_page())) {
    echo " | {$site_description}";  
  }
  if($paged >= 2 || $page >= 2 ) {
    echo ' | '. sprintf(__('Page %s'), max($paged, $page)); 
  }
?>
</title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
<link href='http://fonts.googleapis.com/css?family=Cardo:400,400italic' rel='stylesheet' type='text/css'>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript">
</script>
<![endif]-->
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/meet-the-team.js"></script>
<?php
if(is_singular() && get_option('thread_comments')) {
  wp_enqueue_script('comment-reply'); 
}
?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!--Facebook JavaScript SDK-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  <header>
    <div id="headerWrapper">
      <div id="headerTitleWrapper">
        <img src="<?php bloginfo( 'template_url'); ?>/images/student_blog_logo.png" alt="College STAR Student Blog" />
      <div id="socialMedia">
        <div class="icon">
          <a href="http://www.facebook.com/collegestar.org" target="_blank" style="text-decoration:none;" >
            <img src="http://www.collegestar.org/lib/images/vendor/f_logo.png" alt="facebook" style="borer:0;width:32px;height:32px;"/></a>
        </div>
        <div class="icon">
          <a href="//plus.google.com/100131334264339307228?prsrc=3" rel="publisher" style="text-decoration:none;" target="_blank" >
          <img src="//ssl.gstatic.com/images/icons/gplus-32.png" alt="Google+" style="border:0;width:32px;height:32px;"/></a>
        </div>
        <div class="icon">
          <a href="https://twitter.com/CollegeSTAR_ORG" style="text-decoration:none;" target="_blank" >
          <img src="http://www.collegestar.org/lib/images/vendor/twitter-bird-light-bgs.png" alt="twitter" style="border:0;width:32px;height:32px;"/></a>
        </div>
        <div class="icon">
          <a href="http://www.pinterest.com/csblog/boards" target="_blank">
          <img src="http://www.collegestar.org/lib/images/vendor/pinterest_badge_red.png" alt="Pinterest" style="border:0;width:32pxheight:32px;"></a>
        </div>
      </div>
      <div id="headerTitleQuote">
        <div class="quote">"Do more of what makes you awesome!"</div>
        <div class="source"> Unknown</div>
      </div>
        </div>
        <nav class="mainMenu" >
          <div id="mainMenuWrapper" class="cf">
          <?php   
            wp_nav_menu(array('menu', 'Main_Nav'));  
            get_search_form();
          ?>
          </div>
        </nav>
        </div>
  </header>
<div id="outerWrapper">
<div id="mainWrapper">
