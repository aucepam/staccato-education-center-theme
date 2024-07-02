<span class="block bg-divider-wavy bg-contain bg-center bg-no-repeat 2xl:w-2/3 h-8 lg:mx-auto sm:max-lg:mx-6 lg:max-2xl:mx-12 mt-6 md:mt-12"></span>
<section id="pricing" class="2xl:w-2/3 lg:mx-auto max-lg:mx-6 lg:max-2xl:mx-12 my-6 sm:my-12">
  <div class="flex flex-col items-start sm:items-center gap-2 md:gap-4 sm:text-center">
    <?php if (!empty(get_theme_mod('home-page-pricing-icon'))): ?>
      <span class="<?php echo get_theme_mod('home-page-pricing-icon-color') ?> rounded-xl sm:rounded-full p-2 sm:p-3">
        <i class="ph-fill <?php echo get_theme_mod('home-page-pricing-icon') ?> block text-[24px] sm:text-[32px]"></i>
      </span>
    <?php endif; ?>
    <h2 class="text-xl sm:text-2xl md:text-4xl font-serif font-medium">
      <?php
        echo str_replace(
          ['#', '(', ')'],
          ['<br />', '<span class="shape-outline">', '</span>'],
          get_theme_mod('home-page-pricing-title')
        );
      ?>
    </h2>
    <p class="text-sm md:text-base text-neutral-500 font-medium md:w-2/3 mx-auto">
      <?php echo str_replace('#', '<br />', get_theme_mod('home-page-pricing-subtitle')); ?>
    </p>
  </div>
  <?php
    $disciplines = get_posts(array('post_type' => 'discipline', 'numberposts' => -1, 'meta_key' => '_is_pricing_section_visible', 'meta_value' => '1'));
    if (!empty($disciplines)):
  ?>
    <ul class="my-6 sm:my-12">
      <?php foreach ($disciplines as $discipline): ?>
        <li class="flex flex-col sm:gap-2 max-sm:border-b max-sm:first:border-t max-sm:border-neutral-100 py-6">
          <p class="text-base md:text-lg font-serif font-medium uppercase max-sm:mb-2">
            <?php echo $discipline->_title; ?>
          </p>
          <?php
            $pod = pods('discipline', $discipline->ID);
            $related = $pod->field(array(
              'name' => '_programs', 'params' => array(
                'where' => '_is_pricing_section_visible.meta_value = 1'
              )
            ));
          ?>
          <?php if (!empty($related)): ?>
            <ul class="flex flex-col [&_li]:hover:opacity-50">
              <?php foreach ($related as $program): ?>
                <li class="flex max-sm:flex-col justify-between items-start sm:items-center gap-0.5 sm:gap-6 hover:!opacity-100 py-2 sm:py-1 transition-[opacity]">
                  <span class="text-sm font-semibold tracking-wider uppercase">
                    <?php echo get_post_meta($program['ID'], '_title', true); ?>
                  </span>
                  <span class="max-sm:hidden grow bg-neutral-200 h-px"></span>
                  <span class="text-xs md:text-sm sm:text-right font-serif max-sm:font-medium tracking-wider">
                    <?php echo get_post_meta($program['ID'], '_price', true); ?>
                  </span>
                </li>
              <?php endforeach; ?>
            </ul>
          <?php else: ?>
            <ul class="flex flex-col">
              <li class="flex max-sm:flex-col justify-between items-start sm:items-center gap-0.5 sm:gap-6 hover:!opacity-100 py-2 sm:py-1 transition-[opacity]">
                <span class="block bg-neutral-100 rounded-md w-2/5 h-5"></span>
                <span class="max-sm:hidden grow bg-neutral-100 h-px"></span>
                <span class="block bg-neutral-100 rounded-md w-20 h-4 md:h-5"></span>
              </li>
              <li class="flex max-sm:flex-col justify-between items-start sm:items-center gap-0.5 sm:gap-6 hover:!opacity-100 py-2 sm:py-1 transition-[opacity]">
                <span class="block bg-neutral-100 rounded-md w-1/4 h-5"></span>
                <span class="max-sm:hidden grow bg-neutral-100 h-px"></span>
                <span class="block bg-neutral-100 rounded-md w-12 h-4 md:h-5"></span>
              </li>
            </ul>
          <?php endif; ?>
        </li>
      <?php endforeach; ?>
    </ul>
  <?php else: ?>
    <ul class="my-6 sm:my-12">
      <li class="flex flex-col sm:gap-2 max-sm:border-b max-sm:first:border-t max-sm:border-neutral-100 py-6">
        <span class="block bg-neutral-100 rounded-md w-1/2 h-6 md:h-7 max-sm:mb-2"></span>
        <ul class="flex flex-col">
          <li class="flex max-sm:flex-col justify-between items-start sm:items-center gap-0.5 sm:gap-6 hover:!opacity-100 py-2 sm:py-1 transition-[opacity]">
            <span class="block bg-neutral-100 rounded-md w-2/5 h-5"></span>
            <span class="max-sm:hidden grow bg-neutral-100 h-px"></span>
            <span class="block bg-neutral-100 rounded-md w-20 h-4 md:h-5"></span>
          </li>
          <li class="flex max-sm:flex-col justify-between items-start sm:items-center gap-0.5 sm:gap-6 hover:!opacity-100 py-2 sm:py-1 transition-[opacity]">
            <span class="block bg-neutral-100 rounded-md w-1/4 h-5"></span>
            <span class="max-sm:hidden grow bg-neutral-100 h-px"></span>
            <span class="block bg-neutral-100 rounded-md w-12 h-4 md:h-5"></span>
          </li>
          <li class="flex max-sm:flex-col justify-between items-start sm:items-center gap-0.5 sm:gap-6 hover:!opacity-100 py-2 sm:py-1 transition-[opacity]">
            <span class="block bg-neutral-100 rounded-md w-1/3 h-5"></span>
            <span class="max-sm:hidden grow bg-neutral-100 h-px"></span>
            <span class="block bg-neutral-100 rounded-md w-24 h-4 md:h-5"></span>
          </li>
        </ul>
      </li>
      <li class="flex flex-col sm:gap-2 max-sm:border-b max-sm:first:border-t max-sm:border-neutral-100 py-6">
        <span class="block bg-neutral-100 rounded-md w-2/5 h-6 md:h-7 max-sm:mb-2"></span>
        <ul class="flex flex-col">
          <li class="flex max-sm:flex-col justify-between items-start sm:items-center gap-0.5 sm:gap-6 hover:!opacity-100 py-2 sm:py-1 transition-[opacity]">
            <span class="block bg-neutral-100 rounded-md w-1/4 h-5"></span>
            <span class="max-sm:hidden grow bg-neutral-100 h-px"></span>
            <span class="block bg-neutral-100 rounded-md w-20 h-4 md:h-5"></span>
          </li>
          <li class="flex max-sm:flex-col justify-between items-start sm:items-center gap-0.5 sm:gap-6 hover:!opacity-100 py-2 sm:py-1 transition-[opacity]">
            <span class="block bg-neutral-100 rounded-md w-1/3 h-5"></span>
            <span class="max-sm:hidden grow bg-neutral-100 h-px"></span>
            <span class="block bg-neutral-100 rounded-md w-12 h-4 md:h-5"></span>
          </li>
        </ul>
      </li>
      <li class="flex flex-col sm:gap-2 max-sm:border-b max-sm:first:border-t max-sm:border-neutral-100 py-6">
        <span class="block bg-neutral-100 rounded-md w-1/3 h-6 md:h-7 max-sm:mb-2"></span>
        <ul class="flex flex-col">
          <li class="flex max-sm:flex-col justify-between items-start sm:items-center gap-0.5 sm:gap-6 hover:!opacity-100 py-2 sm:py-1 transition-[opacity]">
            <span class="block bg-neutral-100 rounded-md w-2/5 h-5"></span>
            <span class="max-sm:hidden grow bg-neutral-100 h-px"></span>
            <span class="block bg-neutral-100 rounded-md w-24 h-4 md:h-5"></span>
          </li>
          <li class="flex max-sm:flex-col justify-between items-start sm:items-center gap-0.5 sm:gap-6 hover:!opacity-100 py-2 sm:py-1 transition-[opacity]">
            <span class="block bg-neutral-100 rounded-md w-1/4 h-5"></span>
            <span class="max-sm:hidden grow bg-neutral-100 h-px"></span>
            <span class="block bg-neutral-100 rounded-md w-12 h-4 md:h-5"></span>
          </li>
          <li class="flex max-sm:flex-col justify-between items-start sm:items-center gap-0.5 sm:gap-6 hover:!opacity-100 py-2 sm:py-1 transition-[opacity]">
            <span class="block bg-neutral-100 rounded-md w-1/3 h-5"></span>
            <span class="max-sm:hidden grow bg-neutral-100 h-px"></span>
            <span class="block bg-neutral-100 rounded-md w-20 h-4 md:h-5"></span>
          </li>
        </ul>
      </li>
    </ul>
  <?php endif; ?>
  <div class="flex max-sm:flex-col justify-center sm:items-center gap-3 lg:gap-6 mt-12">
    <a class="<?php echo get_theme_mod('home-page-pricing-first-button-color'); ?> flex justify-center items-center gap-1.5 border-2 rounded-full text-xs md:text-sm text-center font-bold px-8 py-2.5 active:scale-95 transition-[background,color,transform]" href="<?php echo get_theme_mod('home-page-pricing-first-button-url'); ?>">
      <?php if (!empty(get_theme_mod('home-page-pricing-first-button-icon'))): ?>
        <i class="ph-fill <?php echo get_theme_mod('home-page-pricing-first-button-icon') ?> text-[16px]"></i>
      <?php endif; ?>
      <?php echo get_theme_mod('home-page-pricing-first-button-text'); ?>
    </a>
    <?php if (get_theme_mod('home-page-pricing-second-button-enabled') == true): ?>
      <a class="<?php echo get_theme_mod('home-page-pricing-second-button-color'); ?> flex justify-center items-center gap-1.5 border-2  rounded-full text-xs md:text-sm text-center font-bold px-8 py-2.5 active:scale-95 transition-[background,color,transform]" href="<?php echo get_theme_mod('home-page-pricing-second-button-url'); ?>">
        <?php if (!empty(get_theme_mod('home-page-pricing-second-button-icon'))): ?>
          <i class="ph-fill <?php echo get_theme_mod('home-page-pricing-second-button-icon') ?> text-[16px]"></i>
        <?php endif; ?>
        <?php echo get_theme_mod('home-page-pricing-second-button-text'); ?>
      </a>
    <?php endif; ?>
  </div>
</section>