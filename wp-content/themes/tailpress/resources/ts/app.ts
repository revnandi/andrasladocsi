import {  lazyLoad } from 'unlazy'
import { Gallery } from './gallery';
import '@justinribeiro/lite-youtube';

window.addEventListener('load', function () {
  lazyLoad();

  const gallery = new Gallery(
      'andrasladocsi_gallery',
      {
        rewind: true,
        type: 'fade',
        pagination: false,
        classes: {
          pagination: 'z-10 absolute bottom-6 left-11 flex justify-center py-2 space-x-2 [&>li]:h-fit [&>li]:flex',
          page: 'w-4 h-4 bg-black rounded-full [&.is-active]:bg-turquoise'
        }
        // dots: '#lt_small_carousel_dots'
      }
    );
});