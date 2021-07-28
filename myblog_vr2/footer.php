<!-- footer -->
<footer id="footer">
  <div class="footer-inner">
    <div>
      <h3>Y-suke Page</h3>
      <div class="sns">
        <a href="https://twitter.com/you999san">
          <img src="<?php echo get_template_directory_uri(); ?>/image/twitter.png" alt="twitter">
        </a>
        <a href="https://www.instagram.com/you_web05/">
          <img src="<?php echo get_template_directory_uri(); ?>/image/instagram.png" alt="instagram">
        </a>
      </div>
    </div>
    <ul class="sitemap">
      <li><a href="<?php echo get_permalink(get_page_by_path('top')->ID); ?>">Top</a></li>
      <li><a href="<?php echo get_permalink(get_page_by_path('blog')->ID); ?>">Blog</a></li>
      <li><a href="<?php echo get_permalink(get_page_by_path('portfolio')->ID); ?>">Portfolio</a></li>
      <li><a href="<?php echo get_permalink(get_page_by_path('contact')->ID); ?>">Contact</a></li>
    </ul>
  </div>
  <p>&copy;Y-suke Page</p>
</footer>
<!-- / footer -->
<?php wp_footer(); ?>
</body>
</html>