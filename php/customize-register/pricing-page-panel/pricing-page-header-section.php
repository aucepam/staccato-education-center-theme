<?php

add_action('customize_register', function ($wp_customize) {
  $wp_customize->add_section('pricing-page-header-section', array(
    'title' => 'Головний екран',
    'panel' => 'pricing-page-panel',
    'priority' => '1'
  ));

  // PRICING-PAGE-HEADER-TITLE //

  $wp_customize->add_setting('pricing-page-header-title', array(
    'default' => 'Ціновий атлас вартості # навчання в нашій дитячій школі'
  ));

  $wp_customize->add_control('pricing-page-header-title', array(
    'label' => 'Заголовок',
    'description' => 'Щоб використати перенесення рядка, введіть #',
    'section' => 'pricing-page-header-section',
    'type' => 'textarea'
  ));

  // PRICING-PAGE-HEADER-SUBTITLE //

  $wp_customize->add_setting('pricing-page-header-subtitle', array(
    'default' => 'Ознайомтесь з офіційним прейскурантом навчання в нашій школі. # Інвестиція у знання - цінний подарунок вашій дитині!'
  ));

  $wp_customize->add_control('pricing-page-header-subtitle', array(
    'label' => 'Підзаголовок',
    'description' => 'Щоб використати перенесення рядка, введіть #',
    'section' => 'pricing-page-header-section',
    'type' => 'textarea'
  ));

  // PRICING-PAGE-HEADER-LABEL-TEXT //

  $wp_customize->add_setting('pricing-page-header-label-text', array(
    'default' => 'Прейскурант'
  ));

  $wp_customize->add_control('pricing-page-header-label-text', array(
    'label' => 'Текст етикетки',
    'description' => 'Етикетка, що відображається над заголовком',
    'section' => 'pricing-page-header-section'
  ));

  // PRICING-PAGE-HEADER-LABEL-ICON //

  $wp_customize->add_setting('pricing-page-header-label-icon', array(
    'default' => 'ph-lightning'
  ));

  $wp_customize->add_control('pricing-page-header-label-icon', array(
    'label' => 'Іконка етикетки',
    'section' => 'pricing-page-header-section',
    'type' => 'select',
    'choices' => prefixed_icons()
  ));

  // PRICING-PAGE-HEADER-LABEL-COLOR //

  $wp_customize->add_setting('pricing-page-header-label-color', array(
    'default' => 'duotone-icon-blue'
  ));

  $wp_customize->add_control('pricing-page-header-label-color', array(
    'label' => 'Колір етикетки',
    'section' => 'pricing-page-header-section',
    'type' => 'select',
    'choices' => prefixed_colors('duotone-icon')
  ));
});

?>