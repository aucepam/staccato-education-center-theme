<?php

add_action('customize_register', function ($wp_customize) {
  $wp_customize->add_section('home-page-about-section', array(
    'title' => 'Про нас',
    'panel' => 'home-page-panel',
    'priority' => '2'
  ));

  // HOME-PAGE-ABOUT-FIRST-CARD-TITLE //

  $wp_customize->add_setting('home-page-about-first-card-title', array(
    'default' => 'Кожен з дітей знаходить своє покликання та розвиває таланти у нашій школі'
  ));

  $wp_customize->add_control('home-page-about-first-card-title', array(
    'label' => 'Заголовок першої картки',
    'section' => 'home-page-about-section',
    'type' => 'textarea'
  ));

  // HOME-PAGE-ABOUT-FIRST-CARD-SUBTITLE //

  $wp_customize->add_setting('home-page-about-first-card-subtitle', array(
    'default' => 'Ми навчаємо дітей виразно висловлювати свої думки, малювати мрії, творити музику та вивчати англійську мову'
  ));

  $wp_customize->add_control('home-page-about-first-card-subtitle', array(
    'label' => 'Підзаголовок першої картки',
    'section' => 'home-page-about-section',
    'type' => 'textarea'
  ));

  // HOME-PAGE-ABOUT-FIRST-CARD-TAGS //

  $wp_customize->add_setting('home-page-about-first-card-tags', array(
    'default' => 'Англійська з носієм; Логопед; Preschool; Малювання; Фортепіано; Гітара; Акторська майстерність'
  ));

  $wp_customize->add_control('home-page-about-first-card-tags', array(
    'label' => 'Хештеги на першій картці',
    'description' => 'Використовуйте крапку з комою (;) для розділення на частини',
    'section' => 'home-page-about-section',
    'type' => 'textarea'
  ));

  // HOME-PAGE-ABOUT-FIRST-CARD-ICON //

  $wp_customize->add_setting('home-page-about-first-card-icon', array(
    'default' => 'ph-shooting-star'
  ));

  $wp_customize->add_control('home-page-about-first-card-icon', array(
    'label' => 'Іконка на першій картці',
    'section' => 'home-page-about-section',
    'type' => 'select',
    'choices' => prefixed_icons()
  ));

  // HOME-PAGE-ABOUT-FIRST-CARD-COLOR //

  $wp_customize->add_setting('home-page-about-first-card-color', array(
    'default' => 'card-sky'
  ));

  $wp_customize->add_control('home-page-about-first-card-color', array(
    'label' => 'Колір першої картки',
    'section' => 'home-page-about-section',
    'type' => 'select',
    'choices' => prefixed_colors('card')
  ));

  // HOME-PAGE-ABOUT-FIRST-CARD-IMAGE //

  $wp_customize->add_setting('home-page-about-first-card-image');

  $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'home-page-about-first-card-image', array(
    'label' => 'Зображення №1',
    'description' => 'Зображення біля першої картки',
    'width' => 520,
    'height' => 380,
    'flex_width' => true,
    'flex_height' => true,
    'section' => 'home-page-about-section'
  )));

  // HOME-PAGE-ABOUT-SECOND-CARD-TITLE //

  $wp_customize->add_setting('home-page-about-second-card-title', array(
    'default' => 'Ми маємо видатних вчителів, готових подарувати вашій дитині найкраще навчання та підтримку'
  ));

  $wp_customize->add_control('home-page-about-second-card-title', array(
    'label' => 'Заголовок другої картки',
    'section' => 'home-page-about-section',
    'type' => 'textarea'
  ));

  // HOME-PAGE-ABOUT-SECOND-CARD-SUBTITLE //

  $wp_customize->add_setting('home-page-about-second-card-subtitle', array(
    'default' => ''
  ));

  $wp_customize->add_control('home-page-about-second-card-subtitle', array(
    'label' => 'Підзаголовок другої картки',
    'section' => 'home-page-about-section',
    'type' => 'textarea'
  ));

  // HOME-PAGE-ABOUT-SECOND-CARD-ICON //

  $wp_customize->add_setting('home-page-about-second-card-icon', array(
    'default' => 'ph-graduation-cap'
  ));

  $wp_customize->add_control('home-page-about-second-card-icon', array(
    'label' => 'Іконка на другій картці',
    'section' => 'home-page-about-section',
    'type' => 'select',
    'choices' => prefixed_icons()
  ));

  // HOME-PAGE-ABOUT-SECOND-CARD-COLOR //

  $wp_customize->add_setting('home-page-about-second-card-color', array(
    'default' => 'card-yellow'
  ));

  $wp_customize->add_control('home-page-about-second-card-color', array(
    'label' => 'Колір другої картки',
    'section' => 'home-page-about-section',
    'type' => 'select',
    'choices' => prefixed_colors('card')
  ));

  // HOME-PAGE-ABOUT-SECOND-CARD-IMAGE //

  $wp_customize->add_setting('home-page-about-second-card-image');

  $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'home-page-about-second-card-image', array(
    'label' => 'Зображення №2',
    'description' => 'Зображення біля другої картки',
    'width' => 520,
    'height' => 380,
    'flex_width' => true,
    'flex_height' => true,
    'section' => 'home-page-about-section'
  )));
});

?>