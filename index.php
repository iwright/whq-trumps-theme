<?php
/**
 * Main post template.
 *
 * Grabs data from other pages/posts to show on a single template.
 */
get_header();
?>

<main role="main">
  <?php
  // Start the Loop.
  while (have_posts()):
    the_post();
    // Include the page content template.
    if (get_post_format()) {
      // template name: content-XXXX.php
      get_template_part('includes/templates/posts/content', get_post_format());
    }
  endwhile;
  ?>
</main>

<?php
get_footer();
