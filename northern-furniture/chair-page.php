<!-- main -->
<main>
<!-- main visual -->
<div id="mv">
  <img src="<?php echo get_template_directory_uri(); ?>/furniture-img/chair1.jpg" alt="chair">
</div>
<!-- /main visual -->

<!-- news page -->
<section id="item-list" class="container">
  <h2 class="section-title">chair</h2>
  <div class="contents">

  <?php
     $paged = get_query_var('paged') ?: 1; //ページネーションを使いたいなら指定
     $args = array(
      'paged' => $paged, //ページネーションを使いたいなら指定
      'posts_per_page' => 6, //３記事のみ出力
      'post_status' => 'publish', //公開の記事だけ
      'post_type' => 'chair', //カスタム投稿slag
      'orderby' => 'date', //日付を出力する基準
      'order' => 'DESC' //表示する順番（逆はASC）                      
     );
                            
     $chair_query = new WP_Query( $args );
     if ( $chair_query->have_posts() ) :
     ?>
                    
     <?php global $previousday; //この表記と$previousday = '';で同じ日付の投稿でも表示される
       while ( $chair_query->have_posts() ) : $chair_query->the_post();
       $previousday = '';
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
        <p class="item-name"><?php echo get_field("商品名"); ?></p>
        <p class="item-price"><?php echo get_field("商品価格"); ?></p>
      </a>
    </div>
    <?php //-------- 繰り返しここまで-----------
     endwhile; ?>
                    
     <?php //-------- WP_query終了-----------
                 wp_reset_postdata();      
     endif; ?>
  </div>
  <?php
      wp_pagenavi(array('query' => $chair_query));
      wp_reset_postdata();
    ?>  
</section> 
<!--/news page  -->
<!-- pagenation -->


</main>  

