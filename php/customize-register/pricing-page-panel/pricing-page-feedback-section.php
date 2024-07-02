<?php

add_action('customize_register', function ($wp_customize) {
  $wp_customize->add_section('pricing-page-feedback-section', array(
    'title' => 'Форма зворотного зв\'язку',
    'panel' => 'pricing-page-panel',
    'priority' => '3'
  ));

  // PRICING-PAGE-FEEDBACK-TITLE //

  $wp_customize->add_setting('pricing-page-feedback-title', array(
    'default' => 'Записатись до нас'
  ));

  $wp_customize->add_control('pricing-page-feedback-title', array(
    'label' => 'Заголовок',
    'description' => 'Щоб використати перенесення рядка, введіть #. Щоб вставити іконку, введіть *. Щоб обвести слово, вставте слово між ( та )',
    'section' => 'pricing-page-feedback-section',
    'type' => 'textarea'
  ));

  // PRICING-PAGE-FEEDBACK-SUBTITLE //

  $wp_customize->add_setting('pricing-page-feedback-subtitle', array(
    'default' => 'Залишіть нам повідомлення та ми обов\'язково зв\'яжемось з вами за першої можливості'
  ));

  $wp_customize->add_control('pricing-page-feedback-subtitle', array(
    'label' => 'Підзаголовок',
    'description' => 'Щоб використати перенесення рядка, введіть #',
    'section' => 'pricing-page-feedback-section',
    'type' => 'textarea'
  ));

  // PRICING-PAGE-FEEDBACK-ICON //

  $wp_customize->add_setting('pricing-page-feedback-icon', array(
    'default' => 'ph-chats'
  ));

  $wp_customize->add_control('pricing-page-feedback-icon', array(
    'label' => 'Іконка',
    'description' => 'Виберіть іконку у заголовку',
    'section' => 'pricing-page-feedback-section',
    'type' => 'select',
    'choices' => prefixed_icons()
  ));

  // PRICING-PAGE-FEEDBACK-ICON-COLOR //

  $wp_customize->add_setting('pricing-page-feedback-icon-color', array(
    'default' => 'duotone-icon-green'
  ));

  $wp_customize->add_control('pricing-page-feedback-icon-color', array(
    'label' => 'Колір іконки',
    'description' => 'Виберіть колір іконки у заголовку',
    'section' => 'pricing-page-feedback-section',
    'type' => 'select',
    'choices' => prefixed_colors('duotone-icon')
  ));

  // PRICING-PAGE-FEEDBACK-CARD-COLOR //

  $wp_customize->add_setting('pricing-page-feedback-card-color', array(
    'default' => 'card-blue'
  ));

  $wp_customize->add_control('pricing-page-feedback-card-color', array(
    'label' => 'Колір форми зворотного зв\'язку',
    'section' => 'pricing-page-feedback-section',
    'type' => 'select',
    'choices' => prefixed_colors('card')
  ));
});

?>