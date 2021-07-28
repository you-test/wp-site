  <!-- footer -->
  <footer id="footer">
    <div class="footer-inner">
      <div class="footer-company">
        <div class="site-logo">
          <p>Art Watch</p>
          <p>Paintings and Photoes</p>
        </div>
        <div class="footer-company-text">
          <p>運営会社　アート・コーポレーション</p>
          <p>東京都千代田区丸の内</p>
          <p>TEL : 000-0000-0000</p>
          <p>MAIL：art-corporation@xxx.com</p>
        </div>
      </div>
      <div class="sitemap">
        <ul class="top-page-link">
          <li><a href="./">top</a></li>
          <li><a href="#news">news</a></li>
          <li><a href="#about">about</a></li>
          <li><a href="#pf">portofolio</a></li>
          <li><a href="#contact">contact</a></li>
        </ul>
        <ul class="other-page-link">
          <li><a href="<?php echo get_permalink(get_page_by_path('news-page')->ID); ?>">news_page</a></li>
          <li><a href="">portofolio_page</a></li>
          <li><a href="">contact_page</a></li>
        </ul>
      </div>
    </div>
    <p>&copy; Art Watch  All Rights Reserved</p>
  </footer>
  <!-- /footer -->
  <?php wp_footer() ?>
</body>
</html>