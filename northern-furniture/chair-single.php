<?php get_header(); ?>

<?php
if ( have_posts() ) :
  while ( have_posts() ) : the_post();
?>

<!-- main -->
<main>
  <!-- main visual -->
  <div id="mv">
    <img src="<?php echo get_template_directory_uri(); ?>/furniture-img/mirror1.jpg" alt="mirror">
  </div>
      <!-- /main visual -->
  <section id="item-article-wrapper" class="container">
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
          <h3 class="article-title"><?php echo get_field("商品名"); ?></h3>
          <p class="article-price"><?php echo get_field("商品価格"); ?></p>
        </div>
        <p class="article-text">
          <?php echo get_field("商品説明"); ?>
        </p>
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
    
<?php get_footer(); ?>