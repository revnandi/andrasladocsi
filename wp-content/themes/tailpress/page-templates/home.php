<?php /* Template Name: Home */?>

<?php get_header(); ?>

<div class="px-1 my-8 font-cursive">
  <section class="flex flex-col mb-6 md:flex-row md:flex-wrap">
    <div class="[&>h1]:font-display [&>h2]:font-display">
      <?php the_content() ?>
    </div>
  </section>
  <?php get_template_part('/template-parts/ongoing-project') ?>
  <?php get_template_part('/template-parts/motion') ?>
  <?php get_template_part('/template-parts/books') ?>
  <?php get_template_part('/template-parts/education') ?>
  <?php get_template_part('/template-parts/group-exhibitions') ?>
  <?php get_template_part('/template-parts/awards') ?>
  <?php get_template_part('/template-parts/publications') ?>
</div>

<?php
get_footer();
