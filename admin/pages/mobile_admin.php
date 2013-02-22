<?php
  function fdx_mobile_admin() {
    $base = get_option('home');

    if (($user = wp_get_current_user())==null || $user->ID==0) {
      header("Location: $base/wp-login.php?redirect_to=" . urlencode($base) . "%2Fwp-admin%2F");
    }


get_header();
if(current_user_can('manage_options')) {
//-------------------------------------------------------------------
    $base = get_option('home');
    $base = get_option('home');
    global $current_user;
    get_currentuserinfo();
    echo '<div class="ot_article_pagination" style="padding-left:7px;"><a href="'.$base.'/">' . __('Return to the site', 'fdx-lang') . '</a><span class="ot_next"><a href="'. wp_logout_url() .'">' . __('Logout', 'fdx-lang') . '</a></span></div>';
    echo '<div class="ot_article ot_page">';
    echo '<div align="center">' . get_avatar(get_the_author_meta(), 96) . '</div>';
    echo '<blockquote>'.__('Display name', 'fdx-lang') . ': <strong>' . $current_user->display_name . '</strong><br />';
    echo __('Email', 'fdx-lang') . ': <strong>' . $current_user->user_email . '</strong><br />';
    echo __('First name', 'fdx-lang') . ': <strong>' . $current_user->user_firstname . '</strong><br />';
    echo __('Last name', 'fdx-lang') . ': <strong>' . $current_user->user_lastname . '</strong><br />';
    echo __('Username', 'fdx-lang') . ': <strong>' . $current_user->user_login . '</strong><br />';
    echo __('User ID', 'fdx-lang') . ': <strong>' . $current_user->ID . '</strong></blockquote>';
    echo '<p>' . __('To access the full control panel, please access the Desktop version. Or, to access a panel mobile version, install the Official App.', 'fdx-lang');
    echo ' (<a href="http://wordpress.org/extend/mobile/">Mobile Apps</a>)</p>';
//-------------------------------------------------------------------
    } else {
//-------------------------------------------------------------------
    $base = get_option('home');
    global $current_user;
    get_currentuserinfo();
    echo '<div class="ot_article_pagination" style="padding-left:7px;"><a href="'.$base.'/">' . __('Return to the site', 'fdx-lang') . '</a><span class="ot_next"><a href="'. wp_logout_url() .'">' . __('Logout', 'fdx-lang') . '</a></span></div>';
    echo '<div class="ot_article ot_page">';
    echo '<div align="center">' . get_avatar(get_the_author_meta(), 96) . '</div>';
    echo '<blockquote>'.__('Display name', 'fdx-lang') . ': <strong>' . $current_user->display_name . '</strong><br />';
    echo __('Email', 'fdx-lang') . ': <strong>' . $current_user->user_email . '</strong><br />';
    echo __('First name', 'fdx-lang') . ': <strong>' . $current_user->user_firstname . '</strong><br />';
    echo __('Last name', 'fdx-lang') . ': <strong>' . $current_user->user_lastname . '</strong><br />';
    echo __('Username', 'fdx-lang') . ': <strong>' . $current_user->user_login . '</strong><br />';
    echo __('User ID', 'fdx-lang') . ': <strong>' . $current_user->ID . '</strong></blockquote>';
    echo '<p>' . __('To view and edit your complete profile, please access the desktop version', 'fdx-lang') . '</p>';
//-------------------------------------------------------------------
    }

  echo '</div>';
  get_footer('2');
  }

  fdx_mobile_admin();

  function wpmp_msma_check_referer() {
    $base = get_option('home');
    $admin = "$base/wp-admin";
    $referer = $_SERVER['HTTP_REFERER'];
    if (substr($referer, 0, strlen($admin)) != $admin) {
      print __("You may only originate this action from the admin pages", 'fdx-lang');
      return false;
    }
    return true;
  }


?>