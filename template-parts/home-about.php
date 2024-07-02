<section id="about" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-3 lg:gap-6 2xl:gap-12 2xl:w-2/3 lg:mx-auto sm:max-lg:mx-6 lg:max-2xl:mx-12">
  <div class="<?php echo get_theme_mod('home-page-about-first-card-color'); ?> relative flex flex-col justify-end items-start gap-1.5 lg:gap-3 lg:col-span-3 bg-gradient-to-br border-y sm:border sm:rounded-3xl max-md:mt-[29px] p-6 max-md:pt-12">
    <?php if (!empty(get_theme_mod('home-page-about-first-card-icon'))): ?>
      <span class="<?php echo str_replace('card', 'duotone-icon', get_theme_mod('home-page-about-first-card-color')) ?> max-md:absolute md:max-lg:!bg-transparent md:max-lg:border-none max-lg:border rounded-full max-md:top-0 max-md:left-1/2 mb-auto p-3 md:max-lg:p-0 max-md:-translate-x-1/2 max-md:-translate-y-1/2">
        <i class="<?php echo get_theme_mod('home-page-about-first-card-icon') ?> ph-fill block text-[32px]"></i>
      </span>
    <?php endif; ?>
    <h2 class="text-lg lg:text-3xl font-bold md:max-lg:mt-2">
      <?php echo get_theme_mod('home-page-about-first-card-title'); ?>
    </h2>
    <?php if (!empty(get_theme_mod('home-page-about-first-card-subtitle'))): ?>
      <p class="text-sm lg:text-base text-neutral-500 font-medium">
        <?php echo get_theme_mod('home-page-about-first-card-subtitle'); ?>
      </p>
    <?php endif; ?>
    <?php if (!empty(get_theme_mod('home-page-about-first-card-tags'))): ?>
      <ul class="flex flex-wrap items-center gap-2 mt-2">
        <?php foreach (explode(';', get_theme_mod('home-page-about-first-card-tags')) as $hashtag): ?>
          <li class="card-list-item max-sm:grow border rounded-lg text-xs text-center font-semibold px-2 py-1">
            #<?php echo trim($hashtag); ?>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
  </div>
  <div class="relative lg:col-span-2 bg-neutral-50 border border-neutral-100 rounded-2xl lg:rounded-3xl md:rounded-bl-[150px] lg:rounded-bl-[200px] max-md:aspect-video md:h-full lg:min-h-96 max-sm:mx-3 sm:max-lg:mx-0 overflow-hidden">
    <?php if (get_theme_mod('home-page-about-first-card-image')): ?>
      <img class="w-full h-full object-cover object-center" src="<?php echo wp_get_attachment_image_src(get_theme_mod('home-page-about-first-card-image'), 'large')[0]; ?>" />
    <?php endif; ?>
  </div>
  <div class="relative max-md:order-last lg:col-span-2 bg-neutral-50 border border-neutral-100 rounded-2xl lg:rounded-3xl md:rounded-tr-[150px] lg:rounded-tr-[200px] max-md:aspect-video md:h-full lg:min-h-96 max-sm:mx-3 sm:max-lg:mx-0 overflow-hidden">
    <?php if (get_theme_mod('home-page-about-second-card-image')): ?>
      <img class="w-full h-full object-cover object-center" src="<?php echo wp_get_attachment_image_src(get_theme_mod('home-page-about-second-card-image'), 'large')[0]; ?>" />
    <?php endif; ?>
  </div>
  <div class="<?php echo get_theme_mod('home-page-about-second-card-color'); ?> relative flex flex-col justify-end items-start gap-1.5 lg:gap-3 lg:col-span-3 bg-gradient-to-br border-y sm:border sm:rounded-3xl max-md:mt-[29px] p-6 max-md:pt-12">
    <?php if (!empty(get_theme_mod('home-page-about-second-card-icon'))): ?>
      <span class="<?php echo str_replace('card', 'duotone-icon', get_theme_mod('home-page-about-second-card-color')) ?> max-md:absolute md:max-lg:!bg-transparent md:max-lg:border-none max-lg:border rounded-full max-md:top-0 max-md:left-1/2 mb-auto  md:max-lg:ml-auto p-3 md:max-lg:p-0 max-md:-translate-x-1/2 max-md:-translate-y-1/2">
        <i class="<?php echo get_theme_mod('home-page-about-second-card-icon') ?> ph-fill block text-[32px]"></i>
      </span>
    <?php endif; ?>
    <?php
      $teachers = get_posts(array('post_type' => 'attachment', 'category_name' => 'teachers', 'numberposts' => -1));
      if (!empty($teachers)):
    ?>
      <div class="flex -space-x-4">
        <?php foreach ($teachers as $teacher_image): ?>
          <img class="border-2 border-white rounded-full object-cover" src="<?php echo wp_get_attachment_image_src($teacher_image->ID, 'thumbnail')[0]; ?>" width="40" height="40" />
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
    <h2 class="text-lg lg:text-3xl font-bold md:max-lg:mt-2">
      <?php echo get_theme_mod('home-page-about-second-card-title'); ?>
    </h2>
    <?php if (!empty(get_theme_mod('home-page-about-second-card-subtitle'))): ?>
      <p class="text-sm lg:text-base text-neutral-500 font-medium">
        <?php echo get_theme_mod('home-page-about-second-card-subtitle'); ?>
      </p>
    <?php endif; ?>
    <ul class="flex flex-wrap items-center gap-2 mt-2">
      <?php
        $socials = array(
          'instagram', 'facebook', 'telegram', 'whatsapp',
          'x', 'youtube', 'tiktok', 'linkedin', 'linktree',
          'mastodon', 'messenger', 'threads', 'snapchat', 'tumblr'
        );

        foreach ($socials as $social):
      ?>
        <?php if (!empty(get_theme_mod('contacts-social-' . $social))): ?>
          <li>
            <a class="card-list-item block border rounded-lg p-1.5 active:scale-95 transition-[background,transform]" href="<?php echo get_theme_mod('contacts-social-' . $social); ?>" rel="noopener noreferrer" target="_blank">
              <i class="ph-fill <?php echo 'ph-' . $social . '-logo'; ?> block text-[20px]"></i>
            </a>
          </li>
        <?php endif; ?>
      <?php endforeach; ?>
    </ul>
  </div>
</section>