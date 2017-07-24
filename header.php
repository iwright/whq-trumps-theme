<?php
/**
 * Header
 */
?>
<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="ie ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!--><html <?php language_attributes(); ?>><!--<![endif]-->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php if (is_front_page() && is_home()): ?>
    <title>Welcome to WHQ Trumps</title>
  <?php else:
    if (!function_exists('_wp_render_title_tag')):
      function whq_trumps_render_title() { ?>
        <title><?php wp_title( '|', true, 'right' ); ?></title>
      <?php
      }
      add_action( 'wp_head', 'whq_trumps_render_title' );
    endif;
  endif; ?>
  <link rel="stylesheet" href="<?php print get_template_directory_uri(); ?>/public/css/global.css" />
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php wp_head(); ?>
</head>

<?php
// Global site vars.
$blog_title = get_bloginfo('name');
$blog_description = get_bloginfo('description');
?>

<body <?php body_class(); ?>>

<header class="header header--sticky">
  <div class="layout-container header-inner flex">
    <div class="header-group">
      <h1><?php print $blog_title; ?></h1>
    </div>
    <div class="header-group">
      <nav class="nav nav--primary">
        <?php
        // Primary menu attributes.
        $primary_menu_args = [
          'theme_location' => 'primary-menu',
          'container' => false,
          'menu_class' => 'primary-nav list--plain'
        ];
        wp_nav_menu($primary_menu_args); ?>
      </nav>
    </div>
  </div>
</header>
