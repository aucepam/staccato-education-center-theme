<?php

add_action('customize_register', function ($wp_customize) {
  $wp_customize->add_section('home-page-header-section', array(
    'title' => 'Головний екран',
    'panel' => 'home-page-panel',
    'priority' => '1'
  ));

  // HOME-PAGE-HEADER-TITLE //

  $wp_customize->add_setting('home-page-header-title', array(
    'default' => 'Розкрийте (потенціал) # вашої * дитини'
  ));

  $wp_customize->add_control('home-page-header-title', array(
    'label' => 'Заголовок',
    'description' => 'Щоб використати перенесення рядка, введіть #. Щоб вставити іконку, введіть *. Щоб обвести слово, вставте слово між ( та )',
    'section' => 'home-page-header-section',
    'type' => 'textarea'
  ));

  // HOME-PAGE-HEADER-SUBTITLE //

  $wp_customize->add_setting('home-page-header-subtitle', array(
    'default' => 'Ми віримо, що кожна дитина має унікальні таланти # та здібності, які чекають на відкриття'
  ));

  $wp_customize->add_control('home-page-header-subtitle', array(
    'label' => 'Підзаголовок',
    'description' => 'Щоб використати перенесення рядка, введіть #',
    'section' => 'home-page-header-section',
    'type' => 'textarea'
  ));

  // HOME-PAGE-HEADER-ICON //

  $wp_customize->add_setting('home-page-header-icon', array(
    'default' => 'ph-heart'
  ));

  $wp_customize->add_control('home-page-header-icon', array(
    'label' => 'Іконка',
    'description' => 'Виберіть іконку у заголовку',
    'section' => 'home-page-header-section',
    'type' => 'select',
    'choices' => prefixed_icons()
  ));

  // HOME-PAGE-HEADER-ICON-COLOR //

  $wp_customize->add_setting('home-page-header-icon-color', array(
    'default' => 'icon-rose'
  ));

  $wp_customize->add_control('home-page-header-icon-color', array(
    'label' => 'Колір іконки',
    'description' => 'Виберіть колір іконки у заголовку',
    'section' => 'home-page-header-section',
    'type' => 'select',
    'choices' => prefixed_colors('icon')
  ));

  // HOME-PAGE-HEADER-FIRST-BUTTON-TEXT //

  $wp_customize->add_setting('home-page-header-first-button-text', array(
    'default' => 'Зв\'язатись з нами'
  ));

  $wp_customize->add_control('home-page-header-first-button-text', array(
    'label' => 'Текст першої кнопки',
    'description' => 'Текст, який відображається на кнопці зліва',
    'section' => 'home-page-header-section',
  ));

  // HOME-PAGE-HEADER-FIRST-BUTTON-URL //
  
  $wp_customize->add_setting('home-page-header-first-button-url', array(
    'default' => '/#feedback'
  ));

  $wp_customize->add_control('home-page-header-first-button-url', array(
    'label' => 'Посилання першої кнопки',
    'description' => 'Посилання на кнопці зліва',
    'section' => 'home-page-header-section',
  ));

  // HOME-PAGE-HEADER-FIRST-BUTTON-COLOR //

  $wp_customize->add_setting('home-page-header-first-button-color', array(
    'default' => 'btn-blue'
  ));

  $wp_customize->add_control('home-page-header-first-button-color', array(
    'label' => 'Колір кнопки',
    'description' => 'Колір кнопки зліва',
    'section' => 'home-page-header-section',
    'type' => 'select',
    'choices' => prefixed_colors('btn')
  ));

  // HOME-PAGE-HEADER-FIRST-BUTTON-ICON //
  
  $wp_customize->add_setting('home-page-header-first-button-icon', array(
    'default' => ''
  ));

  $wp_customize->add_control('home-page-header-first-button-icon', array(
    'label' => 'Іконка кнопки',
    'description' => 'Іконка кнопки зліва',
    'section' => 'home-page-header-section',
    'type' => 'select',
    'choices' => prefixed_icons()
  ));

  // HOME-PAGE-HEADER-SECOND-BUTTON-ENABLED //
  
  $wp_customize->add_setting('home-page-header-second-button-enabled', array(
    'default' => '1'
  ));

  $wp_customize->add_control('home-page-header-second-button-enabled', array(
    'label' => 'Відображати другу кнопку',
    'section' => 'home-page-header-section',
    'type' => 'checkbox'
  ));

  // HOME-PAGE-HEADER-SECOND-BUTTON-TEXT //
  
  $wp_customize->add_setting('home-page-header-second-button-text', array(
    'default' => 'Як ми працюємо'
  ));

  $wp_customize->add_control('home-page-header-second-button-text', array(
    'label' => 'Текст другої кнопки',
    'description' => 'Текст, який відображається на кнопці праворуч',
    'section' => 'home-page-header-section',
  ));

  // HOME-PAGE-HEADER-SECOND-BUTTON-URL //
  
  $wp_customize->add_setting('home-page-header-second-button-url', array(
    'default' => '/#gallery'
  ));

  $wp_customize->add_control('home-page-header-second-button-url', array(
    'label' => 'Посилання другої кнопки',
    'description' => 'Посилання на кнопці праворуч',
    'section' => 'home-page-header-section',
  ));

  // HOME-PAGE-HEADER-SECOND-BUTTON-COLOR //
  
  $wp_customize->add_setting('home-page-header-second-button-color', array(
    'default' => 'btn-outline-yellow'
  ));

  $wp_customize->add_control('home-page-header-second-button-color', array(
    'label' => 'Колір кнопки',
    'description' => 'Колір кнопки праворуч',
    'section' => 'home-page-header-section',
    'type' => 'select',
    'choices' => prefixed_colors('btn-outline')
  ));

  // HOME-PAGE-HEADER-SECOND-BUTTON-ICON //

  $wp_customize->add_setting('home-page-header-second-button-icon', array(
    'default' => 'ph-play-circle'
  ));

  $wp_customize->add_control('home-page-header-second-button-icon', array(
    'label' => 'Іконка кнопки',
    'description' => 'Іконка кнопки праворуч',
    'section' => 'home-page-header-section',
    'type' => 'select',
    'choices' => prefixed_icons()
  ));
});

?>