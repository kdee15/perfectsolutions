<style>

  html, body { background: black; }

  .hero-section { margin: 0; height: 100vh; perspective: 20em; background: black; }

  .card { position: absolute; width: 40vmin; height: 40vmin; }
  .face { position: absolute; width: 40vmin; height: 40vmin; }

  .card {
    top: 50%;
    left: 50%;
    margin: -20vmin;
    transform-style: preserve-3d;
    text-align: center;
    font: calc(1em + 10vmin) /40vmin trebuchet ms, verdana, arial, sans-serif;
    font-size: calc(1em + 10vmin);
    line-height: 40vmin;
    font-family: trebuchet ms, verdana, arial, sans-serif;
    animation: rot 4s linear infinite;
    background: transparent;
  }

  .card .a-image { width: 100%; height: 100%; }

  @keyframes rot {
    50% {
      transform: rotateY(0.5turn);
    }
    100% {
      transform: rotateY(1turn);
    }
  }
  .face {
    /*backface-visibility: hidden;*/
  }
  .face:last-child {
    transform: rotateY(0.5turn);
  }



</style>


<section class="o-section hero-section h-100">

  <div class='card'>
    <div class='face'>
      <img src="<?php echo get_template_directory_uri(); ?>/dist/images/site/logo-icon.png" class="a-image" />
    </div>
    <div class='face'>
      <img src="<?php echo get_template_directory_uri(); ?>/dist/images/site/logo-icon-flipped.png" class="a-image" />
    </div>
  </div>



</section>