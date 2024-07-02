<section id="header" class="w-full overflow-x-hidden">
  <div class="flex flex-col gap-6 p-6 lg:px-12 lg:py-24">
    <h1 class="text-4xl sm:text-5xl lg:text-7xl sm:text-center font-serif font-medium !leading-tight">
      <?php
        echo str_replace(
          ['#', '*', '(', ')'],
          ['<br />', '<i class="ph-fill title-icon ' . get_theme_mod('home-page-header-icon') . ' ' . get_theme_mod('home-page-header-icon-color') . '"></i>', '<span class="shape-outline">', '</span>'],
          get_theme_mod('home-page-header-title')
        );
      ?>
    </h1>
    <p class="text-base md:text-lg lg:text-xl text-neutral-500 sm:text-center font-medium">
      <?php echo str_replace('#', '<br />', get_theme_mod('home-page-header-subtitle')); ?>
    </p>
    <div class="flex max-sm:flex-col justify-center sm:items-center gap-3 lg:gap-6">
      <a class="<?php echo get_theme_mod('home-page-header-first-button-color'); ?> flex justify-center items-center gap-1.5 border-2 rounded-full text-xs md:text-sm text-center font-bold px-8 py-2.5 active:scale-95 transition-[background,color,transform]" href="<?php echo get_theme_mod('home-page-header-first-button-url'); ?>">
        <?php if (!empty(get_theme_mod('home-page-header-first-button-icon'))): ?>
          <i class="ph-fill <?php echo get_theme_mod('home-page-header-first-button-icon') ?> text-[16px]"></i>
        <?php endif; ?>
        <?php echo get_theme_mod('home-page-header-first-button-text'); ?>
      </a>
      <?php if (get_theme_mod('home-page-header-second-button-enabled') == '1'): ?>
        <a class="<?php echo get_theme_mod('home-page-header-second-button-color'); ?> flex justify-center items-center gap-1.5 border-2  rounded-full text-xs md:text-sm text-center font-bold px-8 py-2.5 active:scale-95 transition-[background,color,transform]" href="<?php echo get_theme_mod('home-page-header-second-button-url'); ?>">
          <?php if (!empty(get_theme_mod('home-page-header-second-button-icon'))): ?>
            <i class="ph-fill <?php echo get_theme_mod('home-page-header-second-button-icon') ?> text-[16px]"></i>
          <?php endif; ?>
          <?php echo get_theme_mod('home-page-header-second-button-text'); ?>
        </a>
      <?php endif; ?>
    </div>
  </div>
</section>