<?php

add_action('customize_register', function ($wp_customize) {
  $wp_customize->add_section('home-page-feedback-section', array(
    'title' => 'Форма зворотного зв\'язку',
    'panel' => 'home-page-panel',
    'priority' => '7'
  ));

  // HOME-PAGE-FEEDBACK-TITLE //
  
  $wp_customize->add_setting('home-page-feedback-title', array(
    'default' => 'Зв\'язок * з нами'
  ));

  $wp_customize->add_control('home-page-feedback-title', array(
    'label' => 'Заголовок',
    'description' => 'Щоб використати перенесення рядка, введіть #. Щоб вставити іконку, введіть *. Щоб обвести слово, вставте слово між ( та )',
    'section' => 'home-page-feedback-section',
    'type' => 'textarea'
  ));

  // HOME-PAGE-FEEDBACK-SUBTITLE //

  $wp_customize->add_setting('home-page-feedback-subtitle', array(
    'default' => 'Залишіть нам повідомлення та ми обов\'язково зв\'яжемось з вами за першої можливості'
  ));

  $wp_customize->add_control('home-page-feedback-subtitle', array(
    'label' => 'Підзаголовок',
    'description' => 'Щоб використати перенесення рядка, введіть #',
    'section' => 'home-page-feedback-section',
    'type' => 'textarea'
  ));

  // HOME-PAGE-FEEDBACK-ICON //

  $wp_customize->add_setting('home-page-feedback-icon', array(
    'default' => 'ph-chats-circle'
  ));

  $wp_customize->add_control('home-page-feedback-icon', array(
    'label' => 'Іконка',
    'description' => 'Виберіть іконку у заголовку',
    'section' => 'home-page-feedback-section',
    'type' => 'select',
    'choices' => prefixed_icons()
  ));

  // HOME-PAGE-FEEDBACK-ICON-COLOR //

  $wp_customize->add_setting('home-page-feedback-icon-color', array(
    'default' => 'duotone-icon-green'
  ));

  $wp_customize->add_control('home-page-feedback-icon-color', array(
    'label' => 'Колір іконки',
    'description' => 'Виберіть колір іконки у заголовку',
    'section' => 'home-page-feedback-section',
    'type' => 'select',
    'choices' => prefixed_colors('duotone-icon')
  ));

  // HOME-PAGE-FEEDBACK-CARD-COLOR //

  $wp_customize->add_setting('home-page-feedback-card-color', array(
    'default' => 'card-blue'
  ));

  $wp_customize->add_control('home-page-feedback-card-color', array(
    'label' => 'Колір форми зворотного зв\'язку',
    'section' => 'home-page-feedback-section',
    'type' => 'select',
    'choices' => prefixed_colors('card')
  ));
});

?>