  </main>
  <span class="block bg-divider-wavy bg-contain bg-center bg-no-repeat 2xl:w-2/3 h-8 lg:mx-auto sm:max-lg:mx-6 lg:max-2xl:mx-12 mt-6 md:mt-12"></span>
  <section id="contacts" class="2xl:w-2/3 lg:mx-auto max-lg:mx-6 lg:max-2xl:mx-12 my-6 md:my-12 mx-auto">
    <div class="flex max-md:flex-col-reverse justify-between gap-6">
      <?php foreach(array('phone', 'email', 'address') as $contact): ?>
        <?php if (get_theme_mod('contacts-direct-' . $contact)): ?>
          <div class="w-full text-balance sm:text-center md:only:text-center md:first:text-left md:last:text-right md:only:mx-auto">
            <p class="text-xs text-neutral-500 font-bold tracking-wider uppercase">
              <?php echo str_replace(['phone', 'email', 'address'], ['Наш телефон', 'Наш email', 'Наша адреса'], $contact) ?>
            </p>
            <a
              class="border-b-2 border-transparent hover:border-blue-200 max-md:text-sm font-serif font-medium pb-1 transition-[border-color]"
              href="<?php echo str_replace(['phone', 'email', 'address'], ['tel:', 'mailto:', 'https://maps.google.com/?q='], $contact) . get_theme_mod('contacts-direct-' . $contact); ?>"
              rel="noopener noreferrer"
              target="_blank"
            >
              <?php echo get_theme_mod('contacts-direct-' . $contact); ?>
            </a>
          </div>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
    <ul class="flex flex-wrap justify-start md:justify-center items-center gap-4 mt-6 md:mt-12">
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
            <a
              class="<?php echo get_theme_mod('footer-social-icon-color') ?> block border rounded-lg !text-neutral-800 p-1.5 active:scale-95 transition-[background,transform]"
              href="<?php echo get_theme_mod('contacts-social-' . $social); ?>"
              rel="noopener noreferrer"
              target="_blank"
            >
              <i class="ph-fill <?php echo 'ph-' . $social . '-logo'; ?> block text-[20px]"></i>
            </a>
          </li>
        <?php endif; ?>
      <?php endforeach; ?>
    </ul>
  </section>
  <footer id="footer" class="border-t border-neutral-50 py-3">
    <div class="flex max-lg:flex-col justify-between lg:items-center gap-3 2xl:w-2/3 lg:mx-auto md:max-lg:mx-6 lg:max-2xl:mx-12">
      <div class="w-full overflow-hidden">
        <?php
          wp_nav_menu([
            'theme_location' => 'footer',
            'container' => false,
            'menu_class' => 'flex items-center gap-12 max-lg:px-6 overflow-x-auto'
          ]);
        ?>
      </div>
      <small class="text-xs text-neutral-500 font-medium whitespace-nowrap max-lg:px-6">
        &copy; <?php echo date('Y'); ?>. Всі права захищені.
      </small>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>