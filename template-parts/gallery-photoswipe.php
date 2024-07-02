<section class="<?php echo get_theme_mod('gallery-page-media-tabs-color'); ?>">
  <?php $parent_category = get_category_by_slug('gallery'); if ($parent_category): ?>
    <?php if (get_theme_mod('gallery-page-media-is-tabs-enabled') == '1'): ?>
      <?php
        $folders = get_categories(array(
          'taxonomy' => 'category',
          'parent' => $parent_category->term_id,
          'hide_empty' => get_theme_mod('gallery-page-media-is-empty-enabled') == '1' ? false : true
        ));

        if (!empty($folders) && !is_wp_error($folders)):
          $folders = array_values($folders);
      ?>
        <div class="text-center lg:text-balance max-lg:whitespace-nowrap 2xl:w-2/3 lg:mx-auto max-lg:px-6 lg:max-2xl:px-12 overflow-x-auto">
          <?php foreach ($folders as $i => $folder): ?>
            <?php $is_active = isset($_GET['folder']) ? $_GET['folder'] == $folder->term_id : $i == 0; ?>
            <a
              class="inline-block tab-button <?php echo $is_active ? 'active' : ''; ?>"
              href="/gallery/?folder=<?php echo esc_html($folder->term_id); ?>"
            >
              <?php echo $folder->name; ?>
            </a>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    <?php endif; ?>
    <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $posts_per_page = get_theme_mod('gallery-page-media-count') ? get_theme_mod('gallery-page-media-count') : 34;
      $default_category_id = get_category_by_slug('gallery')->term_id;

      if (get_theme_mod('gallery-page-media-is-tabs-enabled') == '1') {
        $category = isset($_GET['folder'])
          ? $_GET['folder']
          : (
            !empty($folders)
              ? $folders[0]->term_id
              : $default_category_id
          );
      } else {
        $category = $default_category_id;
      }

      $media_query = new WP_Query(array(
        'post_type' => 'attachment',
        'cat' => $category,
        'posts_per_page' => $posts_per_page,
        'post_status' => 'inherit',
        'paged' => $paged
      ));

      if ($media_query->have_posts()):
    ?>
      <div id="pswp-gallery" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 xl:grid-cols-5 gap-2 sm:gap-3 md:gap-4 xl:gap-6 2xl:w-2/3 lg:mx-auto max-lg:mx-6 lg:max-2xl:mx-12 my-12">
        <?php while ($media_query->have_posts()): $media_query->the_post(); ?>
          <?php
            $mime_type = get_post_mime_type(get_the_ID());
            $is_image = str_starts_with($mime_type, 'image');
            $is_video = str_starts_with($mime_type, 'video');

            if ($is_image || $is_video):
              $attachment_url = wp_get_attachment_url(get_the_ID());

              if ($is_image) {
                $image_data = wp_get_attachment_image_src(get_the_ID(), 'full');
                $medium_thumbnail = wp_get_attachment_image_src(get_the_ID(), 'medium');
              } else {
                $video_metadata = wp_get_attachment_metadata(get_the_ID());
              }
          ?>
            <a 
              class="<?php echo $is_video ? 'relative' : ''; ?>"
              href="<?php echo $attachment_url; ?>"
              data-pswp-width="<?php echo $is_image ? $image_data[1] : $video_metadata['width']; ?>"
              data-pswp-height="<?php echo $is_image ? $image_data[2] : $video_metadata['height']; ?>"
              data-pswp-is-video="<?php echo $is_video ? 'true' : 'false'; ?>"
              data-cropped="true"
              target="_blank"
            >
              <?php if ($is_image): ?>
                <img
                  class="bg-neutral-50 rounded-lg sm:rounded-xl md:rounded-2xl w-full aspect-square object-cover object-center"
                  src="<?php echo $medium_thumbnail[0]; ?>"
                  width="<?php echo $medium_thumbnail[1]; ?>"
                  height="<?php echo $medium_thumbnail[2]; ?>"
                />
              <?php elseif ($is_video): ?>
                <span class="<?php echo get_theme_mod('gallery-page-media-video-color'); ?> absolute rounded-full left-3 bottom-3 p-2 drop-shadow">
                  <i class="ph-fill ph-play block text-[16px]"></i>
                </span>
                <video class="bg-neutral-50 rounded-lg sm:rounded-xl md:rounded-2xl w-full aspect-square object-cover object-center" muted>
                  <source src="<?php echo $attachment_url; ?>" />
                </video>
              <?php endif; ?>
            </a>
          <?php endif; ?>
        <?php endwhile; ?>
      </div>
      <?php
        $pagination_links = paginate_links(array(
          'total' => $media_query->max_num_pages,
          'current' => $paged,
          'format' => '?paged=%#%',
          'show_all' => false,
          'prev_text' => __('<span class="pagination-button"><i class="ph-bold ph-arrow-left"></i></span>'),
          'next_text' => __('<span class="pagination-button"><i class="ph-bold ph-arrow-right"></i></span>'),
          'before_page_number' => '<span class="pagination-button">',
          'after_page_number' => '</span>'
        ));

        if ($pagination_links):
      ?>
        <div class="pagination-wrapper <?php echo get_theme_mod('gallery-page-media-pagination-color'); ?>">
          <?php echo $pagination_links; ?>
        </div>
      <?php endif; ?>
    <?php else: ?>
      <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 xl:grid-cols-5 gap-2 sm:gap-3 md:gap-4 xl:gap-6 2xl:w-2/3 lg:mx-auto max-lg:mx-6 lg:max-2xl:mx-12 my-12">
        <div class="flex justify-center items-center bg-neutral-50 border border-neutral-100 rounded-lg sm:rounded-xl md:rounded-2xl w-full aspect-square">
          <i class="ph-fill ph-image block text-[48px] text-neutral-100"></i>
        </div>
        <div class="flex justify-center items-center bg-neutral-50 border border-neutral-100 rounded-lg sm:rounded-xl md:rounded-2xl w-full aspect-square">
          <i class="ph-fill ph-image block text-[48px] text-neutral-100"></i>
        </div>
        <div class="flex justify-center items-center bg-neutral-50 border border-neutral-100 rounded-lg sm:rounded-xl md:rounded-2xl w-full aspect-square">
          <i class="ph-fill ph-image block text-[48px] text-neutral-100"></i>
        </div>
        <div class="flex justify-center items-center bg-neutral-50 border border-neutral-100 rounded-lg sm:rounded-xl md:rounded-2xl w-full aspect-square">
          <i class="ph-fill ph-image block text-[48px] text-neutral-100"></i>
        </div>
        <div class="flex justify-center items-center bg-neutral-50 border border-neutral-100 rounded-lg sm:rounded-xl md:rounded-2xl w-full aspect-square">
          <i class="ph-fill ph-image block text-[48px] text-neutral-100"></i>
        </div>
      </div>
    <?php endif; wp_reset_postdata(); ?>
  <?php else: ?>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 xl:grid-cols-5 gap-2 sm:gap-3 md:gap-4 xl:gap-6 2xl:w-2/3 lg:mx-auto max-lg:mx-6 lg:max-2xl:mx-12 my-12">
      <div class="flex justify-center items-center bg-neutral-50 border border-neutral-100 rounded-lg sm:rounded-xl md:rounded-2xl w-full aspect-square">
        <i class="ph-fill ph-image block text-[48px] text-neutral-100"></i>
      </div>
      <div class="flex justify-center items-center bg-neutral-50 border border-neutral-100 rounded-lg sm:rounded-xl md:rounded-2xl w-full aspect-square">
        <i class="ph-fill ph-image block text-[48px] text-neutral-100"></i>
      </div>
      <div class="flex justify-center items-center bg-neutral-50 border border-neutral-100 rounded-lg sm:rounded-xl md:rounded-2xl w-full aspect-square">
        <i class="ph-fill ph-image block text-[48px] text-neutral-100"></i>
      </div>
      <div class="flex justify-center items-center bg-neutral-50 border border-neutral-100 rounded-lg sm:rounded-xl md:rounded-2xl w-full aspect-square">
        <i class="ph-fill ph-image block text-[48px] text-neutral-100"></i>
      </div>
      <div class="flex justify-center items-center bg-neutral-50 border border-neutral-100 rounded-lg sm:rounded-xl md:rounded-2xl w-full aspect-square">
        <i class="ph-fill ph-image block text-[48px] text-neutral-100"></i>
      </div>
    </div>
  <?php endif; ?>
</section>