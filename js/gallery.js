document.addEventListener('DOMContentLoaded', () => {
  const galleryItems = document.querySelectorAll('.gallery-item')

  galleryItems.forEach(galleryItem => {
    galleryItem.onclick = () => {
      galleryItems.forEach(item => item.classList.remove('active'))
      galleryItem.classList.add('active')
    }
  })
})