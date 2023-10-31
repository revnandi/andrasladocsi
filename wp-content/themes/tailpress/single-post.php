<?php get_header(); ?>
<a href="/">
  <svg xmlns="http://www.w3.org/2000/svg" width="14.172" height="9.293" viewBox="0 0 3.75 2.459">
    <path fill="#000 icc-color(Display,0,0,0)" d="M3.725 1.112c.008 0 .013.012.017.037a.321.321 0 0 1 .008.07c0 .031-.003.06-.008.087-.006.028-.013.041-.021.041H.558l.89 1.059a.062.062 0 0 1 .003.02c0 .012-.007.021-.02.03-.012.005-.024.003-.038-.005L.025 1.277C.008 1.264 0 1.248 0 1.232c0-.017.008-.031.025-.046L1.393.008 1.41 0c.01 0 .021.008.033.025.01.014.012.023.004.025L.562 1.112zm0 0" aria-label="←"/>
  </svg>
</a>

<div class="px-1 my-8 font-cursive">

  <?php
  $images = get_field('gallery');
  if ($images): ?>
    <ul class="grid grid-cols-2 gap-4 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5">
      <?php foreach ($images as $image): ?>
        <li class="flex items-center justify-center border aspect-square">
          <a class="block w-full h-full aspect-square" href="<?php echo esc_url($image['url']); ?>">
            <img
              class="object-contain w-full h-full"
              loading="lazy"
              alt="<?php echo esc_attr($image['alt']); ?>"
              src="<?php echo esc_url($image['sizes']['lqip']); ?>"
              data-srcset="<?php echo esc_url($image['sizes']['thumbnail']); ?> 150w, <?php echo esc_url($image['sizes']['thumbnail']); ?> 300w, <?php echo esc_url($image['sizes']['medium']); ?> 1024w"
              sizes="(max-width: 150px) 150px, (max-width: 300px) 300px, 1024px" />
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>

</div>

<lite-youtube videoid="0h5kq_OIcHg" autoload params="autoplay=1&controls=0&branding=0&showinfo=0"></lite-youtube>

<?php
get_footer();
