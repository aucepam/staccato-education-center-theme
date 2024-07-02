<?php

add_action('customize_register', function ($wp_customize) {
  $wp_customize->add_section('footer-section', array(
    'title' => 'Підвал сайту',
    'description' => 'Налаштування елементів, розміщених у нижній частині сайту на всіх сторінках',
    'panel' => 'header-footer-panel',
    'priority' => '2'
  ));

  // SOCIALS-ICON-COLOR //
  
  $wp_customize->add_setting('footer-social-icon-color', array(
    'default' => 'duotone-icon-blue'
  ));

  $wp_customize->add_control('footer-social-icon-color', array(
    'label' => 'Колір кнопок соц. мереж',
    'description' => 'Колір кнопок соціальних мереж, розміщених у підвалі сайту',
    'section' => 'footer-section',
    'type' => 'select',
    'choices' => prefixed_colors('duotone-icon')
  ));
});

?>