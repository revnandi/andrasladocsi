<?php
$args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'posts_per_page' => 1,
);

$query = new WP_Query($args);

$posts = get_posts($args);

if ($query->have_posts()): ?>
  <section class="flex flex-wrap mb-6">
    <h2 class="font-display">Ongoing Projects</h2>
    <?php while ($query->have_posts()):
      $query->the_post(); ?>
      <div class="flex inline-block italic al_hoverable_link group">
        <svg xmlns="http://www.w3.org/2000/svg" width="14.172" height="9.293" viewBox="0 0 3.75 2.459"
          class="h-full mx-2 rotate-180">
          <path fill="#000 icc-color(Display,0,0,0)"
            d="M3.725 1.112c.008 0 .013.012.017.037a.321.321 0 0 1 .008.07c0 .031-.003.06-.008.087-.006.028-.013.041-.021.041H.558l.89 1.059a.062.062 0 0 1 .003.02c0 .012-.007.021-.02.03-.012.005-.024.003-.038-.005L.025 1.277C.008 1.264 0 1.248 0 1.232c0-.017.008-.031.025-.046L1.393.008 1.41 0c.01 0 .021.008.033.025.01.014.012.023.004.025L.562 1.112zm0 0"
            aria-label="←" />
        </svg>
        <a href="<?php the_permalink() ?>" class="inline-block">
          <?php the_title(); ?>
        </a>
        <?php if (has_post_thumbnail()): ?>
          <div
            class="absolute hidden w-32 h-32 overflow-hidden border al_hoverable_link_image group-hover:block group md:col-span-5 aspect-wide-header aspect-square border-turquoise">
            <img class="object-cover w-full h-full" loading="lazy"
              src="<?php echo get_the_post_thumbnail_url(null, 'lqip') ?>"
              data-srcset="<?php echo get_the_post_thumbnail_url(null, 'thumbnail') ?> 150w, <?php echo get_the_post_thumbnail_url(null, 'thumbnail') ?> 300w, <?php echo get_the_post_thumbnail_url(null, 'medium') ?> 1024w"
              data-sizes="auto" />
          </div>
        <?php endif; ?>
      </div>
    <?php endwhile; ?>
  </section>
<?php endif;


wp_reset_postdata();
?>