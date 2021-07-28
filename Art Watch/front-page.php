<?php get_header() ?>

<!-- main -->
<main>
  <!-- main visual -->
  <div id="mv">
    <div class="mv-inner">
      <div class="mv-copy">
        <h2>We are online art musium_</h2>
        <p>We have many paintings, photoes, and graphics_</p>
        <p>Enjoy art_</p>
      </div>
      <div class="mv-back mv-back1"><img src="<?php echo get_template_directory_uri(); ?>/img/art-painting1.jpg" alt="painting"></div>
      <div class="mv-back mv-back2"><img src="<?php echo get_template_directory_uri(); ?>/img/art-wallpaper1.jpg" alt="wallpaper"></div>
      <div class="mv-back mv-back3"><img src="<?php echo get_template_directory_uri(); ?>/img/graphic4.jpg" alt=""></div>
    </div>
    
  </div>
  <!-- /main visual -->
  <!-- news -->
  <section id="news">
    <div class="container">
      <h2 class="section-title">News</h2>
      <div class="news-inner fadein">
        <dl class="news-list">

<?php
  $paged = get_query_var('paged', 1);
  $news_args = array(
    'paged' => $paged,
    'posts_per_page' => '6',
    'post_status' => 'publish',
    'post_type' => 'post',
    'orderby' => 'date',
    'order' => 'DESC'
  );
  
  $news_query = new WP_Query($news_args);
  if ( $news_query->have_posts() ) :
    while ( $news_query->have_posts() ) : $news_query->the_post();
?>    
          <dt><a href="<?php echo get_permalink(); ?>"><?php the_time('Y-m-d'); ?></a></dt>
          <dd><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></dd>
<?php
    endwhile;
  endif;
?>

        </dl>
        <div class="more-btn">
          <a href="<?php echo get_permalink(get_page_by_path('news-page')->ID); ?>">more</a>
          <span class="more-arrow-l"></span>
          <span class="more-arrow-s"></span>
        </div>
        
      </div>      
      <div class="back-img news-back"><img src="<?php echo get_template_directory_uri(); ?>/img/water.jpg" alt="water"></div>
    </div>
  </section>
  <!-- /news -->
  <!-- about -->
  <section id="about">
    <div class="container">
      <h2 class="section-title">About us</h2>
      <h3 class="about-copy fadein">Art become usual</h3>
      <div class="about-text fadein">
        アートをもっと身近なものに＿<br>
        そういうコンセプトのもとArt Watchのプロジェクトが
        スタートしました＿<br>
        掲載している作品は絵画や写真、グラフィックなど様々な
        ジャンルを扱い、プロ・アマチュアを問わずたくさんのア
        ーティストが作り出したものを掲載しています＿<br>
        Art Watchのなかからお気に入りの作品をみつけ、そこ
        からよりArtに興味をもっていただければと思っています＿
      </div>
      <div class="back-img about-back1"><img src="<?php echo get_template_directory_uri(); ?>/img/painting2.jpg" alt="painting"></div>
      <div class="back-img about-back2"><img src="<?php echo get_template_directory_uri(); ?>/img/graphic1.jpg" alt="graphic"></div>
    </div>
    
  </section>
  <!-- /about -->
  <!-- portofolio -->
  <section id="pf">
    <div class="container">
      <h2 class="section-title">Portfolio</h2>
      <div class="pf-contents fadein">
        <div class="pf-category">
          <a href="<?php echo get_permalink(get_page_by_path('paintings-page')->ID); ?>">
            <p>paintings</p>
            <div class="pf-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/art-painting1.jpg" alt="painting">
            </div>
          </a>
        </div>
        <div class="pf-category">
          <a href="<?php echo get_permalink(get_page_by_path('graphics-page')->ID); ?>">
            <p>graphics</p>
            <div class="pf-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/graphic2.jpg" alt="graphic">
            </div>
          </a>
        </div>
        <div class="pf-category">
          <a href="<?php echo get_permalink(get_page_by_path('photoes-page')->ID); ?>">
            <p>pthotoes</p>
            <div class="pf-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/photo1.jpg" alt="photo">
            </div>
          </a>
        </div>
      </div>
      <div class="back-img pf-back">
        <img src="<?php echo get_template_directory_uri(); ?>/img/graphic4.jpg" alt="graphic">
      </div>
    </div> 
  </section>
  <!-- /portofolio -->
  <!-- contact -->
  <section id="contact">
    <div class="container">
      <h2 class="section-title">Contact</h2>
      <div class="link-btn-contact fadein">
        <a href="<?php echo get_permalink(get_page_by_path('contact-page')->ID); ?>">link to contact form</a>
        <span class="more-arrow-l"></span>
        <span class="more-arrow-s"></span>
      </div>
      <div class="back-img contact-back">
        <img src="<?php echo get_template_directory_uri(); ?>/img/art-hands.jpg" alt="painting">
      </div>
    </div>  
  </section>
  <!-- /contact -->
</main>
<!-- /main -->

<?php get_footer(); ?>