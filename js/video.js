document.addEventListener('DOMContentLoaded', () => {
  const videoElements = document.querySelectorAll('.video-wrapper')

  videoElements.forEach(videoElement => {
    const videoButton = videoElement.querySelector('.video-button')
    const videoPlayer = videoElement.querySelector('video')

    const togglePlayer = () => {
      if (videoPlayer.paused || videoPlayer.ended) {
        videoElement.dataset.state = 'play'
        videoPlayer.play()
      } else {
        videoElement.dataset.state = 'pause'
        videoPlayer.pause()
      }
    }

    videoButton.onclick = () => togglePlayer()
  })
})