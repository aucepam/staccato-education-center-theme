document.addEventListener('DOMContentLoaded', () => {
  const disclosures = document.querySelectorAll('.disclosure-item')
  const carousel = document.querySelector('.carousel-wrapper')

  disclosures.forEach(disclosure => {
    disclosure.onclick = () => {
      const slideIndex = disclosure.dataset.slideId

      disclosures.forEach(item => item.classList.remove('active'))
      disclosure.classList.add('active')

      carousel.style.transform = `translateX(${ slideIndex * -100 }%)`
    }
  })
})