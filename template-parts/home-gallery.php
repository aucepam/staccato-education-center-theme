<section id="gallery" class="2xl:w-2/3 lg:mx-auto max-lg:mx-6 lg:max-2xl:mx-12 my-12">
  <div class="flex max-sm:flex-col justify-between items-center gap-3 sm:gap-6">
    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-serif font-medium !leading-tight z-[1]">
      <?php
        echo str_replace(
          ['#', '*', '(', ')'],
          ['<br />', '<i class="ph-fill title-icon title-icon-sm ' . get_theme_mod('home-page-gallery-icon') . ' ' . get_theme_mod('home-page-gallery-icon-color') . '"></i>', '<span class="shape-outline">', '</span>'],
          get_theme_mod('home-page-gallery-title')
        );
      ?>
    </h2>
    <p class="text-sm text-neutral-500 font-medium sm:w-1/2 sm:text-right sm:text-balance">
      <?php echo get_theme_mod('home-page-gallery-subtitle'); ?>
    </p>
  </div>
  <?php
    $carousel = get_posts(array('post_type' => 'attachment', 'category_name' => 'carousel', 'numberposts' => -1));
    if (!empty($carousel)):
  ?>
    <div class="flex max-sm:flex-col gap-1.5 sm:gap-3 sm:h-[400px] lg:h-[480px] mt-12 max-sm:-mx-6">
      <?php foreach($carousel as $i => $item): ?>
        <div class="gallery-item <?php if ($i == 0): echo 'active'; endif; ?>">
          <?php if (str_starts_with(get_post_mime_type($item->ID), 'image')): ?>
            <img class="gallery-image" src="<?php echo wp_get_attachment_image_src($item->ID, 'large')[0]; ?>" />
          <?php endif; ?>
          <?php if (str_starts_with(get_post_mime_type($item->ID), 'video')): ?>
            <div class="video-wrapper" data-state="pause">
              <video class="gallery-video" loop muted>
                <source src="<?php echo wp_get_attachment_url($item->ID); ?>" />
              </video>
              <button class="video-button <?php echo get_theme_mod('home-page-gallery-player-color'); ?>">
                <i class="ph-fill ph-play video-icon icon-play"></i>
                <i class="ph-fill ph-pause video-icon icon-pause"></i>
              </button>
            </div>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </div>
  <?php else: ?>
    <div class="flex max-sm:flex-col gap-1.5 sm:gap-3 sm:h-[400px] lg:h-[480px] mt-12 max-sm:-mx-6">
      <div class="flex flex-initial justify-center items-center bg-neutral-50 sm:border border-neutral-100 sm:rounded-2xl lg:rounded-3xl sm:w-[80%] max-sm:h-48">
        <i class="ph-fill ph-play-circle block text-[48px] text-neutral-100"></i>
      </div>
      <div class="flex-initial bg-neutral-50 sm:border border-neutral-100 sm:rounded-2xl lg:rounded-3xl sm:w-[10%] max-sm:h-16"></div>
      <div class="flex-initial bg-neutral-50 sm:border border-neutral-100 sm:rounded-2xl lg:rounded-3xl sm:w-[10%] max-sm:h-16"></div>
      <div class="flex-initial bg-neutral-50 sm:border border-neutral-100 sm:rounded-2xl lg:rounded-3xl sm:w-[10%] max-sm:h-16"></div>
    </div>
  <?php endif; ?>
  <div class="flex max-sm:flex-col justify-center sm:items-center gap-3 lg:gap-6 mt-12">
    <a class="<?php echo get_theme_mod('home-page-gallery-first-button-color'); ?> flex justify-center items-center gap-1.5 border-2 rounded-full text-xs md:text-sm text-center font-bold px-8 py-2.5 active:scale-95 transition-[background,color,transform]" href="<?php echo get_theme_mod('home-page-gallery-first-button-url'); ?>">
      <?php if (!empty(get_theme_mod('home-page-gallery-first-button-icon'))): ?>
        <i class="ph-fill <?php echo get_theme_mod('home-page-gallery-first-button-icon') ?> text-[16px]"></i>
      <?php endif; ?>
      <?php echo get_theme_mod('home-page-gallery-first-button-text'); ?>
    </a>
    <?php if (get_theme_mod('home-page-gallery-second-button-enabled') == true): ?>
      <a class="<?php echo get_theme_mod('home-page-gallery-second-button-color'); ?> flex justify-center items-center gap-1.5 border-2  rounded-full text-xs md:text-sm text-center font-bold px-8 py-2.5 active:scale-95 transition-[background,color,transform]" href="<?php echo get_theme_mod('home-page-gallery-second-button-url'); ?>">
        <?php if (!empty(get_theme_mod('home-page-gallery-second-button-icon'))): ?>
          <i class="ph-fill <?php echo get_theme_mod('home-page-gallery-second-button-icon') ?> text-[16px]"></i>
        <?php endif; ?>
        <?php echo get_theme_mod('home-page-gallery-second-button-text'); ?>
      </a>
    <?php endif; ?>
  </div>
</section>