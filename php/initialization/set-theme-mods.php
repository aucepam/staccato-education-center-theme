<?php

require get_template_directory() . '/php/default-values.php';

foreach ($default_values as $field => $value) {
  if (!get_theme_mod($field)) {
    set_theme_mod($field, $value);
  }
}

?>