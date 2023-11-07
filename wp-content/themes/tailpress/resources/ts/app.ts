import { lazyLoad } from 'unlazy'
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
      arrows: false,
      perPage: 1,
      classes: {
        // pagination: 'z-10 absolute bottom-6 left-11 flex justify-center py-2 space-x-2 [&>li]:h-fit [&>li]:flex',
        // page: 'w-4 h-4 bg-black rounded-full [&.is-active]:bg-turquoise'
      }
      // dots: '#lt_small_carousel_dots'
    }
  );

  gallery.init();

  console.log(gallery.getLength())
  // this.setInterval(() => gallery.next(), 1000)

  const counterCurrent = this.document.getElementById('andrasladocsi_gallery_counter_current')
  const counterTotal = this.document.getElementById('andrasladocsi_gallery_counter_total')
  const ongoingLinks = this.document.querySelectorAll('.al_group_exhibition_link')
  const motionLinks = this.document.querySelectorAll('.al_motion_link')

  if (counterTotal) counterTotal.innerHTML = gallery.getLength()!.toString()
  if (counterCurrent) counterCurrent.innerHTML = '1'


  gallery.on('move', (index, prev, dest) => {
    if (counterCurrent) counterCurrent.innerHTML = (index + 1).toString()
  })

  gallery.on('click', (slide, event) => {
    console.log(slide)
    const target = event.target as HTMLElement;
    const rect = target.getBoundingClientRect();
    const clickedX = event.clientX - rect.left;

    if (clickedX < rect.width / 2) {
      console.log('Left half clicked');
      gallery.prev()
    } else {
      console.log('Right half clicked');
      gallery.next()
    }
  })

  ongoingLinks.forEach(item => {
    console.log(item)
    item?.addEventListener('mousemove', (event) => {
      const target = event.currentTarget as HTMLDivElement;
      const newX = (event as MouseEvent).clientX;
      const newY = (event as MouseEvent).clientY;
      const image = target.querySelector('.al_group_exhibition_link_image') as HTMLImageElement
      if (image) {
        let imageLeft = newX - image.offsetWidth;
        if (imageLeft < 0) {
          imageLeft = 0;
        }
        image.style.left = imageLeft + 'px';
        image.style.top = newY + 'px';
      }
    })
    item?.addEventListener('mouseleave', (event) => {
      const target = event.currentTarget as HTMLDivElement;
      const image = target.querySelector('.al_group_exhibition_link_image') as HTMLImageElement
      if (image) {
        image.style.left = '0';
        image.style.top = '0';
      }
    })
  })

  motionLinks.forEach(item => {
    console.log(item)
    item?.addEventListener('mousemove', (event) => {
      const target = event.currentTarget as HTMLDivElement;
      const newX = (event as MouseEvent).clientX;
      const newY = (event as MouseEvent).clientY;
      const image = target.querySelector('.al_motion_link_image') as HTMLImageElement
      if (image) {
        let imageLeft = newX - image.offsetWidth;
        if (imageLeft < 0) {
          imageLeft = 0;
        }
        image.style.left = imageLeft + 'px';
        image.style.top = newY + 'px';
      }
    })
    item?.addEventListener('mouseleave', (event) => {
      const target = event.currentTarget as HTMLDivElement;
      const image = target.querySelector('.al_motion_link_image') as HTMLImageElement
      if (image) {
        image.style.left = '0';
        image.style.top = '0';
      }
    })
  })

});