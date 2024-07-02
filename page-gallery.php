<?php get_header(); ?>
<!-- <div class="pswp-gallery pswp-gallery--single-column" id="gallery--getting-started">
  <a href="https://cdn.photoswipe.com/photoswipe-demo-images/photos/2/img-2500.jpg" 
    data-pswp-width="1669" 
    data-pswp-height="2500" 
    target="_blank">
    <img src="https://cdn.photoswipe.com/photoswipe-demo-images/photos/2/img-200.jpg" alt="" />
  </a>
</div> -->
<?php get_template_part('template-parts/gallery', 'header'); ?>
<?php get_template_part('template-parts/gallery', 'photoswipe'); ?>
<?php get_footer(); ?>