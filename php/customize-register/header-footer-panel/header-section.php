<?php

add_action('customize_register', function ($wp_customize) {
  $wp_customize->add_section('header-section', array(
    'title' => 'Шапка сайту',
    'description' => 'Налаштування навігаційної панелі, що знаходиться вгорі на всіх сторінках',
    'panel' => 'header-footer-panel',
    'priority' => '1'
  ));

  // NAVBAR-BUTTON-TITLE //

  $wp_customize->add_setting('navbar-button-title', array(
    'default' => 'Зв\'язатись з нами'
  ));

  $wp_customize->add_control('navbar-button-title', array(
    'label' => 'Кнопка зворотного зв\'язку',
    'description' => 'Текст, який відображається на кнопці на навігаційній панелі праворуч',
    'section' => 'header-section',
  ));

  // NAVBAR-BUTTON-URL //

  $wp_customize->add_setting('navbar-button-url', array(
    'default' => '/#feedback'
  ));

  $wp_customize->add_control('navbar-button-url', array(
    'label' => 'Посилання',
    'description' => 'Посилання для кнопки на навігаційній панелі',
    'section' => 'header-section',
  ));

  // NAVBAR-BUTTON-COLOR //

  $wp_customize->add_setting('navbar-button-color', array(
    'default' => 'btn-blue'
  ));

  $wp_customize->add_control('navbar-button-color', array(
    'label' => 'Колір кнопки',
    'description' => 'Колір кнопки на навігаційній панелі праворуч',
    'section' => 'header-section',
    'type' => 'select',
    'choices' => prefixed_colors('btn')
  ));

  // NAVBAR-BUTTON-ICON //

  $wp_customize->add_setting('navbar-button-icon', array(
    'default' => ''
  ));

  $wp_customize->add_control('navbar-button-icon', array(
    'label' => 'Іконка кнопки',
    'description' => 'Іконка кнопки на навігаційній панелі праворуч',
    'section' => 'header-section',
    'type' => 'select',
    'choices' => prefixed_icons()
  ));
});

?>