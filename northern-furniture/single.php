<?php get_header(); ?>

<!-- 投稿データの判定 -->
<?php
  $posttype = get_post_type();

  if ( $posttype !== "post"):
    get_template_part($posttype, "single");
  elseif ( $posttype == "post"):
?>

<?php
if ( have_posts() ) :
  while ( have_posts() ) : the_post();
?>

<!-- main -->
<main>
  <!-- main visual -->
  <div id="mv">
    <img src="<?php echo get_template_directory_uri(); ?>/furniture-img/interior-image4.jpg" alt="interior">
  </div>
  <!-- /main visual -->
  <section id="news-article-wrapper" class="container">
    <article>
      <div class="article-img">
        <?php
          if ( has_post_thumbnail()) :
            the_post_thumbnail();
          endif;
        ?>
      </div>
      <div class="article-inner">
        <div class="article-top">
          <p class="article-day">2021.05.01</p>
          <h3 class="article-title"><?php the_title(); ?></h3>
        </div>
        <div class="article-text">
          <?php the_content(); ?>
        </div>
      </div>
    </article>
    <div class="pagenation-single">
      <?php
      previous_post_link('＜ %link', 'BACK');
      next_post_link('%link ＞', 'NEXT');
    ?> 
    </div>
     
  </section>
</main>

<?php
  endwhile;
endif;
?>      

<?php endif; ?>
<?php get_footer(); ?>