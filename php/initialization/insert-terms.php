<?php

// GALLERY-CATEGORIES //

if (!get_term_by('slug', 'gallery', 'category')) {
  $parent_category = wp_insert_term('Галерея', 'category', array(
    'description' => 'Основна категорія для медіафайлів, які відображаються на сторінці "Галерея". Якщо вкладки з папками на сторінці включені, будуть відображатися медіафайли з підкатегорій цієї категорії, інакше будуть відображатися медіафайли з цієї категорії.',
    'slug' => 'gallery'
  ));

  if (!is_wp_error($parent_category)) {
    $parent_category_id = $parent_category['term_id'];
    $subcategories = array(
      array('name' => 'Уроки фортепіано', 'slug' => 'gallery-piano'),
      array('name' => 'Робота з логопедом', 'slug' => 'gallery-speaking'),
      array('name' => 'Вивчення англійської мови', 'slug' => 'gallery-english'),
    );

    foreach ($subcategories as $subcategory) {
      if (!get_term_by('slug', $subcategory['slug'], 'category')) {
        wp_insert_term($subcategory['name'], 'category', array(
          'description' => "Додайте медіафайли сюди, які будуть відображатися на сторінці \"Галерея\" у вкладці \"{$subcategory['name']}\"",
          'slug' => $subcategory['slug'],
          'parent' => $parent_category_id
        ));
      }
    }
  }
}

// TEACHERS-CATEGORY //

if (!get_term_by('slug', 'teachers', 'category')) {
  wp_insert_term('Викладачі', 'category', array(
    'description' => 'Якщо бажаєте відобразити викладачів на головній сторінці у секції "Про нас", то завантажте зображення викладачів сюди',
    'slug' => 'teachers'
  ));
}

// CAROUSEL-CATEGORY //

if (!get_term_by('slug', 'carousel', 'category')) {
  wp_insert_term('Карусель', 'category', array(
    'description' => 'Якщо бажаєте відобразити медіафайли на головній сторінці у секції "Галерея", то завантажте медіафайли сюди',
    'slug' => 'carousel'
  ));
}

?>