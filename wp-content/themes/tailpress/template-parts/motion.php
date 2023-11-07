<?php
$args = array(
  'post_type' => 'motion',
  'post_status' => 'publish',
  'posts_per_page' => -1,
);

$query = new WP_Query($args);

$posts = get_posts($args);

if ($query->have_posts()): ?>
  <section class="mb-6">
    <h2 class="font-display">Motion</h2>
    <div class="flex flex-col">
      <?php while ($query->have_posts()): $query->the_post(); ?>
        <div class="inline-block italic al_motion_link group">
        <a href="<?php the_field('link') ?>" class="inline-block">
            <?php the_title(); ?>, <?php the_field('year') ?>
        </a>
          <?php if (has_post_thumbnail()): ?>
            <div
              class="absolute hidden w-32 h-32 overflow-hidden border al_motion_link_image al_group_motion_link_image group-hover:block group md:col-span-5 aspect-wide-header aspect-square border-turquoise">
              <img class="object-cover w-full h-full" loading="lazy"
                src="<?php echo get_the_post_thumbnail_url(null, 'lqip') ?>"
                data-srcset="<?php echo get_the_post_thumbnail_url(null, 'thumbnail') ?> 150w, <?php echo get_the_post_thumbnail_url(null, 'thumbnail') ?> 300w, <?php echo get_the_post_thumbnail_url(null, 'medium') ?> 1024w"
                data-sizes="auto" />
            </div>
          <?php endif; ?>
        </div>
      <?php endwhile; ?>
    </div>
  </section>
<?php endif;


wp_reset_postdata();
?>