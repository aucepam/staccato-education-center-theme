import PhotoSwipeLightbox from '../lib/photoswipe/photoswipe-lightbox.esm.js'
import PhotoSwipe from '../lib/photoswipe/photoswipe.esm.js'

document.addEventListener('DOMContentLoaded', () => {
  const lightbox = new PhotoSwipeLightbox({
    gallery: '#pswp-gallery',
    children: 'a[data-pswp-width]',
    pswpModule: PhotoSwipe,
    zoom: false
  })

  lightbox.on('itemData', e => {
    const element = e.itemData.element
    if (element && element.dataset.pswpIsVideo === 'true') {
      const video = element.querySelector('video')
      const src = video.getElementsByTagName('source')[0].src

      e.itemData = {
        html: `<video class="pswp-video" controls><source src="${src}" /></video>`
      }
    }
  })

  lightbox.init()
})