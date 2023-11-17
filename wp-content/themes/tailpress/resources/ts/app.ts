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
      lazyLoad: true,
    }
  );

  gallery.init();

  const counterCurrent = this.document.getElementById('andrasladocsi_gallery_counter_current')
  const counterTotal = this.document.getElementById('andrasladocsi_gallery_counter_total')
  const hoverableLinks = this.document.querySelectorAll('.al_hoverable_link')

  if (counterTotal) counterTotal.innerHTML = gallery.getLength()!.toString()
  if (counterCurrent) {
    if(counterTotal && gallery.getCurrentIndex() === 0) {
      counterCurrent.innerHTML = '1'
    } else if(counterCurrent && gallery.getCurrentIndex()! > 0 ) {
      counterCurrent.innerHTML = (gallery.getCurrentIndex()! + 1).toString()
    }
  }

  gallery.on('move', (index, prev, dest) => {
    if (counterCurrent) counterCurrent.innerHTML = (index + 1).toString()
  })

  gallery.on('ready', () => {
    console.log('gooo')
  })

  gallery.on('click', (slide, event) => {
    const target = event.target as HTMLElement;
    const rect = target.getBoundingClientRect();
    const clickedX = event.clientX - rect.left;

    if (clickedX < rect.width / 2) {
      gallery.prev()
    } else {
      gallery.next()
    }
  })



  hoverableLinks.forEach(item => {
    console.log(item)
    item?.addEventListener('mousemove', (event) => {
      const target = event.currentTarget as HTMLDivElement;
      console.log(event.currentTarget)
      const newX = (event as MouseEvent).clientX;
      const newY = (event as MouseEvent).clientY;
      const image = target.querySelector('.al_hoverable_link_image') as HTMLImageElement
      if (image) {
        console.log({
          newX,
          offset: image.offsetWidth
        })
        let imageLeft = newX + 10;
        if (imageLeft < 0) {
          imageLeft = 0;
        }
        image.style.left = imageLeft + 'px';
        image.style.top = newY + 16 + 'px';
      }
    })
    item?.addEventListener('mouseleave', (event) => {
      const target = event.currentTarget as HTMLDivElement;
      const image = target.querySelector('.al_hoverable_link_image') as HTMLImageElement
      if (image) {
        image.style.left = '0';
        image.style.top = '0';
      }
    })
  })

});