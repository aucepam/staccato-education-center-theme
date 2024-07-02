<?php

function prefixed_colors ($prefix = '') {
  $color_pallete = array(
    'red' => 'Червоний',
    'orange' => 'Помаранчевий',
    'amber' => 'Янтарний',
    'yellow' => 'Жовтий',
    'lime' => 'Лаймовий',
    'green' => 'Зелений',
    'emerald' => 'Смарагдовий',
    'teal' => 'Бірюзовий',
    'cyan' => 'Блакитний',
    'sky' => 'Небесний',
    'blue' => 'Синій',
    'indigo' => 'Індиго',
    'violet' => 'Фіолетовий',
    'purple' => 'Ліловий',
    'fuchsia' => 'Фуксія',
    'pink' => 'Рожевий',
    'rose' => 'Трояндовий',
  );

  return empty ($prefix) ? $icons : array_combine(
    array_map(fn($key) => $prefix . '-' . $key, array_keys($color_pallete)),
    $color_pallete
  );
}

?>