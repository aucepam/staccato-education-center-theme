<?php

add_action('customize_register', function ($wp_customize) {
  $wp_customize->add_section('pricing-page-classes-section', array(
    'title' => 'Прейскурант',
    'panel' => 'pricing-page-panel',
    'priority' => '2'
  ));

  // PRICING-PAGE-CLASSES-TABS-COLOR //

  $wp_customize->add_setting('pricing-page-classes-tabs-color', array(
    'default' => 'tabs-blue'
  ));

  $wp_customize->add_control('pricing-page-classes-tabs-color', array(
    'label' => 'Колір вкладок',
    'description' => 'Виберіть колір вкладок',
    'section' => 'pricing-page-classes-section',
    'type' => 'select',
    'choices' => prefixed_colors('tabs')
  ));

  // PRICING-PAGE-CLASSES-CARDS-COLOR //

  $wp_customize->add_setting('pricing-page-classes-cards-color', array(
    'default' => 'card-blue'
  ));

  $wp_customize->add_control('pricing-page-classes-cards-color', array(
    'label' => 'Колір карток',
    'description' => 'Виберіть колір карток',
    'section' => 'pricing-page-classes-section',
    'type' => 'select',
    'choices' => prefixed_colors('card')
  ));
});

?>