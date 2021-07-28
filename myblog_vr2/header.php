<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;700&family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head() ?>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-T89PXLWVPV"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-T89PXLWVPV');
</script>
</head>
<body>
  <!-- header -->
  <header id="header">
    <div class="header-title">
      <h1>
        <a href="<?php echo get_permalink(get_page_by_path('top')->ID); ?>">Y-suke Page</a>
      </h1>
      <h2><?php bloginfo('description'); ?></h2>
    </div>
    <div class="header-sns-nav">
      <div class="sns">
        <a href="https://twitter.com/you999san">
          <img src="<?php echo get_template_directory_uri(); ?>/image/twitter.png" alt="twitter">
        </a>
        <a href="https://www.instagram.com/you_web05/">
          <img src="<?php echo get_template_directory_uri(); ?>/image/instagram.png" alt="instagram">
        </a>
      </div>
      <nav>
        <div class="nav-list">
          <li><a href="<?php echo get_permalink(get_page_by_path('top')->ID); ?>">Top</a></li>
          <li><a href="<?php echo get_permalink(get_page_by_path('blog')->ID); ?>">Blog</a></li>
          <li><a href="<?php echo get_permalink(get_page_by_path('portfolio')->ID); ?>">Works</a></li>
          <li><a href="<?php echo get_permalink(get_page_by_path('contact')->ID); ?>">Contact</a></li>
        </div>
      </nav>
    </div>
    <!-- berger btn -->
    <div class="berger-btn">
      <span class="top"></span>
      <span class="mid"></span>
      <span class="bottom"></span>
    </div>
    <div class="menu-musk"></div>

  </header>
  <!-- / header -->
