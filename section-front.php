<style>

  html, body { background: black; }

  .hero-section { margin: 0; height: 100vh; background: black; }

  .m-card-preloader { position: absolute; width: 40vmin; height: 40vmin; transform: translateX(-50%) translateY(-50%); }
  .m-card-face { position: absolute; width: 40vmin; height: 40vmin; }

  .m-card-preloader { top: 50%; left: 50%; animation: rot 4s linear infinite; background: transparent; }
  .m-card-preloader .m-card-face .a-card-image { width: 100%; height: 100%; }

  @keyframes rot {
    25% { transform: translateX(-50%) translateY(-50%) rotate(-90deg); }
    50% { transform: translateX(-50%) translateY(-50%) rotate(-180deg); }
    75% { transform: translateX(-50%) translateY(-50%) rotate(-270deg); }
    100% { transform: translateX(-50%) translateY(-50%) rotate(-360deg); }
  }

</style>

<section class="o-section hero-section h-100">
  <div class='m-card-preloader'>
    <div class='m-card-face'>
      <img src="<?php echo get_template_directory_uri(); ?>/dist/images/site/logo-icon.png" class="a-card-image" />
    </div>
  </div>

</section>