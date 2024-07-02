<?php

add_action('customize_register', function ($wp_customize) {
  $wp_customize->add_section('gallery-page-media-section', array(
    'title' => 'Галерея',
    'panel' => 'gallery-page-panel',
    'priority' => '2'
  ));

  // GALLERY-PAGE-MEDIA-IS-TABS-ENABLED //

  $wp_customize->add_setting('gallery-page-media-is-tabs-enabled', array(
    'default' => '1'
  ));

  $wp_customize->add_control('gallery-page-media-is-tabs-enabled', array(
    'label' => 'Відображати папки',
    'description' => 'Якщо вимкнено, то на сторінці відображатимуться лише всі файли, без сортування за папками',
    'section' => 'gallery-page-media-section',
    'type' => 'checkbox'
  ));

  // GALLERY-PAGE-MEDIA-IS-EMPTY-ENABLED //

  $wp_customize->add_setting('gallery-page-media-is-empty-enabled', array(
    'default' => ''
  ));

  $wp_customize->add_control('gallery-page-media-is-empty-enabled', array(
    'label' => 'Відображати порожні папки',
    'description' => 'Чи відображати порожні папки у вкладках',
    'section' => 'gallery-page-media-section',
    'type' => 'checkbox'
  ));

  // GALLERY-PAGE-MEDIA-COUNT //

  $wp_customize->add_setting('gallery-page-media-count', array(
    'default' => 32
  ));

  $wp_customize->add_control('gallery-page-media-count', array(
    'label' => 'Кількість медіа',
    'description' => 'Кількість медіа, що відображаються на сторінці',
    'section' => 'gallery-page-media-section',
    'type' => 'number'
  ));

  // GALLERY-PAGE-MEDIA-TABS-COLOR //

  $wp_customize->add_setting('gallery-page-media-tabs-color', array(
    'default' => 'tabs-rose'
  ));

  $wp_customize->add_control('gallery-page-media-tabs-color', array(
    'label' => 'Колір вкладок',
    'description' => 'Виберіть колір вкладок',
    'section' => 'gallery-page-media-section',
    'type' => 'select',
    'choices' => prefixed_colors('tabs')
  ));

  // GALLERY-PAGE-MEDIA-PAGINATION-COLOR //

  $wp_customize->add_setting('gallery-page-media-pagination-color', array(
    'default' => 'pagination-rose'
  ));

  $wp_customize->add_control('gallery-page-media-pagination-color', array(
    'label' => 'Колір нумерації сторінок',
    'description' => 'Виберіть колір нумерації сторінок',
    'section' => 'gallery-page-media-section',
    'type' => 'select',
    'choices' => prefixed_colors('pagination')
  ));

  // GALLERY-PAGE-MEDIA-VIDEO-COLOR //

  $wp_customize->add_setting('gallery-page-media-video-color', array(
    'default' => 'duotone-icon-rose'
  ));

  $wp_customize->add_control('gallery-page-media-video-color', array(
    'label' => 'Колір кнопки відеоплеєра',
    'section' => 'gallery-page-media-section',
    'type' => 'select',
    'choices' => prefixed_colors('duotone-icon')
  ));
});

?>