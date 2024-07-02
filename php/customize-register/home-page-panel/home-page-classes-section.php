<?php

add_action('customize_register', function ($wp_customize) {
  $wp_customize->add_section('home-page-classes-section', array(
    'title' => 'Дисципліни',
    'panel' => 'home-page-panel',
    'priority' => '4'
  ));

  // HOME-PAGE-CLASSES-TITLE //

  $wp_customize->add_setting('home-page-classes-title', array(
    'default' => 'Розкриваємо * таланти'
  ));

  $wp_customize->add_control('home-page-classes-title', array(
    'label' => 'Заголовок',
    'description' => 'Щоб використати перенесення рядка, введіть #. Щоб вставити іконку, введіть *. Щоб обвести слово, вставте слово між ( та )',
    'section' => 'home-page-classes-section',
    'type' => 'textarea'
  ));

  // HOME-PAGE-CLASSES-SUBTITLE //

  $wp_customize->add_setting('home-page-classes-subtitle', array(
    'default' => 'Навчання, творчість, (розвиток) в нашій школі'
  ));

  $wp_customize->add_control('home-page-classes-subtitle', array(
    'label' => 'Підзаголовок',
    'description' => 'Щоб використати перенесення рядка, введіть #. Щоб підкреслити слово, вставте слово між ( та )',
    'section' => 'home-page-classes-section',
    'type' => 'textarea'
  ));

  // HOME-PAGE-CLASSES-ICON //

  $wp_customize->add_setting('home-page-classes-icon', array(
    'default' => 'ph-star'
  ));

  $wp_customize->add_control('home-page-classes-icon', array(
    'label' => 'Іконка',
    'description' => 'Виберіть іконку у заголовку',
    'section' => 'home-page-classes-section',
    'type' => 'select',
    'choices' => prefixed_icons()
  ));

  // HOME-PAGE-CLASSES-ICON-COLOR //

  $wp_customize->add_setting('home-page-classes-icon-color', array(
    'default' => 'duotone-icon-blue'
  ));

  $wp_customize->add_control('home-page-classes-icon-color', array(
    'label' => 'Колір іконки',
    'description' => 'Виберіть колір іконки у заголовку',
    'section' => 'home-page-classes-section',
    'type' => 'select',
    'choices' => prefixed_colors('duotone-icon')
  ));

  // HOME-PAGE-CLASSES-CARD-COLOR //

  $wp_customize->add_setting('home-page-classes-card-color', array(
    'default' => 'card-blue'
  ));

  $wp_customize->add_control('home-page-classes-card-color', array(
    'label' => 'Колір картки',
    'description' => 'Виберіть колір картки з дисциплінами',
    'section' => 'home-page-classes-section',
    'type' => 'select',
    'choices' => prefixed_colors('card')
  ));

  // HOME-PAGE-CLASSES-FIRST-BUTTON-TEXT //

  $wp_customize->add_setting('home-page-classes-first-button-text', array(
    'default' => 'Зв\'язатись з нами'
  ));

  $wp_customize->add_control('home-page-classes-first-button-text', array(
    'label' => 'Текст першої кнопки',
    'description' => 'Текст, який відображається на кнопці зліва',
    'section' => 'home-page-classes-section'
  ));

  // HOME-PAGE-CLASSES-FIRST-BUTTON-URL //

  $wp_customize->add_setting('home-page-classes-first-button-url', array(
    'default' => '/#feedback'
  ));

  $wp_customize->add_control('home-page-classes-first-button-url', array(
    'label' => 'Посилання першої кнопки',
    'description' => 'Посилання на кнопці зліва',
    'section' => 'home-page-classes-section'
  ));

  // HOME-PAGE-CLASSES-FIRST-BUTTON-COLOR //

  $wp_customize->add_setting('home-page-classes-first-button-color', array(
    'default' => 'btn-blue'
  ));

  $wp_customize->add_control('home-page-classes-first-button-color', array(
    'label' => 'Колір кнопки',
    'description' => 'Колір кнопки зліва',
    'section' => 'home-page-classes-section',
    'type' => 'select',
    'choices' => prefixed_colors('btn')
  ));

  // HOME-PAGE-CLASSES-FIRST-BUTTON-ICON //

  $wp_customize->add_setting('home-page-classes-first-button-icon', array(
    'default' => ''
  ));

  $wp_customize->add_control('home-page-classes-first-button-icon', array(
    'label' => 'Іконка кнопки',
    'description' => 'Іконка кнопки зліва',
    'section' => 'home-page-classes-section',
    'type' => 'select',
    'choices' => prefixed_icons()
  ));

  // HOME-PAGE-CLASSES-SECOND-BUTTON-ENABLED //

  $wp_customize->add_setting('home-page-classes-second-button-enabled', array(
    'default' => '1'
  ));

  $wp_customize->add_control('home-page-classes-second-button-enabled', array(
    'label' => 'Відображати другу кнопку',
    'section' => 'home-page-classes-section',
    'type' => 'checkbox'
  ));

  // HOME-PAGE-CLASSES-SECOND-BUTTON-TEXT //

  $wp_customize->add_setting('home-page-classes-second-button-text', array(
    'default' => 'Дивитись прейскурант'
  ));

  $wp_customize->add_control('home-page-classes-second-button-text', array(
    'label' => 'Текст другої кнопки',
    'description' => 'Текст, який відображається на кнопці праворуч',
    'section' => 'home-page-classes-section'
  ));

  // HOME-PAGE-CLASSES-SECOND-BUTTON-URL //

  $wp_customize->add_setting('home-page-classes-second-button-url', array(
    'default' => '/pricing'
  ));

  $wp_customize->add_control('home-page-classes-second-button-url', array(
    'label' => 'Посилання другої кнопки',
    'description' => 'Посилання на кнопці праворуч',
    'section' => 'home-page-classes-section'
  ));

  // HOME-PAGE-CLASSES-SECOND-BUTTON-COLOR //

  $wp_customize->add_setting('home-page-classes-second-button-color', array(
    'default' => 'btn-outline-blue'
  ));

  $wp_customize->add_control('home-page-classes-second-button-color', array(
    'label' => 'Колір кнопки',
    'description' => 'Колір кнопки праворуч',
    'section' => 'home-page-classes-section',
    'type' => 'select',
    'choices' => prefixed_colors('btn-outline')
  ));

  // HOME-PAGE-CLASSES-SECOND-BUTTON-ICON //

  $wp_customize->add_setting('home-page-classes-second-button-icon', array(
    'default' => ''
  ));

  $wp_customize->add_control('home-page-classes-second-button-icon', array(
    'label' => 'Іконка кнопки',
    'description' => 'Іконка кнопки праворуч',
    'section' => 'home-page-classes-section',
    'type' => 'select',
    'choices' => prefixed_icons()
  ));
});

?>