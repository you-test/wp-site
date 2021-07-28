<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Art Watch</title>
  <?php wp_head(); ?>
</head>

<body>
  <!-- header -->
  <header id="header">
    <a href="<?php echo get_permalink(get_page_by_path('top')->ID); ?>">
      <h1>Art Watch</h1>
    </a>
    <div class="header-inner">
      <p>Paintings and Photoes</p>
      <div id="header-nav">
        <div class="nav-list">
          <li><a href="<?php echo get_permalink(get_page_by_path('top')->ID); ?>">Top</a></li>
          <li><a href="<?php echo get_permalink(get_page_by_path('news-page')->ID); ?>">News</a></li>
          <li><a href="<?php echo get_permalink(get_page_by_path('top')->ID); ?>#about">About</a></li>
          <li>
            <span>Portofolio</span>
            <span class="category-menu"><a href="<?php echo get_permalink(get_page_by_path('paintings-page')->ID); ?>">＊paintings</a></span>
            <span class="category-menu"><a href="<?php echo get_permalink(get_page_by_path('graphics-page')->ID); ?>">＊graphics</a></span>
            <span class="category-menu"><a href="<?php echo get_permalink(get_page_by_path('photoes-page')->ID); ?>">＊photoes</a></span>
          </li>
          <li><a href="<?php echo get_permalink(get_page_by_path('contact-page')->ID); ?>">Contact</a></li>
        </div>
      </div>
      <div class="burger-btn">
        <span class="bar bar_top"></span>
        <span class="bar bar_mid"></span>
        <span class="bar bar_bottom"></span>
      </div>
    </div>
    <div class="musk"></div>
  </header>
    
  <!-- /header -->