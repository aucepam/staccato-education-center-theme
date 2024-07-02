<section id="advantages" class="bg-line bg-contain bg-top sm:bg-center bg-no-repeat text-center px-6 lg:px-12 mt-12 lg:mt-24">
  <div class="2xl:w-2/3 lg:mx-auto sm:max-lg:mx-6 lg:max-2xl:mx-12">
    <h2 class="text-2xl lg:text-4xl font-serif font-medium mb-2">
      <?php echo str_replace('#', '<br />', get_theme_mod('home-page-advantages-title')); ?>
    </h2>
    <p class="max-lg:text-sm text-neutral-500 font-medium">
      <?php echo str_replace('#', '<br />', get_theme_mod('home-page-advantages-subtitle')); ?>
    </p>
  </div>
  <div class="flex max-sm:flex-col sm:max-xl:flex-wrap justify-around gap-y-6 mt-6 xl:mt-24">
    <?php foreach (array('first', 'second', 'third', 'fourth') as $prefix): ?>
      <?php if (get_theme_mod('home-page-advantages-' . $prefix . '-card-enabled') == '1'): ?>
        <div class="sm:max-lg:w-1/2 lg:w-full lg:max-w-sm xl:odd:mt-12 sm:px-3">
          <div class="flex flex-col items-center gap-1 lg:gap-2 bg-white border border-neutral-100 rounded-3xl max-md:h-full p-6">
            <?php if (!empty(get_theme_mod('home-page-advantages-' . $prefix . '-card-icon'))): ?>
              <span class="<?php echo get_theme_mod('home-page-advantages-' . $prefix . '-card-icon-color'); ?> rounded-full mb-2 p-3">
                <i class="ph-fill <?php echo get_theme_mod('home-page-advantages-' . $prefix . '-card-icon') ?> block text-[32px]"></i>
              </span>
            <?php endif; ?>
            <h3 class="text-lg lg:text-xl font-serif font-medium">
              <?php echo get_theme_mod('home-page-advantages-' . $prefix . '-card-title'); ?>
            </h3>
            <p class="text-sm text-neutral-400 font-medium">
              <?php echo get_theme_mod('home-page-advantages-' . $prefix . '-card-subtitle'); ?>
            </p>
          </div>
        </div>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>
</section>