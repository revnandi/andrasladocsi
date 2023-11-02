<?php
$args = array(
  'post_type' => 'books',
  'post_status' => 'publish',
  'posts_per_page' => -1,
);

$query = new WP_Query($args);

$posts = get_posts($args);

if ($query->have_posts()): ?>
  <section class="mb-6">
    <h2 class="font-display">Books</h2>
    <?php while ($query->have_posts()): $query->the_post(); ?>
      <div class="italic">
        <?php the_title(); ?>
      </div>
    <?php endwhile; ?>
  </section>
<?php endif;


wp_reset_postdata();
?>