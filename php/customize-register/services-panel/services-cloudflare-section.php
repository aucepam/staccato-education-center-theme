<?php

add_action('customize_register', function ($wp_customize) {
  $wp_customize->add_section('services-cloudflare-section', array(
    'title' => 'Cloudflare',
    'panel' => 'services-panel',
    'priority' => '3'
  ));

  // SERVICES-CLOUDFLARE-TURNSTILE-SECRET //

  $wp_customize->add_setting('services-cloudflare-turnstile-secret', array(
    'default' => ''
  ));

  $wp_customize->add_control('services-cloudflare-turnstile-secret', array(
    'label' => 'Secret Key',
    'section' => 'services-cloudflare-section'
  ));

  // SERVICES-CLOUDFLARE-TURNSTILE-SITEKEY //

  $wp_customize->add_setting('services-cloudflare-turnstile-sitekey', array(
    'default' => ''
  ));

  $wp_customize->add_control('services-cloudflare-turnstile-sitekey', array(
    'label' => 'Site Key',
    'section' => 'services-cloudflare-section'
  ));
});

?>