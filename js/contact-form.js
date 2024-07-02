document.addEventListener('DOMContentLoaded', function() {
  document.getElementById('contact-form').addEventListener('submit', function (e) {
    e.preventDefault()

    const form = document.getElementById('contact-form')
    const submitButton = form.querySelector('button[type="submit"]')
    const formData = new FormData(this)
    const xhr = new XMLHttpRequest()
    
    function toggleInputs (disable) {
      const inputs = form.querySelectorAll('input, textarea, button')
      inputs.forEach(input => input.disabled = disable)
    }

    toggleInputs(true)

    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        toggleInputs(false)

        if (xhr.status === 200) {
          const response = JSON.parse(xhr.responseText)
          if (response.success) {
            submitButton.innerHTML = 'Відправлено!'
            form.reset()
          } else {
            submitButton.innerHTML = 'Помилка!'
            console.error('Server Error: ' + response.data)
          }
        } else {
          submitButton.innerHTML = 'Помилка!'
          console.error('HTTP Error: ' + xhr.statusText)
        }
      }
    }

    xhr.open('POST', this.getAttribute('action'), true)
    xhr.send(formData)
  })
})