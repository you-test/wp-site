<?php get_header(); ?>
<!-- main -->
<main>
  <!-- main visual -->
  <div id="mv">
    <img src="<?php echo get_template_directory_uri(); ?>/furniture-img/interior-image3.jpg" alt="interior">
  </div>
  <!-- /main visual -->

  <!-- news page -->
  <section id="company-page" class="container">
    <h2 class="section-title">COMPANY</h2>
    <div class="company-contents">
      <div class="company-text">
        <dl class="company-profile">
          <dd>社名</dd><dt>株式会社 Northern Furniture</dt>
          <dd>代表者</dd><dt>佐藤　欧州</dt>
          <dd>本社</dd><dt>札幌市中央区大通4丁目</dt>
          <dd>TEL</dd><dt>011-000-0000</dt>
          <dd>設立</dd><dt>2000年4月1日</dt>
          <dd>資本金</dd><dt>3,600万円</dt>
          <dd>従業員</dd><dt>60名</dt>
          <dd>事業内容</dd><dt>家具・食器・その他雑貨の輸入販売</dt>
        </dl>
        <div class="shop">
          <p>店舗</p>
          <ul class="shop-list">
            <li>Northern Furniture　札幌店</li>
            <li>Northern Furniture　釧路店</li>
            <li>Northern Furniture　旭川店</li>
          </ul>
        </div>
      </div>
      <div class="company-img">
        <img src="<?php echo get_template_directory_uri(); ?>/furniture-img/company.jpg" alt="office-img">
      </div>
    </div>
  </section> 
  <!--/news page  -->

</main>  
<?php get_footer(); ?>