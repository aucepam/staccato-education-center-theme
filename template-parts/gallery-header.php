<section class="flex flex-col justify-center items-center gap-2 md:gap-4 2xl:w-2/3 text-center lg:mx-auto max-lg:mx-6 lg:max-2xl:mx-12 p-6 lg:p-12">
  <span class="<?php echo get_theme_mod('gallery-page-header-label-color'); ?> flex items-center gap-1.5 border rounded-full text-xs md:text-sm font-semibold px-4 md:px-6 py-1.5">
    <i class="<?php echo get_theme_mod('gallery-page-header-label-icon'); ?> ph-fill block text-[16px]"></i>
    <?php echo get_theme_mod('gallery-page-header-label-text'); ?>
  </span>
  <h1 class="text-xl sm:text-2xl md:text-4xl font-serif font-medium !leading-tight">
    <?php echo str_replace('#', '<br />', get_theme_mod('gallery-page-header-title')); ?>
  </h1>
  <p class="relative text-sm md:text-base text-neutral-500 font-medium md:w-2/3 mx-auto before:absolute before:bg-underline-wavy before:bg-contain before:bg-top before:bg-no-repeat before:top-full before:-inset-x-3 before:mt-2 before:h-8 before:-z-10">
    <?php echo str_replace('#', '<br />', get_theme_mod('gallery-page-header-subtitle')); ?>
  </p>
</section>