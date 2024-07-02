<?php

function check_required_plugins() {
  $plugins = array(
    array(
      'name' => 'Pods – Custom Content Types and Fields',
      'slug' => 'pods/init.php',
      'instructions' => 'Перейдіть в <strong>"Управління Pods" (Pods Admin) - "Імпорт/експорт пакетів" (Import/export)</strong> та натисніть на кнопку <strong>"<u>Імпорт</u>" (Import)</strong>.<br /><br /> Перейдіть до папки теми (staccato-education-center-theme), потім перейдіть до <strong><code>/assets/export</code></strong> і знайдіть файл <strong><code>pods-package.json</code></strong>. Завантажте його в форму, що з\'явилася раніше на сторінці та натисніть <strong>"<u>Продовжити</u>" (Continue)</strong>.'
    ), array(
      'name' => 'Post Types Order',
      'slug' => 'post-types-order/post-types-order.php',
      'instructions' => 'Перейдіть в <strong>"Налаштування" - "Post Types Order"</strong> та в пунктах <strong>"Показати / Сховати інтерфейс" (Show / Hide re-order interface)</strong> та <strong>"Перетягування архівів" (Archive Drag&Drop)</strong> виберіть у всіх полях значення <strong>"<u>Показати</u>" (Show)</strong> та <strong>"<u>Так</u>" (Yes)</strong> відповідно'
    ), array(
      'name' => 'Pods Alternative Cache',
      'slug' => 'pods-alternative-cache/pods-alternative-cache.php',
      'instructions' => 'Додаткові дії не потрібні'
    ), array(
      'name' => 'Media Library Categories',
      'slug' => 'wp-media-library-categories/index.php',
      'instructions' => 'Додаткові дії не потрібні'
    )
  );
  
  echo '<p>Для працездатності сайту та зручності роботи з ним необхідно встановити, активувати та налаштувати нижчезазначені плагіни</p><br />';

  foreach ($plugins as $plugin) {
    $is_installed = file_exists(WP_PLUGIN_DIR . '/' . $plugin['slug']);
    $is_active = is_plugin_active($plugin['slug']);
    $plugin_slug = dirname($plugin['slug']);
    $install_url = wp_nonce_url(self_admin_url('update.php?action=install-plugin&plugin=' . $plugin_slug), 'install-plugin_' . $plugin_slug);
    $activate_url = wp_nonce_url(self_admin_url('plugins.php?action=activate&plugin=' . $plugin['slug']), 'activate-plugin_' . $plugin['slug']);

    echo '<details><summary>' . $plugin['name'] . '</summary>';

    if (!empty($plugin['instructions'])) {
      echo '<p>' . $plugin['instructions'] . '</p>';
    }
    
    if ($is_installed && $is_active) {
      echo '<small style="color:green;">Активований</small>';
    } elseif ($is_installed) {
      echo '<small style="color:orange;">Встановлений, але не активований</small> • <small><a href="' . $activate_url . '">Активувати</a></small>';
    } else {
      echo '<small style="color:red;">Не встановлений</small> • <small><a href="' . $install_url . '">Завантажити</a></small>';
    }
    
    echo '</details><hr />';
  }
}

?>