<!DOCTYPE html>
 <html lang="ja">
 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>Northern Furniture</title>
   <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;700&family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
 </head>
 <body>
   <!-- header -->
    <header id="header">
      <div class="header-inner">
        <div class="header-top">
          <h1><a href="<?php echo site_url(); ?>">Northern<br>Furniture</a></h1>
          <nav>
            <div class="menu-btn-sp">Menu</div>
            <ul class="main-menu">
              <li><a href="<?php echo get_permalink(get_page_by_path('news')->ID); ?>">news</a></li>
              <li><a href="<?php echo get_permalink(get_page_by_path('companypage')->ID); ?>">company</a></li>
              <li><a href="<?php echo get_permalink(get_page_by_path('contactpage')->ID); ?>">contact</a></li>                
            </ul>
          </nav>
        </div>  
      </div>
      <ul class="category-menu">
        <li><a href="<?php echo get_permalink(get_page_by_path('chairpage')->ID); ?>">chair</a></li>
        <li><a href="<?php echo get_permalink(get_page_by_path('tablepage')->ID); ?>">table</a></li>
        <li><a href="<?php echo get_permalink(get_page_by_path('bedpage')->ID); ?>">bed</a></li>
        <li><a href="<?php echo get_permalink(get_page_by_path('otherspage')->ID); ?>">others</a></li>
      </ul>

      <!-- sp menu musk-->
      <div class="menu-musk">
        <div class="cross-btn">
          <span></span>
          <span></span>
        </div>
        <div class="menu-contents">
          <div class="main-menu-border"></div>
          <div class="category-menu-border"></div>
        </div>
      </div>
    </header>
    <!-- end header -->