<?php

add_action('customize_register', function ($wp_customize) {
  $wp_customize->add_section('home-page-pricing-section', array(
    'title' => 'Прейскурант',
    'panel' => 'home-page-panel',
    'priority' => '6'
  ));

  // HOME-PAGE-PRICING-TITLE //

  $wp_customize->add_setting('home-page-pricing-title', array(
    'default' => 'Рекомендовані напрямки навчання'
  ));

  $wp_customize->add_control('home-page-pricing-title', array(
    'label' => 'Заголовок',
    'description' => 'Щоб використати перенесення рядка, введіть #. Щоб обвести слово, вставте слово між ( та )',
    'section' => 'home-page-pricing-section',
    'type' => 'textarea'
  ));

  // HOME-PAGE-PRICING-SUBTITLE //

  $wp_customize->add_setting('home-page-pricing-subtitle', array(
    'default' => 'У цьому розділі ми представляємо найрекомендованіші послуги, які допоможуть вашій дитині розвинутися і навчитися новому. Для докладнішої інформації та повного переліку послуг, будь ласка, перейдіть на сторінку «Прейскурант»'
  ));

  $wp_customize->add_control('home-page-pricing-subtitle', array(
    'label' => 'Підзаголовок',
    'description' => 'Щоб використати перенесення рядка, введіть #',
    'section' => 'home-page-pricing-section',
    'type' => 'textarea'
  ));

  // HOME-PAGE-PRICING-ICON //

  $wp_customize->add_setting('home-page-pricing-icon', array(
    'default' => 'ph-book-bookmark'
  ));

  $wp_customize->add_control('home-page-pricing-icon', array(
    'label' => 'Іконка',
    'description' => 'Виберіть іконку у заголовку',
    'section' => 'home-page-pricing-section',
    'type' => 'select',
    'choices' => prefixed_icons()
  ));

  // HOME-PAGE-PRICING-ICON-COLOR //

  $wp_customize->add_setting('home-page-pricing-icon-color', array(
    'default' => 'duotone-icon-violet'
  ));

  $wp_customize->add_control('home-page-pricing-icon-color', array(
    'label' => 'Колір іконки',
    'description' => 'Виберіть колір іконки у заголовку',
    'section' => 'home-page-pricing-section',
    'type' => 'select',
    'choices' => prefixed_colors('duotone-icon')
  ));

  // HOME-PAGE-PRICING-FIRST-BUTTON-TEXT //

  $wp_customize->add_setting('home-page-pricing-first-button-text', array(
    'default' => 'Повний прейскурант'
  ));

  $wp_customize->add_control('home-page-pricing-first-button-text', array(
    'label' => 'Текст першої кнопки',
    'description' => 'Текст, який відображається на кнопці зліва',
    'section' => 'home-page-pricing-section'
  ));

  // HOME-PAGE-PRICING-FIRST-BUTTON-URL //

  $wp_customize->add_setting('home-page-pricing-first-button-url', array(
    'default' => '/pricing'
  ));

  $wp_customize->add_control('home-page-pricing-first-button-url', array(
    'label' => 'Посилання першої кнопки',
    'description' => 'Посилання на кнопці зліва',
    'section' => 'home-page-pricing-section'
  ));

  // HOME-PAGE-PRICING-FIRST-BUTTON-COLOR //

  $wp_customize->add_setting('home-page-pricing-first-button-color', array(
    'default' => 'btn-violet'
  ));

  $wp_customize->add_control('home-page-pricing-first-button-color', array(
    'label' => 'Колір кнопки',
    'description' => 'Колір кнопки зліва',
    'section' => 'home-page-pricing-section',
    'type' => 'select',
    'choices' => prefixed_colors('btn')
  ));

  // HOME-PAGE-PRICING-FIRST-BUTTON-ICON //

  $wp_customize->add_setting('home-page-pricing-first-button-icon', array(
    'default' => 'ph-bookmarks'
  ));

  $wp_customize->add_control('home-page-pricing-first-button-icon', array(
    'label' => 'Іконка кнопки',
    'description' => 'Іконка кнопки зліва',
    'section' => 'home-page-pricing-section',
    'type' => 'select',
    'choices' => prefixed_icons()
  ));

  // HOME-PAGE-PRICING-SECOND-BUTTON-ENABLED //

  $wp_customize->add_setting('home-page-pricing-second-button-enabled', array(
    'default' => ''
  ));

  $wp_customize->add_control('home-page-pricing-second-button-enabled', array(
    'label' => 'Відображати другу кнопку',
    'section' => 'home-page-pricing-section',
    'type' => 'checkbox'
  ));

  // HOME-PAGE-PRICING-SECOND-BUTTON-TEXT //

  $wp_customize->add_setting('home-page-pricing-second-button-text', array(
    'default' => 'Зв\'язатись з нами'
  ));

  $wp_customize->add_control('home-page-pricing-second-button-text', array(
    'label' => 'Текст другої кнопки',
    'description' => 'Текст, який відображається на кнопці праворуч',
    'section' => 'home-page-pricing-section'
  ));

  // HOME-PAGE-PRICING-SECOND-BUTTON-URL //

  $wp_customize->add_setting('home-page-pricing-second-button-url', array(
    'default' => '/#feedback'
  ));

  $wp_customize->add_control('home-page-pricing-second-button-url', array(
    'label' => 'Посилання другої кнопки',
    'description' => 'Посилання на кнопці праворуч',
    'section' => 'home-page-pricing-section'
  ));

  // HOME-PAGE-PRICING-SECOND-BUTTON-COLOR //

  $wp_customize->add_setting('home-page-pricing-second-button-color', array(
    'default' => 'btn-outline-blue'
  ));

  $wp_customize->add_control('home-page-pricing-second-button-color', array(
    'label' => 'Колір кнопки',
    'description' => 'Колір кнопки праворуч',
    'section' => 'home-page-pricing-section',
    'type' => 'select',
    'choices' => prefixed_colors('btn-outline')
  ));

  // HOME-PAGE-PRICING-SECOND-BUTTON-ICON //

  $wp_customize->add_setting('home-page-pricing-second-button-icon', array(
    'default' => ''
  ));

  $wp_customize->add_control('home-page-pricing-second-button-icon', array(
    'label' => 'Іконка кнопки',
    'description' => 'Іконка кнопки праворуч',
    'section' => 'home-page-pricing-section',
    'type' => 'select',
    'choices' => prefixed_icons()
  ));
});

?>