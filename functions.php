<?php

require get_template_directory() . '/php/prefixed-colors.php';
require get_template_directory() . '/php/prefixed-icons.php';

// WP-ENQUEUE-SCRIPTS //

add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style('base', get_stylesheet_uri());
  wp_enqueue_style('globals', get_template_directory_uri() . '/css/globals.css', array(), null);
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Unbounded:wght@200..900&display=swap', array(), null);
  wp_enqueue_script('phosphor', 'https://unpkg.com/@phosphor-icons/web', array(), null, true);
  wp_enqueue_script('navbar-script', get_template_directory_uri() . '/js/navbar.js', array(), null, true);
  
  if (is_front_page()) {
    wp_enqueue_script('cloudflare', 'https://challenges.cloudflare.com/turnstile/v0/api.js', array(), null, true);
    wp_enqueue_script('contact-form-script', get_template_directory_uri() . '/js/contact-form.js', array('cloudflare'), null, true);
    wp_enqueue_script('classes-carousel-script', get_template_directory_uri() . '/js/classes-carousel.js', array(), null, true);
    wp_enqueue_script('video-script', get_template_directory_uri() . '/js/video.js', array(), null, true);
    wp_enqueue_script('gallery-script', get_template_directory_uri() . '/js/gallery.js', array(), null, true);
  }

  if (is_page('pricing')) {
    wp_enqueue_script('cloudflare', 'https://challenges.cloudflare.com/turnstile/v0/api.js', array(), null, true);
    wp_enqueue_script('contact-form-script', get_template_directory_uri() . '/js/contact-form.js', array('cloudflare'), null, true);
    wp_enqueue_script('classes-tabs-script', get_template_directory_uri() . '/js/classes-tabs.js', array(), null, true);
    wp_enqueue_script('disclosure-script', get_template_directory_uri() . '/js/disclosure.js', array(), null, true);
  }

  if (is_page('gallery')) {
    wp_enqueue_style('photoswipe', get_template_directory_uri() . '/lib/photoswipe/photoswipe.css', array(), null);
    wp_enqueue_script_module('photoswipe-module', get_template_directory_uri() . '/js/photoswipe.js', array(), null, true);
  }
});

// AFTER-SETUP-THEME //

add_action('after_setup_theme', function () {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');

  add_theme_support('custom-logo', [
    'width' => 290,
    'height' => 88,
    'flex-width' => true,
    'flex-height' => true,
  ]);

  register_nav_menus(array(
    'primary' => 'Головне меню',
    'footer' => 'Підвал сайту'
  ));
});

// NAV-MENU-LINK-ATTRIBUTES //

add_filter('nav_menu_link_attributes', function ($atts) {
  $atts['class'] = 'nav-link';
  return $atts;
}, 10, 4);

// AFTER-SWITCH-THEME //

add_action('after_switch_theme', function () {
  require get_template_directory() . '/php/initialization/set-theme-mods.php';
  require get_template_directory() . '/php/initialization/insert-terms.php';
  require get_template_directory() . '/php/initialization/insert-posts.php';
  require get_template_directory() . '/php/initialization/update-nav-menu-items.php';
  require get_template_directory() . '/php/initialization/update-permalink-structure.php';

  $home_page = get_page_by_path('home');
  if ($home_page && get_option('show_on_front') !== 'page') {
    update_option('show_on_front', 'page');
    update_option('page_on_front', $home_page->ID);
  }

  $custom_medium_size = 600;

  if (get_option('medium_size_w') != $custom_medium_size) {
    update_option('medium_size_w', $custom_medium_size);
  }

  if (get_option('medium_size_h') != $custom_medium_size) {
    update_option('medium_size_h', $custom_medium_size);
  }
});

// ADMIN-BAR-MENU //

add_action('admin_bar_menu', function ($wp_admin_bar) {
  $wp_admin_bar->remove_node('comments');
  $wp_admin_bar->remove_node('edit');
  $wp_admin_bar->remove_node('search');

  $wp_admin_bar->add_node(array(
    'id' => 'page-pricing',
    'parent' => 'site-name',
    'title' => 'Прейскурант',
    'href' => site_url('pricing')
  ));

  $wp_admin_bar->add_node(array(
    'id' => 'page-gallery',
    'parent' => 'site-name',
    'title' => 'Галерея',
    'href' => site_url('gallery')
  ));
}, 500);

// ADMIN-MENU //

add_action('admin_menu', function () {
  remove_menu_page('edit.php');
  remove_menu_page('edit-comments.php');
}, 500);

// DASHBOARD-SETUP //

add_action('wp_dashboard_setup', function () {
  require get_template_directory() . '/php/dashboard-widgets/check-required-plugins.php';
  wp_add_dashboard_widget('check_required_plugins', 'Необхідні плагіни', 'check_required_plugins');
});

// PLUGIN-ROW-META //

add_filter('plugin_row_meta', function ($plugin_meta, $plugin_file, $plugin_data, $status) {
  echo '<code>' . $plugin_file . '</code><br />';
  return $plugin_meta;
}, 10, 4);

// HEADER-FOOTER-PANEL //

require get_template_directory() . '/php/customize-register/header-footer-panel/header-section.php';
require get_template_directory() . '/php/customize-register/header-footer-panel/footer-section.php';

add_action('customize_register', function ($wp_customize) {
  $wp_customize->add_panel('header-footer-panel', array(
    'title' => 'Шапка та підвал сайту',
    'priority' => '160'
  ));
});

// HOME-PAGE-PANEL //

require get_template_directory() . '/php/customize-register/home-page-panel/home-page-header-section.php';
require get_template_directory() . '/php/customize-register/home-page-panel/home-page-about-section.php';
require get_template_directory() . '/php/customize-register/home-page-panel/home-page-advantages-section.php';
require get_template_directory() . '/php/customize-register/home-page-panel/home-page-classes-section.php';
require get_template_directory() . '/php/customize-register/home-page-panel/home-page-gallery-section.php';
require get_template_directory() . '/php/customize-register/home-page-panel/home-page-pricing-section.php';
require get_template_directory() . '/php/customize-register/home-page-panel/home-page-feedback-section.php';

add_action('customize_register', function ($wp_customize) {
  $wp_customize->add_panel('home-page-panel', array(
    'title' => 'Налаштування головної сторінки',
    'priority' => '161'
  ));
});

// PRICING-PAGE-PANEL //

require get_template_directory() . '/php/customize-register/pricing-page-panel/pricing-page-header-section.php';
require get_template_directory() . '/php/customize-register/pricing-page-panel/pricing-page-classes-section.php';
require get_template_directory() . '/php/customize-register/pricing-page-panel/pricing-page-feedback-section.php';

add_action('customize_register', function ($wp_customize) {
  $wp_customize->add_panel('pricing-page-panel', array(
    'title' => 'Налаштування сторінки прейскуранта',
    'priority' => '162'
  ));
});

// GALLERY-PAGE-PANEL //

require get_template_directory() . '/php/customize-register/gallery-page-panel/gallery-page-header-section.php';
require get_template_directory() . '/php/customize-register/gallery-page-panel/gallery-page-media-section.php';

add_action('customize_register', function ($wp_customize) {
  $wp_customize->add_panel('gallery-page-panel', array(
    'title' => 'Налаштування сторінки галереї',
    'priority' => '163'
  ));
});

// SERVICES-PANEL //

require get_template_directory() . '/php/customize-register/services-panel/services-telegram-section.php';
require get_template_directory() . '/php/customize-register/services-panel/services-google-section.php';
require get_template_directory() . '/php/customize-register/services-panel/services-cloudflare-section.php';

add_action('customize_register', function($wp_customize) {
  $wp_customize->add_panel('services-panel', array(
    'title' => 'Налаштування сервісів',
    'priority' => '164'
  ));
});

// CONTACTS-PANEL //

require get_template_directory() . '/php/customize-register/contacts-panel/contacts-direct-section.php';
require get_template_directory() . '/php/customize-register/contacts-panel/contacts-social-section.php';

add_action('customize_register', function($wp_customize) {
  $wp_customize->add_panel('contacts-panel', array(
    'title' => 'Налаштування контактних даних',
    'priority' => '165'
  ));
});

// HANDLE-CONTACT-FORM-SUBMISSION //

require get_template_directory() . '/php/handle-contact-form-submission.php';
add_action('admin_post_send_message', 'handle_contact_form_submission');
add_action('admin_post_nopriv_send_message', 'handle_contact_form_submission');

?>