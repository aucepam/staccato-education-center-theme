<?php

$menu_items = array(
  array('menu-item-title' => 'Про нас', 'menu-item-url' => '/#about', 'menu-item-status' => 'publish'),
  array('menu-item-title' => 'Дисципліни', 'menu-item-url' => '/#classes', 'menu-item-status' => 'publish'),
  array('menu-item-title' => 'Галерея', 'menu-item-url' => '/#gallery', 'menu-item-status' => 'publish'),
  array('menu-item-title' => 'Прейскурант', 'menu-item-url' => '/#pricing', 'menu-item-status' => 'publish'),
  array('menu-item-title' => 'Контакти', 'menu-item-url' => '/#contacts', 'menu-item-status' => 'publish')
);

// CREATE-PRIMARY-MENU //

$primary_menu = wp_get_nav_menu_object('Головне меню');
if (!$primary_menu) {
  $primary_menu = wp_create_nav_menu('Головне меню');

  foreach ($menu_items as $menu_item) {
    wp_update_nav_menu_item($primary_menu, 0, $menu_item);
  }
}

// CREATE-FOOTER-MENU //

$footer_menu = wp_get_nav_menu_object('Підвал сайту');
if (!$footer_menu) {
  $footer_menu = wp_create_nav_menu('Підвал сайту');

  array_unshift($menu_items, array(
    'menu-item-title' => 'Головна', 'menu-item-url' => '/', 'menu-item-status' => 'publish'
  ));

  foreach ($menu_items as $menu_item) {
    wp_update_nav_menu_item($footer_menu, 0, $menu_item);
  }
}

// SET-NAV-MENU-LOCATIONS //

set_theme_mod('nav_menu_locations', array(
  'primary' => $primary_menu,
  'footer' => $footer_menu
));

?>