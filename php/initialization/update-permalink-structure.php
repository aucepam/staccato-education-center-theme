<?php

$permalink_structure = get_option('permalink_structure');
if (empty($permalink_structure) || $permalink_structure !== '/%postname%/') {
  require_once(ABSPATH . 'wp-admin/includes/misc.php');
  require_once(ABSPATH . 'wp-admin/includes/file.php');

  if (empty($wp_rewrite) || !($wp_rewrite instanceof WP_Rewrite)) {
    $wp_rewrite = new WP_Rewrite();
  }

  $permalink_structure = '/%postname%/';
  $wp_rewrite->set_permalink_structure($permalink_structure);
  $wp_rewrite->flush_rules();
}

?>