function playVideo(video) {
    const videoItems = document.querySelectorAll('.video-item video');
    videoItems.forEach(item => {
      if (item !== video) {
        item.pause();
        item.currentTime = 0;
      }
    });
    video.play();
  }