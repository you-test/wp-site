<?php get_header(); ?>
  <!-- main -->
  <main>
  
  <!-- main visual-->
  <div id="mv-top-slick">
    <img src="<?php echo get_template_directory_uri(); ?>/furniture-img/interior-image2.jpg" alt="interior-image">
    <img src="<?php echo get_template_directory_uri(); ?>/furniture-img/interior-image1.jpg" alt="interior-image">
    <img src="<?php echo get_template_directory_uri(); ?>/furniture-img/interior-image3.jpg" alt="interior-image">
    <img src="<?php echo get_template_directory_uri(); ?>/furniture-img/plate1.jpg" alt="plate">
    <img src="<?php echo get_template_directory_uri(); ?>/furniture-img/interior-image4.jpg" alt="interior-image">
  </div> 
  <!-- /main visual -->

  <!-- about -->
  <section id="about" class="container">
    <h2 class="section-title">ABOUT  US</h2>
    <div class="about-contents fadein">
      <div class="about-text">
        Since 2000<br>                   
        <br>
        北欧デンマークから１つのイスを日本に持ち込んでから２０年。<br>
        <br>
        小さなショップからはじめて現在はテーブルやベッド、食器、
        雑貨まで北欧テイストの商品を多数そろえる総合インテリアシ
        ョップとなった当社今でもデンマークでみつけたあのイスには
        じめて腰をかけたときのよろこびを覚えています。<br>
        <br>
        わたしたちはあのときのよろこびをみなさまに感じて
        もらいたく、いまでも直接ヨーロッパまで出向いて感動
        の発掘にとりくんでいます。<br>
        <br>
        これからも「インテリアからよろこびや感動」をテーマ
        にアイテムを提供していきます。
      </div>
      <div class="about-img">
        <img src="<?php echo get_template_directory_uri(); ?>/furniture-img/chair1.jpg" alt="chair">
      </div>
    </div>
  </section>
  <!-- /about -->

  <!-- news -->
  <section id="news" class="bg-grey-wide">
    <div class="container">
      <h2 class="section-title">NEWS</h2>
      <div class="news-inner fadein">
        <div class="news-contents">
          <div class="news-text">
            <dl>
              <?php
                if ( have_posts() ) :
                  while ( have_posts() ) : the_post();
              ?>
              <dd><?php the_time('Y-m-d'); ?></dd><dt><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></dt>
              <?php
                  endwhile;
                endif;
              ?>
              
            </dl>
          </div>
          <div class="link-btn grey">
            <a href="<?php echo get_permalink(get_page_by_path('news')->ID); ?>">more</a>
            <span class="arrow-long"></span>
            <span class="arrow-short"></span>
          </div>
        </div> 
        <div class="news-image">
          <img src="<?php echo get_template_directory_uri(); ?>/furniture-img/cabinet.jpg" alt="cabinet">
        </div>       
      </div>
    </div>
  </section>
  <!-- /news -->

  <!-- pickup -->
  <section id="pickup" class="container">
    <h2 class="section-title">PICKUP  ITEM</h2>
    <div class="contents fadein">
      <div class="item">
        <a href="<?php echo get_permalink(get_page_by_path('chairpage')->ID); ?>">
          <div class="item-img">
            <img src="<?php echo get_template_directory_uri(); ?>/furniture-img/couch1.jpg" alt="couch">
          </div>
          <p class="item-name">ABC　ワイドソファ</p>
          <p class="item-price">98,000yen ( +tax )</p>
        </a>
      </div>
      <div class="item">
        <a href="<?php echo get_permalink(get_page_by_path('tablepage')->ID); ?>">
          <div class="item-img">
            <img src="<?php echo get_template_directory_uri(); ?>/furniture-img/table2.jpg" alt="table">
          </div>
          <p class="item-name">CDE　コンパクトダイニングテーブル</p>
          <p class="item-price">89,000yen ( +tax )</p>
        </a>            
      </div>
      <div class="item">
        <a href="<?php echo get_permalink(get_page_by_path('bedpage')->ID); ?>">
          <div class="item-img">
            <img src="<?php echo get_template_directory_uri(); ?>/furniture-img/bed1.jpg" alt="bed">
          </div>
          <p class="item-name">ABC　木製ベッド（ダブルサイズ）</p>
          <p class="item-price">128,000yen ( +tax )</p>
        </a>
      </div>  
    </div>
    <div class="link-btn white">
      <a href="<?php echo get_permalink(get_page_by_path('otherspage')->ID); ?>">more</a>
      <span class="arrow-long"></span>
      <span class="arrow-short"></span>
    </div>
  </section>
  <!-- /pickup -->
  </main>

  <?php get_footer(); ?>

