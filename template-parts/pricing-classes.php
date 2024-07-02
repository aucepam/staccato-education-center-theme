<section class="<?php echo get_theme_mod('pricing-page-classes-tabs-color'); ?>">
  <?php
    $disciplines = get_posts(array('post_type' => 'discipline', 'numberposts' => -1, 'meta_key' => '_is_pricing_page_visible', 'meta_value' => '1'));
    if (!empty($disciplines)):
  ?>
    <div class="text-center lg:text-balance max-lg:whitespace-nowrap 2xl:w-2/3 lg:mx-auto max-lg:px-6 lg:max-2xl:px-12 overflow-x-auto">
      <?php foreach ($disciplines as $i => $discipline): ?>
        <button class="tab-button <?php if ($i == 0): echo 'active'; endif; ?>" data-tab-id="<?php echo $discipline->ID; ?>">
          <?php echo $discipline->_title; ?>
        </button>
      <?php endforeach; ?>
    </div>
    <div class="bg-line bg-cover bg-top bg-no-repeat">
      <?php foreach ($disciplines as $i => $discipline): ?>
        <?php
          $pod = pods('discipline', $discipline->ID);
          $related = $pod->field(array(
            'name' => '_programs', 'params' => array(
              'where' => '_is_pricing_page_visible.meta_value = 1'
            )
          ));
        ?>
        <?php if (!empty($related)): ?>
          <div class="tab-content <?php if ($i == 0): echo 'active'; endif; ?>" data-tab-content-id="<?php echo $discipline->ID; ?>">
            <?php foreach ($related as $program): ?>
              <div class="max-md:w-full md:basis-1/2 lg:basis-1/3 px-3 lg:px-6 py-3 lg:py-6">
                <div class="<?php echo get_theme_mod('pricing-page-classes-cards-color'); ?> <?php if (get_post_meta($program['ID'], '_is_recommended', true) == '1'): echo 'bg-gradient-to-br'; endif; ?> flex flex-col gap-4 bg-white border-2 rounded-3xl h-full p-6">
                  <h5 class="text-sm text-center text-balance font-bold">
                    <?php echo get_post_meta($program['ID'], '_title', true); ?>
                  </h5>
                  <span class="text-3xl text-center font-serif">
                    <?php echo get_post_meta($program['ID'], '_price', true); ?>
                  </span>
                  <p class="text-sm text-neutral-500 text-center text-balance font-medium">
                    <?php echo get_post_meta($program['ID'], '_description', true); ?>
                  </p>
                  <?php $options = get_post_meta($program['ID'], '_options'); if (!empty($options)): ?>
                    <ul class="flex flex-col gap-2 mt-auto mb-4 pt-2">
                      <?php foreach ($options as $option): ?>
                        <li class="flex items-start gap-1.5 text-xs text-neutral-500 font-semibold">
                          <i class="<?php echo str_replace('card', 'duotone-icon', get_theme_mod('pricing-page-classes-cards-color')); ?> ph-fill ph-check-circle inline-block !bg-transparent text-[20px] -mt-0.5"></i>
                          <?php echo $option; ?>
                        </li>
                      <?php endforeach; ?>
                    </ul>
                  <?php endif; ?>
                  <a class="<?php echo str_replace('card', get_post_meta($program['ID'], '_is_recommended', true) == '1' ? 'btn' : 'btn-outline', get_theme_mod('pricing-page-classes-cards-color')); ?> border-2 rounded-full text-xs text-center font-bold mt-auto px-6 py-2 active:scale-95 transition-[background,color,transform]" href="/pricing/#feedback">
                    Записатись
                  </a>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        <?php else: ?>
          <div class="tab-content <?php if ($i == 0): echo 'active'; endif; ?>" data-tab-content-id="<?php echo $discipline->ID; ?>">
            <div class="max-md:w-full md:basis-1/2 lg:basis-1/3 px-3 lg:px-6 py-3 lg:py-6">
              <div class="flex flex-col gap-4 bg-white border-2 border-neutral-100 rounded-3xl h-full p-6">
                <span class="block bg-neutral-100 rounded-md w-2/3 h-5 mx-auto"></span>
                <span class="block bg-neutral-100 rounded-md w-1/2 h-9 mx-auto"></span>
                <span class="block bg-neutral-100 rounded-md w-full h-16"></span>
                  <ul class="flex flex-col gap-2 mt-auto mb-4 pt-2">
                    <li class="flex items-start gap-1.5">
                      <i class="ph-fill ph-check-circle inline-block text-[20px] text-neutral-200 -mt-0.5"></i>
                      <span class="block bg-neutral-100 rounded-md w-2/3 h-4"></span>
                    </li>
                    <li class="flex items-start gap-1.5">
                      <i class="ph-fill ph-check-circle inline-block text-[20px] text-neutral-200 -mt-0.5"></i>
                      <span class="block bg-neutral-100 rounded-md w-full h-4"></span>
                    </li>
                    <li class="flex items-start gap-1.5">
                      <i class="ph-fill ph-check-circle inline-block text-[20px] text-neutral-200 -mt-0.5"></i>
                      <span class="block bg-neutral-100 rounded-md w-1/2 h-4"></span>
                    </li>
                  </ul>
                <span class="bg-neutral-50 border-2 border-neutral-100 rounded-full w-full h-10"></span>
              </div>
            </div>
            <div class="max-md:w-full md:basis-1/2 lg:basis-1/3 px-3 lg:px-6 py-3 lg:py-6">
              <div class="flex flex-col gap-4 bg-white border-2 border-neutral-100 rounded-3xl h-full p-6">
                <span class="block bg-neutral-100 rounded-md w-2/3 h-5 mx-auto"></span>
                <span class="block bg-neutral-100 rounded-md w-1/2 h-9 mx-auto"></span>
                <span class="block bg-neutral-100 rounded-md w-full h-16"></span>
                  <ul class="flex flex-col gap-2 mt-auto mb-4 pt-2">
                    <li class="flex items-start gap-1.5">
                      <i class="ph-fill ph-check-circle inline-block text-[20px] text-neutral-200 -mt-0.5"></i>
                      <span class="block bg-neutral-100 rounded-md w-1/2 h-4"></span>
                    </li>
                    <li class="flex items-start gap-1.5">
                      <i class="ph-fill ph-check-circle inline-block text-[20px] text-neutral-200 -mt-0.5"></i>
                      <span class="block bg-neutral-100 rounded-md w-full h-4"></span>
                    </li>
                    <li class="flex items-start gap-1.5">
                      <i class="ph-fill ph-check-circle inline-block text-[20px] text-neutral-200 -mt-0.5"></i>
                      <span class="block bg-neutral-100 rounded-md w-2/3 h-4"></span>
                    </li>
                  </ul>
                <span class="bg-neutral-50 border-2 border-neutral-100 rounded-full w-full h-10"></span>
              </div>
            </div>
            <div class="max-md:w-full md:basis-1/2 lg:basis-1/3 px-3 lg:px-6 py-3 lg:py-6">
              <div class="flex flex-col gap-4 bg-white border-2 border-neutral-100 rounded-3xl h-full p-6">
                <span class="block bg-neutral-100 rounded-md w-2/3 h-5 mx-auto"></span>
                <span class="block bg-neutral-100 rounded-md w-1/2 h-9 mx-auto"></span>
                <span class="block bg-neutral-100 rounded-md w-full h-16"></span>
                  <ul class="flex flex-col gap-2 mt-auto mb-4 pt-2">
                    <li class="flex items-start gap-1.5">
                      <i class="ph-fill ph-check-circle inline-block text-[20px] text-neutral-200 -mt-0.5"></i>
                      <span class="block bg-neutral-100 rounded-md w-full h-4"></span>
                    </li>
                    <li class="flex items-start gap-1.5">
                      <i class="ph-fill ph-check-circle inline-block text-[20px] text-neutral-200 -mt-0.5"></i>
                      <span class="block bg-neutral-100 rounded-md w-1/2 h-4"></span>
                    </li>
                    <li class="flex items-start gap-1.5">
                      <i class="ph-fill ph-check-circle inline-block text-[20px] text-neutral-200 -mt-0.5"></i>
                      <span class="block bg-neutral-100 rounded-md w-2/3 h-4"></span>
                    </li>
                  </ul>
                <span class="bg-neutral-50 border-2 border-neutral-100 rounded-full w-full h-10"></span>
              </div>
            </div>
          </div>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
  <?php else: ?>
    <div class="text-center lg:text-balance max-lg:whitespace-nowrap 2xl:w-2/3 lg:mx-auto max-lg:px-6 lg:max-2xl:px-12 overflow-x-auto">
      <span class="inline-block bg-neutral-50 border-2 border-neutral-100 rounded-full w-20 h-7 md:h-9 m-1"></span>
      <span class="inline-block bg-neutral-50 rounded-full w-20 h-7 md:h-9 m-1"></span>
      <span class="inline-block bg-neutral-50 rounded-full w-20 h-7 md:h-9 m-1"></span>
      <span class="inline-block bg-neutral-50 rounded-full w-20 h-7 md:h-9 m-1"></span>
    </div>
    <div class="bg-line bg-cover bg-top bg-no-repeat">
      <div class="flex flex-wrap md:justify-center 2xl:w-2/3 lg:mx-auto sm:max-lg:px-6 lg:max-2xl:px-12">
        <div class="max-md:w-full md:basis-1/2 lg:basis-1/3 px-3 lg:px-6 py-3 lg:py-6">
          <div class="flex flex-col gap-4 bg-white border-2 border-neutral-100 rounded-3xl h-full p-6">
            <span class="block bg-neutral-100 rounded-md w-2/3 h-5 mx-auto"></span>
            <span class="block bg-neutral-100 rounded-md w-1/2 h-9 mx-auto"></span>
            <span class="block bg-neutral-100 rounded-md w-full h-16"></span>
              <ul class="flex flex-col gap-2 mt-auto mb-4 pt-2">
                <li class="flex items-start gap-1.5">
                  <i class="ph-fill ph-check-circle inline-block text-[20px] text-neutral-200 -mt-0.5"></i>
                  <span class="block bg-neutral-100 rounded-md w-2/3 h-4"></span>
                </li>
                <li class="flex items-start gap-1.5">
                  <i class="ph-fill ph-check-circle inline-block text-[20px] text-neutral-200 -mt-0.5"></i>
                  <span class="block bg-neutral-100 rounded-md w-full h-4"></span>
                </li>
                <li class="flex items-start gap-1.5">
                  <i class="ph-fill ph-check-circle inline-block text-[20px] text-neutral-200 -mt-0.5"></i>
                  <span class="block bg-neutral-100 rounded-md w-1/2 h-4"></span>
                </li>
              </ul>
            <span class="bg-neutral-50 border-2 border-neutral-100 rounded-full w-full h-10"></span>
          </div>
        </div>
        <div class="max-md:w-full md:basis-1/2 lg:basis-1/3 px-3 lg:px-6 py-3 lg:py-6">
          <div class="flex flex-col gap-4 bg-white border-2 border-neutral-100 rounded-3xl h-full p-6">
            <span class="block bg-neutral-100 rounded-md w-2/3 h-5 mx-auto"></span>
            <span class="block bg-neutral-100 rounded-md w-1/2 h-9 mx-auto"></span>
            <span class="block bg-neutral-100 rounded-md w-full h-16"></span>
              <ul class="flex flex-col gap-2 mt-auto mb-4 pt-2">
                <li class="flex items-start gap-1.5">
                  <i class="ph-fill ph-check-circle inline-block text-[20px] text-neutral-200 -mt-0.5"></i>
                  <span class="block bg-neutral-100 rounded-md w-1/2 h-4"></span>
                </li>
                <li class="flex items-start gap-1.5">
                  <i class="ph-fill ph-check-circle inline-block text-[20px] text-neutral-200 -mt-0.5"></i>
                  <span class="block bg-neutral-100 rounded-md w-full h-4"></span>
                </li>
                <li class="flex items-start gap-1.5">
                  <i class="ph-fill ph-check-circle inline-block text-[20px] text-neutral-200 -mt-0.5"></i>
                  <span class="block bg-neutral-100 rounded-md w-2/3 h-4"></span>
                </li>
              </ul>
            <span class="bg-neutral-50 border-2 border-neutral-100 rounded-full w-full h-10"></span>
          </div>
        </div>
        <div class="max-md:w-full md:basis-1/2 lg:basis-1/3 px-3 lg:px-6 py-3 lg:py-6">
          <div class="flex flex-col gap-4 bg-white border-2 border-neutral-100 rounded-3xl h-full p-6">
            <span class="block bg-neutral-100 rounded-md w-2/3 h-5 mx-auto"></span>
            <span class="block bg-neutral-100 rounded-md w-1/2 h-9 mx-auto"></span>
            <span class="block bg-neutral-100 rounded-md w-full h-16"></span>
              <ul class="flex flex-col gap-2 mt-auto mb-4 pt-2">
                <li class="flex items-start gap-1.5">
                  <i class="ph-fill ph-check-circle inline-block text-[20px] text-neutral-200 -mt-0.5"></i>
                  <span class="block bg-neutral-100 rounded-md w-full h-4"></span>
                </li>
                <li class="flex items-start gap-1.5">
                  <i class="ph-fill ph-check-circle inline-block text-[20px] text-neutral-200 -mt-0.5"></i>
                  <span class="block bg-neutral-100 rounded-md w-1/2 h-4"></span>
                </li>
                <li class="flex items-start gap-1.5">
                  <i class="ph-fill ph-check-circle inline-block text-[20px] text-neutral-200 -mt-0.5"></i>
                  <span class="block bg-neutral-100 rounded-md w-2/3 h-4"></span>
                </li>
              </ul>
            <span class="bg-neutral-50 border-2 border-neutral-100 rounded-full w-full h-10"></span>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
</section>