<?php get_header(); ?>

<?php
  $posttype = get_post_type();
  if ( $posttype !== 'post' ) :
    get_template_part($posttype, 'single');
  elseif ( $posttype == 'post') :
?>

<?php
  if ( have_posts() ) :
    while ( have_posts() ) : the_post() ;
?>

<main>
    <div class="header-block"></div>
    <section id="news-single" class="page">
      <div class="container">
        <div class="section-title">News</div>
        <article class="fadein-single">
          <div class="article-text">
            <p class="article-time"><?php the_time('Y-m-d'); ?></p>
            <h3><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>
          </div>
          <div class="article-img">
            <?php 
            if ( has_post_thumbnail() ) :
              the_post_thumbnail() ;
            endif;  
            ?>
          </div>
        </article>
        <div class="pagenation-single">
          <?php
          previous_post_link('＜ %link', 'BACK');
          next_post_link('%link ＞', 'NEXT');
        ?> 
        </div>

      </div>
    </section>

</main>

<?php 
    endwhile; 
  endif; ?>

<?php endif; ?>

<?php get_footer(); ?>