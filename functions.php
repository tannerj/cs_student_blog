<?php
require_once('widgets/CSSB_Categories.php');
require_once('widgets/CSSB_Recent.php');
/**
 *  Site Level Constants Defined Here
 *
 */
 
 //The category id for biographies
 define('BIOGRAPHY', 6);
 
 //The category id for Bio Summaries
 define('BIOSUMMARY', 17);

 //The category id for Student to Student
 define('STS', 53);
 

register_sidebar(array(
  'name'        => 'Sidebar Widgets Test',
  'id'        => 'sidebar-widgets',
  'description'   => 'Widgets for the sidebar',
  'before_widget'   => '<aside id="%1$s" class="widget %2$s">',
  'after_widget'    => '</aside>',
  'before_title'    => '<h3 class="sidebar-widget-title">',
  'after_title'   => '</h3>',
)); 
  
register_nav_menus(array(
  'main_nav' => 'Main Navigation Menu'
));

add_action('show_user_profile', 'my_show_extra_profile_fields');
add_action('edit_user_profile', 'my_show_extra_profile_fields');

function my_show_extra_profile_fields($user) { ?>
  <h3>College STAR Extra Information</h3>
  <table class="form-table">
    <tr>
      <th><label for="cs-title">Title:</label></th>
      <td><input type="text" name="cs-title" id="cs-title" value="<?php echo esc_attr(get_the_author_meta('cstitle', $user->ID)); ?>" class="regular-text" /><br />
      <span class="description">Please enter your College STAR Student Blog Title.</span>
    </tr> 
    <tr>
      <th><label for="cs-universit">University:</label></th>
      <td><input type="text" name="cs-university" id="cs-university" 
            value="<?php echo esc_attr(get_the_author_meta('csuniversity', $user->ID)); ?>" class="regular-text" /><br />
      <span class="description">Please enter your University.</span>
    </tr> 
    <tr>
      <th><label for="cs-profile-image">Profile Image:</label></th>
      <td><input type="text" name="cs-profile-image" id="cs-profile-image" 
            value="<?php echo esc_attr(get_the_author_meta('csprofileimage', $user->ID)); ?>" class="regular-text" /><br />
      <span class="description">Please enter the path to your profile image.</span>
    </tr>
  </table>
<?php
}

add_action('personal_options_update', 'my_save_extra_profile_fields');
add_action('edit_user_profile_update', 'my_save_extra_profile_fields');

function my_save_extra_profile_fields($user_id) {
  if(!current_user_can('edit_user', $user_id)) { 
    return false;
  }
  update_usermeta($user_id, 'cs-title', $_POST['cs-title']);
  update_usermeta($user_id, 'cs-university', $_POST['cs-university']);
  update_usermeta($user_id, 'cs-profile-image', $_POST['cs-profile-image']);
}

?>
