<?php

// Includes
require_once('includes/scripts/post_thumbs.inc');
require_once('includes/scripts/font_scripts.inc');
require_once('includes/scripts/js_scripts.inc');

/**
 * Theme setup. (Register global settings)
 */
function whq_trumps_theme() {
  // Make sure our theme supports the title tag. WP 4.1+
  add_theme_support( 'title-tag' );
  // Register primary nav.
  register_nav_menus([
      'primary-menu' => __( 'Primary Menu' ),
    ]
  );
}
add_action('after_setup_theme', 'whq_trumps_theme');
