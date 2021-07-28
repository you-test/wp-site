<?php get_header(); ?>

<?php
  if ( have_posts() ) :
    while ( have_posts() ) : the_post() ;
?>

<main>
    <div class="header-block" class="page"></div>
    <section id="pf-single">
      <div class="container">
        <div class="page-title">
          <div class="section-title">Portfolio</div>
          <div class="section-title-category">-photoes</div>
        </div>
        <h3 class="fadein-single"><?php echo get_field('work-title'); ?></h3>
        <p class="fadein-single"><?php echo get_field('detail'); ?></p>
        <div class="pf-single-img fadein-single">
          <img src="<?php echo get_field('image'); ?>" alt="painting">
        </div>
      </div>
    </section>
</main>

<?php
    endwhile;
  endif;
?>    

<?php get_footer(); ?>