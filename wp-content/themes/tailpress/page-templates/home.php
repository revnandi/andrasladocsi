<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<div class="px-1 my-8 font-cursive">
  <section>
    <?php the_content() ?>
  </section>
  <?php get_template_part('/template-parts/ongoing-project') ?>
  <?php get_template_part('/template-parts/education') ?>
  <?php get_template_part('/template-parts/group-exhibitions') ?>
  <?php get_template_part('/template-parts/awards') ?>
  <?php get_template_part('/template-parts/publications') ?>
</div>

<?php
get_footer();
