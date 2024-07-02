<!doctype html>
<html lang="uk">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php wp_head(); ?>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <?php if (is_admin_bar_showing()): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/admin-bar.css'; ?>" />
  <?php endif; ?>
</head>
<body>
  <nav id="navbar" class="fixed flex justify-between items-center md:gap-2 bg-white top-0 inset-x-0 px-6 lg:px-12 py-4 z-[2000]">
    <a class="relative w-44 h-10 shrink-0" href="/">
      <?php
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

        if (has_custom_logo()) {
          echo '<img
            class="w-full h-full text-lg font-serif font-medium object-contain object-left"
            src="' . esc_url($logo[0]) . '"
            alt="' . get_bloginfo('name') . '"
          />';
        } else {
          echo '<span class="text-base font-serif font-medium whitespace-nowrap">' . get_bloginfo('name') . '</span>';
        }
      ?>
    </a>
    <button
      id="navbar-toggler"
      class="relative md:hidden focus:outline-none focus:ring-4 focus:ring-blue-400/50 rounded-xl -mr-3 p-3 active:scale-95 transition-[transform,box-shadow]"
      aria-label="Відкрити меню"
    >
      <i id="toggler-icon-open" class="ph ph-list block [#navbar.opened_&]:opacity-0 [#navbar.opened_&]:rotate-90 [#navbar.opened_&]:scale-50 text-[20px] transition-[transform,opacity] ease-in-out duration-200"></i>
      <i id="toggler-icon-close" class="ph ph-x block absolute inset-3 opacity-0 [#navbar.opened_&]:opacity-100 -rotate-90 [#navbar.opened_&]:rotate-0 scale-50 [#navbar.opened_&]:scale-100 text-[20px] transition-[transform,opacity] ease-in-out duration-200"></i>
    </button>
    <div class="max-md:absolute flex max-md:flex-col md:gap-2 md:grow max-md:bg-white max-md:border-b max-md:border-neutral-300 max-md:w-full top-full inset-x-0 max-md:invisible max-md:[#navbar.opened_&]:visible max-md:opacity-0 max-md:[#navbar.opened_&]:opacity-100 max-md:-translate-y-6 max-md:[#navbar.opened_&]:translate-y-0 transition-[transform,visibility,opacity] ease-in-out duration-200">
      <?php
        wp_nav_menu([
          'theme_location' => 'primary',
          'container' => false,
          'menu_class' => 'navbar-nav flex max-md:flex-col md:items-center md:gap-2 md:max-lg:ml-auto lg:mx-auto'
        ]);
      ?>
      <a class="<?php echo get_theme_mod('navbar-button-color'); ?> nav-link md:max-lg:hidden flex justify-center items-center gap-1.5 border-2 max-md:rounded-xl rounded-full max-xl:text-xs xl:text-sm text-center font-bold whitespace-nowrap max-md:m-3 px-8 md:px-6 xl:px-8 py-2.5 md:py-2 xl:py-2.5 active:scale-95 transition-[background,color,transform]" href="<?php echo get_theme_mod('navbar-button-url'); ?>">
        <?php if (!empty(get_theme_mod('navbar-button-icon'))): ?>
          <i class="ph-fill <?php echo get_theme_mod('navbar-button-icon') ?> text-[16px]"></i>
        <?php endif; ?>
        <?php echo get_theme_mod('navbar-button-title'); ?>
      </a>
    </div>
  </nav>
  <main>