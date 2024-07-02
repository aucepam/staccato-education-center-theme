<?php

add_action('customize_register', function ($wp_customize) {
  $wp_customize->add_section('services-google-section', array(
    'title' => 'Google',
    'panel' => 'services-panel',
    'priority' => '2'
  ));

  // SERVICES-GOOGLE-MAP //

  $wp_customize->add_setting('services-google-map', array(
    'default' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4609.0298870743645!2d30.488226680730115!3d50.38965935357205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce594d663f53%3A0xc5be6a4231b586d9!2z0J3QvtCy0LAg0J_QvtGI0YLQsC4g0J_QvtGI0YLQvtCy0LUg0LLRltC00LTRltC70LXQvdC90Y8g4oSWMjI4ICjQtNC-IDMwINC60LMpINC8LiDQmtC40ZfQsiwg0JrQuNGX0LLRgdGM0LrQsCDQvtCx0LvQsNGB0YLRjA!5e0!3m2!1sru!2sua!4v1717466814898!5m2!1sru!2sua" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'
  ));

  $wp_customize->add_control('services-google-map', array(
    'label' => 'Google мапа',
    'description' => 'Необхідно ввести код карти від Google. Для цього виберіть точку на карті, натисніть "Поділитись" та виберіть "Вбудовування карт". Виберіть середній розмір карти та скопіюйте код HTML',
    'section' => 'services-google-section',
    'type' => 'textarea'
  ));  
});

?>