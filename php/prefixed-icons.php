<?php

function prefixed_icons ($prefix = '') {
  $icons = array(
    '' => 'Немає',
    'ph-caret-down' => 'Каретка',
    'ph-caret-circle-down' => 'Каретка у колі',
    'ph-play-circle' => 'Відтворити',
    'ph-video' => 'Відео',
    'ph-panorama' => 'Панорама',
    'ph-image' => 'Картинка',
    'ph-images' => 'Зображення',
    'ph-slideshow' => 'Слайдшоу',
    'ph-phone' => 'Телефон',
    'ph-envelope' => 'Лист',
    'ph-mailbox' => 'Поштова скринька',
    'ph-chat-circle' => 'Чат',
    'ph-chats-circle' => 'Чати',
    'ph-eye' => 'Око',
    'ph-eyes' => 'Очі',
    'ph-heart' => 'Серце',
    'ph-baby' => 'Дитина',
    'ph-baby-carriage' => 'Дитяча коляска',
    'ph-balloon' => 'Шар',
    'ph-butterfly' => 'Метелик',
    'ph-cake' => 'Торт',
    'ph-clover' => 'Конюшина',
    'ph-compass' => 'Компас',
    'ph-lightning' => 'Блискавка',
    'ph-confetti' => 'Конфетті',
    'ph-fire' => 'Вогонь',
    'ph-flag-banner' => 'Прапор',
    'ph-book' => 'Книжка',
    'ph-books' => 'Книжки',
    'ph-book-bookmark' => 'Книжка із закладкою',
    'ph-book-open' => 'Відкрита книжка',
    'ph-bookmark-simple' => 'Закладка',
    'ph-bookmarks' => 'Закладки',
    'ph-quotes' => 'Кавички',
    'ph-flower' => 'Квітка',
    'ph-flower-lotus' => 'Лотос',
    'ph-flower-tulip' => 'Тюльпан',
    'ph-gift' => 'Подарунок',
    'ph-graduation-cap' => 'Випускна шапка',
    'ph-grains' => 'Зерна',
    'ph-hand-peace' => 'Рука мир',
    'ph-hand-heart' => 'Рука серце',
    'ph-hand-waving' => 'Рука махає',
    'ph-hands-clapping' => 'Плескаючі руки',
    'ph-lightbulb-filament' => 'Лампочка',
    'ph-map-pin' => 'Мітка на карті',
    'ph-plant' => 'Рослина',
    'ph-potted-plant' => 'Кімнатна рослина',
    'ph-star' => 'Зірка',
    'ph-star-four' => 'Чотирикінцева зірка',
    'ph-shooting-star' => 'Падаюча зірка',
    'ph-sparkle' => 'Іскорка',
    'ph-student' => 'Студент',
    'ph-tree' => 'Дерево',
    'ph-trophy' => 'Трофей',
    'ph-user' => 'Користувач',
    'ph-users-three' => 'Троє користувачів',
    'ph-users-four' => 'Четверо користувачів',
  );

  return empty ($prefix) ? $icons : array_combine(
    array_map(fn($key) => $prefix . '-' . $key, array_keys($color_pallete)),
    $color_pallete
  );
}

?>