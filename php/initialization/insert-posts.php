<?php

$pages = array(
  array('title' => 'Головна', 'slug' => 'home', 'content' => ''),
  array('title' => 'Галерея', 'slug' => 'gallery', 'content' => ''),
  array('title' => 'Прейскурант', 'slug' => 'pricing', 'content' => ''),
);

foreach ($pages as $page_data) {
  $page = get_page_by_path($page_data['slug']);
  if (!$page) {
    wp_insert_post(array(
      'post_title' => $page_data['title'],
      'post_name' => $page_data['slug'],
      'post_type' => 'page',
      'post_status' => 'publish',
      'post_content' => $page_data['content'],
      'post_authtor' => 1
    ));
  }
}

?>