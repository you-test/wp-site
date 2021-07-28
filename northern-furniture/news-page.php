  <!-- main -->
  <main>
  <!-- main visual -->
  <div id="mv">
    <img src="<?php echo get_template_directory_uri(); ?>/furniture-img/table3.jpg" alt="table">
  </div>
  <!-- /main visual -->

  <!-- news page -->
  <section id="news-list" class="container">
    <h2 class="section-title">NEWS</h2>
    <div class="contents">

  <?php
    //最初は1ページ目を表示させる
    $paged = get_query_var('paged', 1);
    $news_args = array (
      'paged' => $paged,
      'post_status' => 'publish',
      'posts_per_page' => 6,
      'orderby' => 'post_date',
      'order' => 'DESC',
    );
    //サブループ
    $news_query = new WP_Query($news_args);
    while($news_query ->have_posts()) :
      $news_query -> the_post();
  ?>

      <div class="item">
        <a href="<?php echo get_permalink(); ?>">
          <div class="item-img">
            <?php
              if ( has_post_thumbnail() ):
                the_post_thumbnail();
              endif;
            ?>
          </div>
          <p class="news-day"><?php the_time('Y/m/d'); ?></p>
          <p class="item-name"><?php the_title(); ?></p>
        </a>
      </div>
    <?php endwhile ?>  
  </div>

    <!-- pagenation -->
    <?php
      wp_pagenavi(array('query' => $news_query));
      wp_reset_postdata();
    ?>  
  </section> 
  
</main>  
