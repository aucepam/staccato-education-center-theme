<?php

add_action('customize_register', function ($wp_customize) {
  $wp_customize->add_section('contacts-social-section', array(
    'title' => 'Соціальні мережі',
    'panel' => 'contacts-panel',
    'priority' => '2'
  ));

  // CONTACTS-SOCIAL-INSTAGRAM //

  $wp_customize->add_setting('contacts-social-instagram', array(
    'default' => 'https://instagram.com/'
  ));

  $wp_customize->add_control('contacts-social-instagram', array(
    'label' => 'Instagram',
    'description' => 'Наприклад: https://instagram.com/username',
    'section' => 'contacts-social-section',
    'type' => 'url'
  ));

  // CONTACTS-SOCIAL-FACEBOOK //

  $wp_customize->add_setting('contacts-social-facebook', array(
    'default' => 'https://facebook.com/'
  ));

  $wp_customize->add_control('contacts-social-facebook', array(
    'label' => 'Facebook',
    'description' => 'Наприклад: https://facebook.com/username',
    'section' => 'contacts-social-section',
    'type' => 'url'
  ));

  // CONTACTS-SOCIAL-TELEGRAM //

  $wp_customize->add_setting('contacts-social-telegram', array(
    'default' => 'https://t.me/'
  ));

  $wp_customize->add_control('contacts-social-telegram', array(
    'label' => 'Telegram',
    'description' => 'Наприклад: https://t.me/username',
    'section' => 'contacts-social-section',
    'type' => 'url'
  ));

  // CONTACTS-SOCIAL-WHATSAPP //

  $wp_customize->add_setting('contacts-social-whatsapp', array(
    'default' => ''
  ));
  
  $wp_customize->add_control('contacts-social-whatsapp', array(
    'label' => 'WhatsApp',
    'description' => 'Наприклад: https://wa.me/+380961234567',
    'section' => 'contacts-social-section',
    'type' => 'url'
  ));

  // CONTACTS-SOCIAL-X //

  $wp_customize->add_setting('contacts-social-x', array(
    'default' => ''
  ));
  
  $wp_customize->add_control('contacts-social-x', array(
    'label' => 'X/Twitter',
    'description' => 'Наприклад: https://x.com/username',
    'section' => 'contacts-social-section',
    'type' => 'url'
  ));

  // CONTACTS-SOCIAL-YOUTUBE //

  $wp_customize->add_setting('contacts-social-youtube', array(
    'default' => 'https://youtube.com/'
  ));

  $wp_customize->add_control('contacts-social-youtube', array(
    'label' => 'YouTube',
    'description' => 'Наприклад: https://youtube.com/username',
    'section' => 'contacts-social-section',
    'type' => 'url'
  ));

  // CONTACTS-SOCIAL-TIKTOK //

  $wp_customize->add_setting('contacts-social-tiktok', array(
    'default' => 'https://tiktok.com/'
  ));

  $wp_customize->add_control('contacts-social-tiktok', array(
    'label' => 'TikTok',
    'description' => 'Наприклад: https://tiktok.com/@username',
    'section' => 'contacts-social-section',
    'type' => 'url'
  ));

  // CONTACTS-SOCIAL-LINKEDIN //

  $wp_customize->add_setting('contacts-social-linkedin', array(
    'default' => ''
  ));
  
  $wp_customize->add_control('contacts-social-linkedin', array(
    'label' => 'LinkedIn',
    'description' => 'Наприклад: https://linkedin.com/in/username',
    'section' => 'contacts-social-section',
    'type' => 'url'
  ));

  // CONTACTS-SOCIAL-LINKTREE //

  $wp_customize->add_setting('contacts-social-linktree', array(
    'default' => ''
  ));
  
  $wp_customize->add_control('contacts-social-linktree', array(
    'label' => 'Linktree',
    'description' => 'Наприклад: https://linktr.ee/username',
    'section' => 'contacts-social-section',
    'type' => 'url'
  ));

  // CONTACTS-SOCIAL-MASTODON //

  $wp_customize->add_setting('contacts-social-mastodon', array(
    'default' => ''
  ));
  
  $wp_customize->add_control('contacts-social-mastodon', array(
    'label' => 'Mastodon',
    'description' => 'Наприклад: https://mastodon.world/@username',
    'section' => 'contacts-social-section',
    'type' => 'url'
  ));

  // CONTACTS-SOCIAL-MESSENGER //

  $wp_customize->add_setting('contacts-social-messenger', array(
    'default' => ''
  ));
  
  $wp_customize->add_control('contacts-social-messenger', array(
    'label' => 'Facebook Messenger',
    'description' => 'Наприклад: https://m.me/username',
    'section' => 'contacts-social-section',
    'type' => 'url'
  ));

  // CONTACTS-SOCIAL-THREADS //

  $wp_customize->add_setting('contacts-social-threads', array(
    'default' => ''
  ));
  
  $wp_customize->add_control('contacts-social-threads', array(
    'label' => 'Threads',
    'description' => 'Наприклад: https://threads.net/@username',
    'section' => 'contacts-social-section',
    'type' => 'url'
  ));

  // CONTACTS-SOCIAL-SNAPCHAT //

  $wp_customize->add_setting('contacts-social-snapchat', array(
    'default' => ''
  ));
  
  $wp_customize->add_control('contacts-social-snapchat', array(
    'label' => 'Snapchat',
    'description' => 'Наприклад: https://snapchat.com/add/username',
    'section' => 'contacts-social-section',
    'type' => 'url'
  ));

  // CONTACTS-SOCIAL-TUMBLR //

  $wp_customize->add_setting('contacts-social-tumblr', array(
    'default' => ''
  ));
  
  $wp_customize->add_control('contacts-social-tumblr', array(
    'label' => 'Tumblr',
    'description' => 'Наприклад: https://tumblr.com/username',
    'section' => 'contacts-social-section',
    'type' => 'url'
  ));

  // CONTACTS-SOCIAL-PINTEREST //

  $wp_customize->add_setting('contacts-social-pinterest', array(
    'default' => ''
  ));
  
  $wp_customize->add_control('contacts-social-pinterest', array(
    'label' => 'Pinterest',
    'description' => 'Наприклад: https://pinterest.com/username',
    'section' => 'contacts-social-section',
    'type' => 'url'
  ));
});

?>