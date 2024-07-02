<?php

add_action('customize_register', function ($wp_customize) {
  $wp_customize->add_section('contacts-direct-section', array(
    'title' => 'Прямі контакти',
    'panel' => 'contacts-panel',
    'priority' => '1'
  ));

  // CONTACTS-DIRECT-EMAIL //

  $wp_customize->add_setting('contacts-direct-email', array(
    'default' => 'staccato@gmail.com'
  ));

  $wp_customize->add_control('contacts-direct-email', array(
    'label' => 'Email',
    'description' => 'Наприклад: staccato@gmail.com',
    'section' => 'contacts-direct-section',
    'type' => 'email'
  ));
  
  // CONTACTS-DIRECT-PHONE //
  
  $wp_customize->add_setting('contacts-direct-phone', array(
    'default' => '+380 (96) 123 45 67'
  ));

  $wp_customize->add_control('contacts-direct-phone', array(
    'label' => 'Телефон',
    'description' => 'Наприклад: +380 (96) 123 45 67',
    'section' => 'contacts-direct-section'
  ));

  // CONTACTS-DIRECT-ADDRESS //
  
  $wp_customize->add_setting('contacts-direct-address', array(
    'default' => 'м. Київ, вул. Велика Васильківська, 00'
  ));

  $wp_customize->add_control('contacts-direct-address', array(
    'label' => 'Адреса',
    'description' => 'м. Київ, вул. Велика Васильківська, 00',
    'section' => 'contacts-direct-section',
    'type' => 'textarea'
  ));
});

?>