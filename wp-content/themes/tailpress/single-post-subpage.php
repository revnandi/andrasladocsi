<?php
/*
Template Name: Post Subpage
*/

get_header();
?>

<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <main id="main" class="site-main">
      <?php
      // Start the loop.
      while (have_posts()) :
        the_post();

        // Display the post content.
        the_content();

        // Check if the post has a subpage.
        $subpage = get_field('subpage_content'); // Replace 'subpage_content' with the name of your custom field.

        if ($subpage) {
          echo '<h2>Subpage</h2>';
          echo $subpage;
        }

      // End the loop.
      endwhile;
      ?>
    </main><!-- #main -->
  </div><!-- #primary -->
</div><!-- #content -->

<?php get_footer(); ?>
