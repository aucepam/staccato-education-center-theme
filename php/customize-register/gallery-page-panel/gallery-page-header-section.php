<?php

add_action('customize_register', function ($wp_customize) {
  $wp_customize->add_section('gallery-page-header-section', array(
    'title' => 'Головний екран',
    'panel' => 'gallery-page-panel',
    'priority' => '1'
  ));

  // GALLERY-PAGE-HEADER-TITLE //

  $wp_customize->add_setting('gallery-page-header-title', array(
    'default' => 'Галерея творчих досягнень наших учнів'
  ));

  $wp_customize->add_control('gallery-page-header-title', array(
    'label' => 'Заголовок',
    'description' => 'Щоб використати перенесення рядка, введіть #',
    'section' => 'gallery-page-header-section',
    'type' => 'textarea'
  ));

  // GALLERY-PAGE-HEADER-SUBTITLE //

  $wp_customize->add_setting('gallery-page-header-subtitle', array(
    'default' => 'Пориньте у світ яскравих фарб та неповторних ідей, створених талановитими руками наших учнів. # Кожна робота - це крок на шляху до великого мистецтва!'
  ));

  $wp_customize->add_control('gallery-page-header-subtitle', array(
    'label' => 'Підзаголовок',
    'description' => 'Щоб використати перенесення рядка, введіть #',
    'section' => 'gallery-page-header-section',
    'type' => 'textarea'
  ));

  // GALLERY-PAGE-HEADER-LABEL-TEXT //

  $wp_customize->add_setting('gallery-page-header-label-text', array(
    'default' => 'Галерея'
  ));

  $wp_customize->add_control('gallery-page-header-label-text', array(
    'label' => 'Текст етикетки',
    'description' => 'Етикетка, що відображається над заголовком',
    'section' => 'gallery-page-header-section'
  ));

  // GALLERY-PAGE-HEADER-LABEL-ICON //

  $wp_customize->add_setting('gallery-page-header-label-icon', array(
    'default' => 'ph-slideshow'
  ));

  $wp_customize->add_control('gallery-page-header-label-icon', array(
    'label' => 'Іконка етикетки',
    'section' => 'gallery-page-header-section',
    'type' => 'select',
    'choices' => prefixed_icons()
  ));

  // GALLERY-PAGE-HEADER-LABEL-COLOR //

  $wp_customize->add_setting('gallery-page-header-label-color', array(
    'default' => 'duotone-icon-rose'
  ));

  $wp_customize->add_control('gallery-page-header-label-color', array(
    'label' => 'Колір етикетки',
    'section' => 'gallery-page-header-section',
    'type' => 'select',
    'choices' => prefixed_colors('duotone-icon')
  ));
});

?>