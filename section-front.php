<style>

  html, body { background: black; }

  .hero-section { margin: 0; height: 100vh; background: black; }

  .card { position: absolute; width: 40vmin; height: 40vmin; transform: translateX(-50%) translateY(-50%); }
  .face { position: absolute; width: 40vmin; height: 40vmin; }

  .card { top: 50%; left: 50%; animation: rot 4s linear infinite; background: transparent; }
  .card .a-image { width: 100%; height: 100%; }

  @keyframes rot {
    25% { transform: translateX(-50%) translateY(-50%) rotate(-90deg); }
    50% { transform: translateX(-50%) translateY(-50%) rotate(-180deg); }
    75% { transform: translateX(-50%) translateY(-50%) rotate(-270deg); }
    100% { transform: translateX(-50%) translateY(-50%) rotate(-360deg); }
  }

</style>

<section class="o-section hero-section h-100">
  <div class='card'>
    <div class='face'>
      <img src="<?php echo get_template_directory_uri(); ?>/dist/images/site/logo-icon.png" class="a-image" />
    </div>
  </div>

</section>