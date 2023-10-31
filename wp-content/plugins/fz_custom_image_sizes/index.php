<?php
/**
 * Plugin Name: FZ Image Sizes
 * Description: Generate Custom Image Sizes.
 * Author:      Studio Freizeit
 * License:     MIT
 * License URI: https://opensource.org/licenses/MIT
 */


// Basic security, prevents file from being loaded directly.
defined( 'ABSPATH' ) or die( 'Cheatin&#8217; uh?' );

// Add image image sizes
function fz_add_image_sizes() {
  add_image_size( 'lqip', 16);
}
add_action( 'init', 'fz_add_image_sizes' );

function fz_show_image_sizes($sizes) {
  $sizes['lqip'] = __( 'LQIP', 'pippin' );

  return $sizes;
}
add_filter('image_size_names_choose', 'fz_show_image_sizes');