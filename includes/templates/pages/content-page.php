<?php
/**
 * Basic page output.
 */
?>

<?php
// Display our post thumbnail if it is set.
if (has_post_thumbnail()) { ?>
  <section class="intro">
    <?php
    // Page title.
    the_title('<h1 class="intro--caption">', '</h1>');
    // Thumbnail with custom image size.
    the_post_thumbnail('page_header');
    ?>
  </section>
<?php } ?>
<section  class="layout-container">
  <article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
    // If no thumbnail support print title in the page
    if (!has_post_thumbnail()) {
      the_title('<h1 class="page-title">', '</h1>');
    }
    // The page content.
    the_content(); ?>
  </article>
</section>
