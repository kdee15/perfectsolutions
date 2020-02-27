<section class="o-section o-feature-promo">

  <button id="play-button" class="a-video-play video-control active"></button>
  <button id="pause-button" class="a-video-close video-control"></button>

  <video class="m-video-preloader active" width="320" height="240" autoplay loop>
    <source src="wp-content/themes/kdee/dist/videos/preloader-video.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>

  <iframe class="m-video-player" id="video" src="https://www.youtube.com/embed/SJvHeuCLJAs?enablejsapi=1" frameborder="0" allowfullscreen></iframe>

</section>

<script>

  // Inject YouTube API script
  var tag = document.createElement('script');
  tag.src = "//www.youtube.com/player_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  var player;

  function onYouTubePlayerAPIReady() {
    // create the global player from the specific iframe (#video)
    player = new YT.Player('video', {
      events: {
        // call this function when player is ready to use
        'onReady': onPlayerReady
      }
    });
  }

  function onPlayerReady(event) {

    // bind events
    var playButton = document.getElementById("play-button");
    playButton.addEventListener("click", function() {
      player.playVideo();
      $('.a-video-play, .m-video-preloader, .m-video-player, .a-video-close').toggleClass('active');
    });

    var pauseButton = document.getElementById("pause-button");
    pauseButton.addEventListener("click", function() {
      player.pauseVideo();
      $('.a-video-play, .m-video-preloader, .m-video-player, .a-video-close').toggleClass('active');
    });

  }

</script>