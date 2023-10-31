<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<div class="container mx-auto my-8 font-cursive">
  <?php get_template_part('/template-parts/education') ?>
  <?php get_template_part('/template-parts/awards') ?>
</div>

<?php
get_footer();
