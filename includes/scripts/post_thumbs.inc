<?php
/*
 * Add post thumbnail support.
 */
if (function_exists('add_theme_support')) {
  add_theme_support('post-thumbnails');
  set_post_thumbnail_size(150, 150, true);
  // Register custom image sizes.
  add_image_size('page_header', 1200, 370, ['center', 'center'] );
}
