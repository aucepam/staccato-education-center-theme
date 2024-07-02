<?php

add_action('customize_register', function ($wp_customize) {
  $wp_customize->add_section('home-page-advantages-section', array(
    'title' => 'Наші переваги',
    'panel' => 'home-page-panel',
    'priority' => '3'
  ));

  // HOME-PAGE-ADVANTAGES-TITLE //

  $wp_customize->add_setting('home-page-advantages-title', array(
    'default' => 'Чому обирають нас?'
  ));
  
  $wp_customize->add_control('home-page-advantages-title', array(
    'label' => 'Заголовок',
    'description' => 'Щоб використати перенесення рядка, введіть #',
    'section' => 'home-page-advantages-section',
    'type' => 'textarea'
  ));

  // HOME-PAGE-ADVANTAGES-SUBTITLE //

  $wp_customize->add_setting('home-page-advantages-subtitle', array(
    'default' => 'Наші учні обирають навчання в нашій дитячій школі через високу якість освіти'
  ));
  
  $wp_customize->add_control('home-page-advantages-subtitle', array(
    'label' => 'Підзаголовок',
    'description' => 'Щоб використати перенесення рядка, введіть #',
    'section' => 'home-page-advantages-section',
    'type' => 'textarea'
  ));

  // HOME-PAGE-ADVANTAGES-FIRST-CARD-ENABLED //

  $wp_customize->add_setting('home-page-advantages-first-card-enabled', array(
    'default' => '1'
  ));

  $wp_customize->add_control('home-page-advantages-first-card-enabled', array(
    'label' => 'Відображати першу картку',
    'section' => 'home-page-advantages-section',
    'type' => 'checkbox'
  ));

  // HOME-PAGE-ADVANTAGES-FIRST-CARD-TITLE //

  $wp_customize->add_setting('home-page-advantages-first-card-title', array(
    'default' => 'Повний Розвиток'
  ));

  $wp_customize->add_control('home-page-advantages-first-card-title', array(
    'label' => 'Заголовок першої картки',
    'section' => 'home-page-advantages-section'
  ));

  // HOME-PAGE-ADVANTAGES-FIRST-CARD-SUBTITLE //

  $wp_customize->add_setting('home-page-advantages-first-card-subtitle', array(
    'default' => 'Ми вважаємо, що навчання має сприяти повному розвитку кожної дитини'
  ));

  $wp_customize->add_control('home-page-advantages-first-card-subtitle', array(
    'label' => 'Підзаголовок першої картки',
    'section' => 'home-page-advantages-section',
    'type' => 'textarea'
  ));

  // HOME-PAGE-ADVANTAGES-FIRST-CARD-ICON //

  $wp_customize->add_setting('home-page-advantages-first-card-icon', array(
    'default' => 'ph-grains'
  ));

  $wp_customize->add_control('home-page-advantages-first-card-icon', array(
    'label' => 'Іконка першої картки',
    'section' => 'home-page-advantages-section',
    'type' => 'select',
    'choices' => prefixed_icons()
  ));

  // HOME-PAGE-ADVANTAGES-FIRST-CARD-ICON-COLOR //

  $wp_customize->add_setting('home-page-advantages-first-card-icon-color', array(
    'default' => 'duotone-icon-amber'
  ));

  $wp_customize->add_control('home-page-advantages-first-card-icon-color', array(
    'label' => 'Колір іконки першої картки',
    'section' => 'home-page-advantages-section',
    'type' => 'select',
    'choices' => prefixed_colors('duotone-icon')
  ));

  // HOME-PAGE-ADVANTAGES-SECOND-CARD-ENABLED //

  $wp_customize->add_setting('home-page-advantages-second-card-enabled', array(
    'default' => '1'
  ));

  $wp_customize->add_control('home-page-advantages-second-card-enabled', array(
    'label' => 'Відображати другу картку',
    'section' => 'home-page-advantages-section',
    'type' => 'checkbox'
  ));

  // HOME-PAGE-ADVANTAGES-SECOND-CARD-TITLE //

  $wp_customize->add_setting('home-page-advantages-second-card-title', array(
    'default' => 'Особистий Підхід'
  ));

  $wp_customize->add_control('home-page-advantages-second-card-title', array(
    'label' => 'Заголовок другої картки',
    'section' => 'home-page-advantages-section'
  ));

  // HOME-PAGE-ADVANTAGES-SECOND-CARD-SUBTITLE //

  $wp_customize->add_setting('home-page-advantages-second-card-subtitle', array(
    'default' => 'Ми розуміємо, що кожна дитина унікальна та має власні потреби та таланти'
  ));

  $wp_customize->add_control('home-page-advantages-second-card-subtitle', array(
    'label' => 'Підзаголовок другої картки',
    'section' => 'home-page-advantages-section',
    'type' => 'textarea'
  ));

  // HOME-PAGE-ADVANTAGES-SECOND-CARD-ICON //

  $wp_customize->add_setting('home-page-advantages-second-card-icon', array(
    'default' => 'ph-baby'
  ));

  $wp_customize->add_control('home-page-advantages-second-card-icon', array(
    'label' => 'Іконка другої картки',
    'section' => 'home-page-advantages-section',
    'type' => 'select',
    'choices' => prefixed_icons()
  ));

  // HOME-PAGE-ADVANTAGES-SECOND-CARD-ICON-COLOR //

  $wp_customize->add_setting('home-page-advantages-second-card-icon-color', array(
    'default' => 'duotone-icon-blue'
  ));

  $wp_customize->add_control('home-page-advantages-second-card-icon-color', array(
    'label' => 'Колір іконки другої картки',
    'section' => 'home-page-advantages-section',
    'type' => 'select',
    'choices' => prefixed_colors('duotone-icon')
  ));

  // HOME-PAGE-ADVANTAGES-THIRD-CARD-ENABLED //

  $wp_customize->add_setting('home-page-advantages-third-card-enabled', array(
    'default' => '1'
  ));

  $wp_customize->add_control('home-page-advantages-third-card-enabled', array(
    'label' => 'Відображати третю картку',
    'section' => 'home-page-advantages-section',
    'type' => 'checkbox'
  ));

  // HOME-PAGE-ADVANTAGES-THIRD-CARD-TITLE //

  $wp_customize->add_setting('home-page-advantages-third-card-title', array(
    'default' => 'Любов до Дітей'
  ));

  $wp_customize->add_control('home-page-advantages-third-card-title', array(
    'label' => 'Заголовок третьої картки',
    'section' => 'home-page-advantages-section'
  ));

  // HOME-PAGE-ADVANTAGES-THIRD-CARD-SUBTITLE //

  $wp_customize->add_setting('home-page-advantages-third-card-subtitle', array(
    'default' => 'Наші вчителі та персонал завжди готові дарувати дітям увагу та тепло'
  ));

  $wp_customize->add_control('home-page-advantages-third-card-subtitle', array(
    'label' => 'Підзаголовок третьої картки',
    'section' => 'home-page-advantages-section',
    'type' => 'textarea'
  ));

  // HOME-PAGE-ADVANTAGES-THIRD-CARD-ICON //

  $wp_customize->add_setting('home-page-advantages-third-card-icon', array(
    'default' => 'ph-heart'
  ));

  $wp_customize->add_control('home-page-advantages-third-card-icon', array(
    'label' => 'Іконка третьої картки',
    'section' => 'home-page-advantages-section',
    'type' => 'select',
    'choices' => prefixed_icons()
  ));

  // HOME-PAGE-ADVANTAGES-THIRD-CARD-ICON-COLOR //

  $wp_customize->add_setting('home-page-advantages-third-card-icon-color', array(
    'default' => 'duotone-icon-rose'
  ));

  $wp_customize->add_control('home-page-advantages-third-card-icon-color', array(
    'label' => 'Колір іконки третьої картки',
    'section' => 'home-page-advantages-section',
    'type' => 'select',
    'choices' => prefixed_colors('duotone-icon')
  ));

  // HOME-PAGE-ADVANTAGES-FOURTH-CARD-ENABLED //

  $wp_customize->add_setting('home-page-advantages-fourth-card-enabled', array(
    'default' => ''
  ));

  $wp_customize->add_control('home-page-advantages-fourth-card-enabled', array(
    'label' => 'Відображати четверту картку',
    'section' => 'home-page-advantages-section',
    'type' => 'checkbox'
  ));

  // HOME-PAGE-ADVANTAGES-FOURTH-CARD-TITLE //

  $wp_customize->add_setting('home-page-advantages-fourth-card-title', array(
    'default' => 'Інноваційні Методики'
  ));

  $wp_customize->add_control('home-page-advantages-fourth-card-title', array(
    'label' => 'Заголовок четвертої картки',
    'section' => 'home-page-advantages-section'
  ));

  // HOME-PAGE-ADVANTAGES-FOURTH-CARD-SUBTITLE //

  $wp_customize->add_setting('home-page-advantages-fourth-card-subtitle', array(
    'default' => 'Ми використовуємо сучасні та передові методики навчання, щоб зацікавити дітей і розвивати їхні навички'
  ));

  $wp_customize->add_control('home-page-advantages-fourth-card-subtitle', array(
    'label' => 'Підзаголовок четвертої картки',
    'section' => 'home-page-advantages-section',
    'type' => 'textarea'
  ));

  // HOME-PAGE-ADVANTAGES-FOURTH-CARD-ICON //

  $wp_customize->add_setting('home-page-advantages-fourth-card-icon', array(
    'default' => 'ph-compass'
  ));

  $wp_customize->add_control('home-page-advantages-fourth-card-icon', array(
    'label' => 'Іконка четвертої картки',
    'section' => 'home-page-advantages-section',
    'type' => 'select',
    'choices' => prefixed_icons()
  ));

  // HOME-PAGE-ADVANTAGES-FOURTH-CARD-ICON-COLOR //

  $wp_customize->add_setting('home-page-advantages-fourth-card-icon-color', array(
    'default' => 'duotone-icon-violet'
  ));

  $wp_customize->add_control('home-page-advantages-fourth-card-icon-color', array(
    'label' => 'Колір іконки четвертої картки',
    'section' => 'home-page-advantages-section',
    'type' => 'select',
    'choices' => prefixed_colors('duotone-icon')
  ));
});

?>