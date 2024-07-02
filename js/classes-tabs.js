document.addEventListener('DOMContentLoaded', () => {
  const tabButtons = document.querySelectorAll('.tab-button')
  const tabContents = document.querySelectorAll('.tab-content')

  tabButtons.forEach(tabButton => {
    tabButton.onclick = () => {
      const tabId = tabButton.dataset.tabId;

      tabButtons.forEach(button => button.classList.remove('active'))
      tabButton.classList.add('active')
      
      tabContents.forEach(content => content.classList.remove('active'))
      document
        .querySelector(`.tab-content[data-tab-content-id="${tabId}"]`)
        .classList.add('active')
    }
  })
})