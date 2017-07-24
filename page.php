<?php
/**
 * Basic template for pages.
 */
get_header();
?>

<main role="main">
  <?php
  // Start the Loop.
  while (have_posts() ):
    the_post();
    // template name: content-page.php
    get_template_part('includes/templates/pages/content', 'page');
    // If comments are open or we have at least one comment, load up the comment template.
    if (comments_open() || get_comments_number()) {
      comments_template();
    }
  endwhile;
  ?>
</main>

<?php
get_footer();
