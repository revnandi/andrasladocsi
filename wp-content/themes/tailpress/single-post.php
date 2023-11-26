<?php get_header(); ?>
<?php if (isset($_GET['index']) && $_GET['index'] == 1): ?>
  <div class="flex px-1 py-2">
    <a href="<?php the_permalink() ?>">
      <svg xmlns="http://www.w3.org/2000/svg" width="14.172" height="9.293" viewBox="0 0 3.75 2.459" class="w-auto h-2">
        <path fill="#000 icc-color(Display,0,0,0)"
          d="M3.725 1.112c.008 0 .013.012.017.037a.321.321 0 0 1 .008.07c0 .031-.003.06-.008.087-.006.028-.013.041-.021.041H.558l.89 1.059a.062.062 0 0 1 .003.02c0 .012-.007.021-.02.03-.012.005-.024.003-.038-.005L.025 1.277C.008 1.264 0 1.248 0 1.232c0-.017.008-.031.025-.046L1.393.008 1.41 0c.01 0 .021.008.033.025.01.014.012.023.004.025L.562 1.112zm0 0"
          aria-label="←" />
      </svg>
    </a>
  </div>

  <div class="container mx-auto">
    <div class="px-1 mt-6 font-cursive ">
      <?php $images = get_field('gallery');
      if ($images): ?>
        <ul class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-col-5">
          <?php $indx1 = 0; foreach ($images as $image): $indx1++ ?>
            <li class="flex items-center justify-center aspect-square">
              <a class="block w-full h-full aspect-square" href="<?php echo the_permalink() . '#slide_' . $indx1 ?>">
                <img class="object-contain w-full h-full" loading="lazy" alt="<?php echo esc_attr($image['alt']); ?>"
                  src="<?php echo esc_url($image['sizes']['lqip']); ?>"
                  data-srcset="<?php echo esc_url($image['sizes']['thumbnail']); ?> 150w, <?php echo esc_url($image['sizes']['thumbnail']); ?> 300w, <?php echo esc_url($image['sizes']['medium']); ?> 1024w"
                  sizes="(max-width: 150px) 150px, (max-width: 300px) 300px, 1024px" />
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    </div>
  </div>

<?php else: ?>
  <div class="flex justify-between px-1 py-2">
    <a href="/">
      <svg xmlns="http://www.w3.org/2000/svg" width="14.172" height="9.293" viewBox="0 0 3.75 2.459" class="w-auto h-2">
        <path fill="#000 icc-color(Display,0,0,0)"
          d="M3.725 1.112c.008 0 .013.012.017.037a.321.321 0 0 1 .008.07c0 .031-.003.06-.008.087-.006.028-.013.041-.021.041H.558l.89 1.059a.062.062 0 0 1 .003.02c0 .012-.007.021-.02.03-.012.005-.024.003-.038-.005L.025 1.277C.008 1.264 0 1.248 0 1.232c0-.017.008-.031.025-.046L1.393.008 1.41 0c.01 0 .021.008.033.025.01.014.012.023.004.025L.562 1.112zm0 0"
          aria-label="←" />
      </svg>
    </a>
    <div class="flex justify-center font-display">
      <div id="andrasladocsi_gallery_counter_current"></div>/<div id="andrasladocsi_gallery_counter_total"></div>
    </div>
    <a href="?index=1" class="flex items-center space-x-1">
      <span>Index</span>
      <svg xmlns="http://www.w3.org/2000/svg" width="14.172" height="9.293" viewBox="0 0 3.75 2.459"
        class="w-auto h-2 rotate-180">
        <path fill="#000 icc-color(Display,0,0,0)"
          d="M3.725 1.112c.008 0 .013.012.017.037a.321.321 0 0 1 .008.07c0 .031-.003.06-.008.087-.006.028-.013.041-.021.041H.558l.89 1.059a.062.062 0 0 1 .003.02c0 .012-.007.021-.02.03-.012.005-.024.003-.038-.005L.025 1.277C.008 1.264 0 1.248 0 1.232c0-.017.008-.031.025-.046L1.393.008 1.41 0c.01 0 .021.008.033.025.01.014.012.023.004.025L.562 1.112zm0 0"
          aria-label="←" />
      </svg>
    </a>
  </div>

  <div class="px-1 font-cursive">
    <?php $images = get_field('gallery');
    if ($images): ?>
      <section id="andrasladocsi_gallery" class="splide" aria-label="Gallery">
        <div class="splide__track">
          <ul class="splide__list">
            <?php $indx2 = 0; foreach ($images as $key=>$image): $indx2++; ?>
              <li class="flex items-start justify-center splide__slide max-h-[90vh] h-[90vh]" data-splide-hash="<?php echo 'slide_' . $indx2 ?>">
                <img
                  class="object-contain w-auto h-full"
                  alt="<?php echo esc_attr($image['alt']); ?>"
                  data-splide-lazy="<?php echo esc_url($image['sizes']['2048x2048']); ?>"
                  data-splide-lazy-srcset="<?php echo esc_url($image['sizes']['thumbnail']); ?> 150w, <?php echo esc_url($image['sizes']['medium']); ?> 300w, <?php echo esc_url($image['sizes']['medium_large']); ?> 768w, <?php echo esc_url($image['sizes']['large']); ?> 1024w, <?php echo esc_url($image['sizes']['1536x1536']); ?> 1536w, <?php echo esc_url($image['sizes']['2048x2048']); ?> 2048w"
                  sizes="(max-width: 150px) 150px, (max-width: 300px) 300px, (max-width: 768px) 768px, (max-width: 1024px) 1024px, (max-width: 1536px) 1536px, 2048px"
                />
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </section>
    <?php endif; ?>


  </div>
<?php endif; ?>

<!-- <lite-youtube videoid="0h5kq_OIcHg" autoload params="autoplay=1&controls=0&branding=0&showinfo=0"></lite-youtube> -->

<?php
get_footer();
