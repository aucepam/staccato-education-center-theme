<span class="block bg-divider bg-contain bg-center bg-no-repeat 2xl:w-2/3 h-8 lg:mx-auto sm:max-lg:mx-6 lg:max-2xl:mx-12 mt-6 md:mt-12"></span>
<section id="feedback" class="2xl:gap-12 2xl:w-2/3 lg:mx-auto max-lg:mx-6 lg:max-2xl:mx-12 mt-6 md:mt-12">
  <div class="text-center">
    <h2 class="text-xl sm:text-2xl md:text-4xl font-serif font-medium">
      <?php
        echo str_replace(
          ['#', '*', '(', ')'],
          ['<br />', '<i class="ph-fill !bg-transparent align-middle px-1 opacity-50 ' . get_theme_mod('home-page-feedback-icon') . ' ' . get_theme_mod('home-page-feedback-icon-color') . '"></i>', '<span class="shape-outline">', '</span>'],
          get_theme_mod('home-page-feedback-title')
        );
      ?>
    </h2>
    <p class="text-sm md:text-base text-neutral-500 font-medium md:w-2/3 mx-auto mt-2 md:mt-4">
      <?php echo str_replace('#', '<br />', get_theme_mod('home-page-feedback-subtitle')); ?>
    </p>
  </div>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 sm:gap-3 lg:gap-6 2xl:gap-12 mt-6 md:mt-12 max-sm:-mx-6">
    <div class="<?php echo get_theme_mod('home-page-feedback-card-color') ?> lg:col-span-2 bg-gradient-to-br border-y sm:border sm:rounded-3xl p-6">
      <form id="contact-form" class="flex flex-col gap-6" action="<?php echo esc_url(admin_url('admin-post.php')) ?>" method="post">
        <input type="hidden" name="action" value="send_message" />
        <div>
          <label class="block text-xs text-neutral-400 font-bold tracking-wider uppercase mb-1" for="name">
            Ваше ім'я
          </label>
          <input class="<?php echo str_replace('card', 'input', get_theme_mod('home-page-feedback-card-color')); ?> bg-white autofill-none border-2 focus:outline-none focus:ring-4 rounded-xl text-sm placeholder:text-neutral-400 font-semibold w-full px-4 py-3 disabled:opacity-50 transition-[background,border-color,opacity,box-shadow] disabled:cursor-not-allowed" id="name" name="name" type="text" minlength="2" maxlength="32" placeholder="Введіть ваше ім'я" required />
        </div>
        <div>
          <label class="block text-xs text-neutral-400 font-bold tracking-wider uppercase mb-1" for="phone">
            Ваш телефон
          </label>
          <input class="<?php echo str_replace('card', 'input', get_theme_mod('home-page-feedback-card-color')); ?> bg-white autofill-none border-2 focus:outline-none focus:ring-4 rounded-xl text-sm placeholder:text-neutral-400 font-semibold w-full px-4 py-3 disabled:opacity-50 transition-[background,border-color,opacity,box-shadow] disabled:cursor-not-allowed" id="phone" name="phone" type="text" inputmode="tel" minlength="10" maxlength="32" placeholder="Введіть ваш телефон" required />
        </div>
        <div>
          <label class="block text-xs text-neutral-400 font-bold tracking-wider uppercase mb-1" for="message">
            Ваше повідомлення
          </label>
          <textarea class="<?php echo str_replace('card', 'input', get_theme_mod('home-page-feedback-card-color')); ?> bg-white autofill-none border-2 focus:outline-none focus:ring-4 rounded-xl text-sm placeholder:text-neutral-400 font-semibold w-full min-h-40 px-4 py-3 disabled:opacity-50 transition-[background,border-color,opacity,box-shadow] disabled:cursor-not-allowed resize-none" id="message" name="message" minlength="8" maxlength="1000" placeholder="Введіть ваше повідомлення" required></textarea>
        </div>
        <div class="cf-turnstile bg-white h-[65px] [&>iframe]:!w-full" data-sitekey="<?php echo sanitize_text_field(get_theme_mod('services-cloudflare-turnstile-sitekey')); ?>" data-theme="light" data-language="uk"></div>
        <button class="<?php echo str_replace('card', 'btn', get_theme_mod('home-page-feedback-card-color')); ?> flex justify-center items-center gap-1.5 border-2 rounded-full text-xs md:text-sm text-center font-bold mt-auto px-8 py-2.5 active:scale-95 disabled:opacity-50 transition-[background,color,transform,opacity] disabled:cursor-not-allowed" type="submit" name="submit" value="send">
          Надіслати
        </button>
      </form>
    </div>
    <div class="relative lg:col-span-3 bg-neutral-50 sm:rounded-2xl lg:rounded-3xl md:rounded-bl-[150px] lg:rounded-bl-[200px] max-md:h-[50vh] md:h-full lg:min-h-96 overflow-hidden [&>iframe]:absolute [&>iframe]:w-full [&>iframe]:h-full">
      <?php echo get_theme_mod('services-google-map'); ?>
    </div>
  </div>
</section>