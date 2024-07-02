<?php

add_action('customize_register', function ($wp_customize) {
  $wp_customize->add_section('services-telegram-section', array(
    'title' => 'Telegram',
    'panel' => 'services-panel',
    'priority' => '1'
  ));

  // SERVICES-TELEGRAM-TOKEN //

  $wp_customize->add_setting('services-telegram-token', array(
    'default' => ''
  ));

  $wp_customize->add_control('services-telegram-token', array(
    'label' => 'Токен бота',
    'description' => 'Отримати можна за допомогою @BotFather',
    'section' => 'services-telegram-section'
  ));

  // SERVICES-TELEGRAM-GROUP //

  $wp_customize->add_setting('services-telegram-group', array(
    'default' => ''
  ));

  $wp_customize->add_control('services-telegram-group', array(
    'label' => 'ID групи',
    'description' => 'Група, в яку будуть надсилатись заявки з форм на сайті',
    'section' => 'services-telegram-section'
  ));
});

?>