<?php
/**
 * Correctly load JS files for theme..
 */
function whq_trumps_js_scripts() {
  if (!is_admin()) {
    remove_action('wp_head', 'wp_print_scripts');
    remove_action('wp_head', 'wp_print_head_scripts', 9);
    remove_action('wp_head', 'wp_enqueue_scripts', 1);
  }
  // IE9 support for HTML5 elements.
  wp_enqueue_script('html5shiv', get_template_directory_uri() . '/public/js/html5shiv.min.js', array(), NULL, true);
  wp_script_add_data('html5shiv', 'conditional', 'lt IE 9');
  // Load in our themes custom JS file.
  wp_enqueue_script('whqtrumpsbase', get_stylesheet_directory_uri() . '/public/js/whqbase.js', array( 'jquery' ), NULL, true);
}
add_action('wp_enqueue_scripts', 'whq_trumps_js_scripts');
