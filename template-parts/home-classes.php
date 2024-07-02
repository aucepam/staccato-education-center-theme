<section id="classes" class="bg-gradient-to-b from-white to-sky-50 border-b border-sky-100 mt-12 lg:mt-24 pb-6 lg:pb-12">
  <div class="flex flex-col gap-6 2xl:w-2/3 lg:mx-auto max-lg:mx-6 lg:max-2xl:mx-12">
    <h2 class="text-2xl sm:text-3xl lg:text-4xl sm:text-center font-serif font-medium !leading-tight z-[1]">
      <?php
        echo str_replace(
          ['#', '*', '(', ')'],
          ['<br />', '<i class="ph-fill title-icon title-icon-sm ' . get_theme_mod('home-page-classes-icon') . ' ' . get_theme_mod('home-page-classes-icon-color') . '"></i>', '<span class="shape-outline">', '</span>'],
          get_theme_mod('home-page-classes-title')
        );
      ?>
    </h2>
    <p class="text-sm lg:text-base text-neutral-500 sm:text-center font-medium -mt-4 z-[1]">
      <?php echo str_replace(
        ['#', '(', ')'],
        ['<br />', '<span class="shape-underline">', '</span>'],
        get_theme_mod('home-page-classes-subtitle')
      );
    ?>
    </p>
    <?php
      $disciplines = get_posts(array('post_type' => 'discipline', 'numberposts' => -1, 'meta_key' => '_is_classes_section_visible', 'meta_value' => '1'));
      if (!empty($disciplines)):
    ?>
      <div class="grid md:grid-cols-2 sm:gap-3 lg:gap-6 2xl:gap-12 max-sm:-mx-6 my-6">
        <div class="relative bg-neutral-50 sm:rounded-2xl lg:rounded-3xl max-lg:aspect-video lg:min-h-96 max-h-[50vh] overflow-hidden">
          <div class="carousel-wrapper">
            <?php foreach ($disciplines as $discipline): ?>
              <?php if (!empty($discipline->_image)): ?>
                <img class="relative shrink-0 w-full h-full bg-neutral-50 object-cover object-center" src="<?php echo wp_get_attachment_image_src($discipline->_image, 'large')[0]; ?>" />
              <?php else: ?>
                <div class="<?php echo str_replace('card', 'duotone-icon', get_theme_mod('home-page-classes-card-color')); ?> relative flex justify-center items-center shrink-0 w-full h-full max-h-[50vh]">
                  <i class="ph-fill ph-image block text-[48px]"></i>
                </div>
              <?php endif; ?>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="<?php echo get_theme_mod('home-page-classes-card-color'); ?> flex flex-col sm:bg-gradient-to-br sm:border sm:rounded-2xl lg:rounded-3xl px-6 pt-2 sm:pb-6">
          <?php foreach ($disciplines as $i => $discipline): ?>      
            <div class="disclosure-item <?php if ($i == 0): echo 'active'; endif; ?>" data-slide-id="<?php echo $i; ?>">
              <div class="flex justify-between items-center gap-2">
                <span class="text-lg font-bold">
                  <?php echo $discipline->_title; ?>
                </span>
                <i class="ph-bold ph-arrow-down-right disclosure-icon"></i>
              </div>
              <?php if (!empty($discipline->_description)): ?>
                <p class="disclosure-content">
                  <?php echo $discipline->_description; ?>
                </p>
              <?php endif; ?>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    <?php else: ?>
      <div class="grid md:grid-cols-2 sm:gap-3 lg:gap-6 2xl:gap-12 max-sm:-mx-6 my-6">
        <div class="flex justify-center items-center bg-neutral-50 border border-neutral-100 sm:rounded-2xl lg:rounded-3xl max-lg:aspect-video lg:min-h-96 overflow-hidden">
          <i class="ph-fill ph-image block text-[48px] text-neutral-100"></i>
        </div>
        <div class="flex flex-col bg-neutral-50 sm:border border-neutral-100 sm:rounded-2xl lg:rounded-3xl px-6 pt-2 sm:pb-6">
          <div class="flex flex-col gap-2 border-b-2 border-neutral-100 py-4">
            <div class="flex justify-between items-center gap-2">
              <span class="block bg-neutral-100 rounded-md w-2/3 h-7"></span>
              <i class="ph-bold ph-arrow-down-right block text-[24px] text-neutral-300 -rotate-90"></i>
            </div>
            <span class="block bg-neutral-100 rounded-md w-full h-20"></span>
          </div>
          <div class="flex flex-col gap-2 border-b-2 border-neutral-100 py-4">
            <div class="flex justify-between items-center gap-2">
              <span class="block bg-neutral-100 rounded-md w-3/4 h-7"></span>
              <i class="ph-bold ph-arrow-down-right block text-[24px] text-neutral-300"></i>
            </div>
          </div>
          <div class="flex flex-col gap-2 border-b-2 border-neutral-100 py-4">
            <div class="flex justify-between items-center gap-2">
              <span class="block bg-neutral-100 rounded-md w-2/5 h-7"></span>
              <i class="ph-bold ph-arrow-down-right block text-[24px] text-neutral-300"></i>
            </div>
          </div>
          <div class="flex flex-col gap-2 border-b-2 border-neutral-100 py-4">
            <div class="flex justify-between items-center gap-2">
              <span class="block bg-neutral-100 rounded-md w-3/5 h-7"></span>
              <i class="ph-bold ph-arrow-down-right block text-[24px] text-neutral-300"></i>
            </div>
          </div>
          <div class="flex flex-col gap-2 border-b-2 border-neutral-100 py-4">
            <div class="flex justify-between items-center gap-2">
              <span class="block bg-neutral-100 rounded-md w-2/3 h-7"></span>
              <i class="ph-bold ph-arrow-down-right block text-[24px] text-neutral-300"></i>
            </div>
          </div>
          <div class="flex flex-col gap-2 border-b-2 border-neutral-100 py-4">
            <div class="flex justify-between items-center gap-2">
              <span class="block bg-neutral-100 rounded-md w-1/2 h-7"></span>
              <i class="ph-bold ph-arrow-down-right block text-[24px] text-neutral-300"></i>
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>
    <div class="flex max-sm:flex-col justify-center sm:items-center gap-3 lg:gap-6">
      <a class="<?php echo get_theme_mod('home-page-classes-first-button-color'); ?> flex justify-center items-center gap-1.5 border-2 rounded-full text-xs md:text-sm text-center font-bold px-8 py-2.5 active:scale-95 transition-[background,color,transform]" href="<?php echo get_theme_mod('home-page-classes-first-button-url'); ?>">
        <?php if (!empty(get_theme_mod('home-page-classes-first-button-icon'))): ?>
          <i class="ph-fill <?php echo get_theme_mod('home-page-classes-first-button-icon') ?> text-[16px]"></i>
        <?php endif; ?>
        <?php echo get_theme_mod('home-page-classes-first-button-text'); ?>
      </a>
      <?php if (get_theme_mod('home-page-classes-second-button-enabled') == true): ?>
        <a class="<?php echo get_theme_mod('home-page-classes-second-button-color'); ?> flex justify-center items-center gap-1.5 border-2  rounded-full text-xs md:text-sm text-center font-bold px-8 py-2.5 active:scale-95 transition-[background,color,transform]" href="<?php echo get_theme_mod('home-page-classes-second-button-url'); ?>">
          <?php if (!empty(get_theme_mod('home-page-classes-second-button-icon'))): ?>
            <i class="ph-fill <?php echo get_theme_mod('home-page-classes-second-button-icon') ?> text-[16px]"></i>
          <?php endif; ?>
          <?php echo get_theme_mod('home-page-classes-second-button-text'); ?>
        </a>
      <?php endif; ?>
    </div>
  </div>
</section>