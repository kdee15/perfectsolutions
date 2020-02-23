<style>

  .preloader-block { position: fixed; top: 0; left: 0; bottom: 0; right: 0; z-index: 1000000; background-color: rgba(0,0,0,0.95); }
  .preloader .preloader-block { opacity: 0; transition: 0.3s; }
  .kd-app .preloader-block { opacity: 1; transition: 0.3s; }

  .m-card-preloader { position: absolute; width: 25vmin; height: 25vmin; transform: translateX(-50%) translateY(-50%); }
  .preloader-block .m-card-face { position: absolute; width: 100%; height: 100%; }

  .m-card-preloader { top: 50%; left: 50%; animation: spin 4s linear infinite; background: transparent; }
  .m-card-preloader .m-card-face .a-card-image { width: 100%; height: 100%; }

  @keyframes spin {
    25% { transform: translateX(-50%) translateY(-50%) rotate(90deg); }
    50% { transform: translateX(-50%) translateY(-50%) rotate(180deg); }
    75% { transform: translateX(-50%) translateY(-50%) rotate(270deg); }
    100% { transform: translateX(-50%) translateY(-50%) rotate(360deg); }
  }

</style>

<div class="o-modal preloader-block">
  <div class='m-card-preloader'>
    <div class='m-card-face'>
      <img src="<?php echo get_template_directory_uri(); ?>/dist/images/site/logo-icon.png" class="a-card-image" />
    </div>
  </div>
</div>