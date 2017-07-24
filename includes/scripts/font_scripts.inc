<?php
// @import url(https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700);

/**
 * Correctly load in custom external fonts.
 */
function whq_trumps_font_scripts() {
  $google_query_args = array(
    'family' => 'Roboto+Slab:300,400,700'
  );
  wp_register_style('google_fonts', add_query_arg($google_query_args, '//fonts.googleapis.com/css'), array(), NULL);
}
add_action('wp_enqueue_scripts', 'whq_trumps_scripts');
