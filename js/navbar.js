document.addEventListener('DOMContentLoaded', () => {
  const navbar = document.getElementById('navbar')
  const toggler = document.getElementById('navbar-toggler')
  const navLinks = document.querySelectorAll('.nav-link')

  toggler.addEventListener('click', () => {
    navbar.classList.toggle('opened')
  })

  navLinks.forEach(navLink => {
    navLink.onclick = () => {
      navbar.classList.remove('opened')
    }
  })
})