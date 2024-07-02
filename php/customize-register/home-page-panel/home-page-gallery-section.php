<?php

add_action('customize_register', function ($wp_customize) {
  $wp_customize->add_section('home-page-gallery-section', array(
    'title' => 'Галерея',
    'panel' => 'home-page-panel',
    'priority' => '5'
  ));

  // HOME-PAGE-GALLERY-TITLE //

  $wp_customize->add_setting('home-page-gallery-title', array(
    'default' => 'Як ми * # працюємо'
  ));

  $wp_customize->add_control('home-page-gallery-title', array(
    'label' => 'Заголовок',
    'description' => 'Щоб використати перенесення рядка, введіть #. Щоб вставити іконку, введіть *. Щоб обвести слово, вставте слово між ( та )',
    'section' => 'home-page-gallery-section',
    'type' => 'textarea'
  ));

  // HOME-PAGE-GALLERY-SUBTITLE //

  $wp_customize->add_setting('home-page-gallery-subtitle', array(
    'default' => 'Наша робота заснована на вірі в унікальність кожної дитини. Ми створюємо стимулююче середовище, де кожен має можливість розвинути свої таланти та здібності. Наші методи надихають та сприяють повноцінному розвитку кожної дитини.'
  ));

  $wp_customize->add_control('home-page-gallery-subtitle', array(
    'label' => 'Підзаголовок',
    'section' => 'home-page-gallery-section',
    'type' => 'textarea'
  ));

  // HOME-PAGE-GALLERY-ICON //

  $wp_customize->add_setting('home-page-gallery-icon', array(
    'default' => 'ph-lightbulb-filament'
  ));

  $wp_customize->add_control('home-page-gallery-icon', array(
    'label' => 'Іконка',
    'description' => 'Виберіть іконку у заголовку',
    'section' => 'home-page-gallery-section',
    'type' => 'select',
    'choices' => prefixed_icons()
  ));

  // HOME-PAGE-GALLERY-ICON-COLOR //

  $wp_customize->add_setting('home-page-gallery-icon-color', array(
    'default' => 'duotone-icon-green'
  ));

  $wp_customize->add_control('home-page-gallery-icon-color', array(
    'label' => 'Колір іконки',
    'description' => 'Виберіть колір іконки у заголовку',
    'section' => 'home-page-gallery-section',
    'type' => 'select',
    'choices' => prefixed_colors('duotone-icon')
  ));

  // HOME-PAGE-GALLERY-PLAYER-COLOR //

  $wp_customize->add_setting('home-page-gallery-player-color', array(
    'default' => 'duotone-icon-blue'
  ));

  $wp_customize->add_control('home-page-gallery-player-color', array(
    'label' => 'Колір кнопки програвача',
    'description' => 'Виберіть колір кнопки плеєра відео',
    'section' => 'home-page-gallery-section',
    'type' => 'select',
    'choices' => prefixed_colors('duotone-icon')
  ));

  // HOME-PAGE-GALLERY-FIRST-BUTTON-TEXT //

  $wp_customize->add_setting('home-page-gallery-first-button-text', array(
    'default' => 'Наша галерея'
  ));

  $wp_customize->add_control('home-page-gallery-first-button-text', array(
    'label' => 'Текст першої кнопки',
    'description' => 'Текст, який відображається на кнопці зліва',
    'section' => 'home-page-gallery-section'
  ));

  // HOME-PAGE-GALLERY-FIRST-BUTTON-URL //

  $wp_customize->add_setting('home-page-gallery-first-button-url', array(
    'default' => '/gallery'
  ));

  $wp_customize->add_control('home-page-gallery-first-button-url', array(
    'label' => 'Посилання першої кнопки',
    'description' => 'Посилання на кнопці зліва',
    'section' => 'home-page-gallery-section'
  ));

  // HOME-PAGE-GALLERY-FIRST-BUTTON-COLOR //

  $wp_customize->add_setting('home-page-gallery-first-button-color', array(
    'default' => 'btn-blue'
  ));

  $wp_customize->add_control('home-page-gallery-first-button-color', array(
    'label' => 'Колір кнопки',
    'description' => 'Колір кнопки зліва',
    'section' => 'home-page-gallery-section',
    'type' => 'select',
    'choices' => prefixed_colors('btn')
  ));

  // HOME-PAGE-GALLERY-FIRST-BUTTON-ICON //

  $wp_customize->add_setting('home-page-gallery-first-button-icon', array(
    'default' => 'ph-panorama'
  ));

  $wp_customize->add_control('home-page-gallery-first-button-icon', array(
    'label' => 'Іконка кнопки',
    'description' => 'Іконка кнопки зліва',
    'section' => 'home-page-gallery-section',
    'type' => 'select',
    'choices' => prefixed_icons()
  ));

  // HOME-PAGE-GALLERY-SECOND-BUTTON-ENABLED //

  $wp_customize->add_setting('home-page-gallery-second-button-enabled', array(
    'default' => ''
  ));

  $wp_customize->add_control('home-page-gallery-second-button-enabled', array(
    'label' => 'Відображати другу кнопку',
    'section' => 'home-page-gallery-section',
    'type' => 'checkbox'
  ));

  // HOME-PAGE-GALLERY-SECOND-BUTTON-TEXT //

  $wp_customize->add_setting('home-page-gallery-second-button-text', array(
    'default' => 'Зв\'язатись з нами'
  ));

  $wp_customize->add_control('home-page-gallery-second-button-text', array(
    'label' => 'Текст другої кнопки',
    'description' => 'Текст, який відображається на кнопці праворуч',
    'section' => 'home-page-gallery-section'
  ));

  // HOME-PAGE-GALLERY-SECOND-BUTTON-URL //

  $wp_customize->add_setting('home-page-gallery-second-button-url', array(
    'default' => '/#feedback'
  ));

  $wp_customize->add_control('home-page-gallery-second-button-url', array(
    'label' => 'Посилання другої кнопки',
    'description' => 'Посилання на кнопці праворуч',
    'section' => 'home-page-gallery-section'
  ));

  // HOME-PAGE-GALLERY-SECOND-BUTTON-COLOR //

  $wp_customize->add_setting('home-page-gallery-second-button-color', array(
    'default' => 'btn-outline-blue'
  ));

  $wp_customize->add_control('home-page-gallery-second-button-color', array(
    'label' => 'Колір кнопки',
    'description' => 'Колір кнопки праворуч',
    'section' => 'home-page-gallery-section',
    'type' => 'select',
    'choices' => prefixed_colors('btn-outline')
  ));

  // HOME-PAGE-GALLERY-SECOND-BUTTON-ICON //

  $wp_customize->add_setting('home-page-gallery-second-button-icon', array(
    'default' => ''
  ));

  $wp_customize->add_control('home-page-gallery-second-button-icon', array(
    'label' => 'Іконка кнопки',
    'description' => 'Іконка кнопки праворуч',
    'section' => 'home-page-gallery-section',
    'type' => 'select',
    'choices' => prefixed_icons()
  ));
});

?>