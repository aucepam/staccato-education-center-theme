document.addEventListener('DOMContentLoaded', () => {
  const disclosures = document.querySelectorAll('.disclosure-item')

  disclosures.forEach(disclosure => {
    disclosure.onclick = () => {
      disclosures.forEach(item => item.classList.remove('active'))
      disclosure.classList.add('active')
    }
  })
})