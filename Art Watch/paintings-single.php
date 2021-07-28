<?php get_header(); ?>

<?php
  if ( have_posts() ) :
    while ( have_posts() ) : the_post() ;
?>

<main>
    <div class="header-block"></div>
    <section id="pf-single" class="page">
      <div class="container">
        <div class="page-title">
          <div class="section-title">Portfolio</div>
          <div class="section-title-category">-paintings</div>
        </div>
        <h3 class="fadein-single"><?php echo get_field('work-title'); ?></h3>
        <p class="fadein-single"><?php echo get_field('detail'); ?></p>
        <div class="pf-single-img fadein-single">
          <img src="<?php echo get_field('image'); ?>" alt="painting">
        </div>
      </div>
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