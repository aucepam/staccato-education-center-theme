<?php get_header(); ?>
<section class="mt-12 lg:mt-24">
  <?php
    if (have_posts()) {
      while (have_posts()) {
        the_post();
      }
    }
  ?>
</section>
<?php get_footer(); ?>