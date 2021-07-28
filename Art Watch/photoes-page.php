<?php get_header(); ?>

<main>
  <div class="header-block"></div>

  <section id="paintingspage" class="page">
  <div class="container">
    <div class="page-title">
      <div class="section-title">Portfolio</div>
      <div class="section-title-category">-photoes</div>
    </div>
    
    <div class="pfpage-content fadein-page">
      
<?php
  $paged = get_query_var('paged', 1);
  $photoes_args = array(
    'paged' => $paged,
    'posts_per_page' => '6',
    'post_status' => 'publish',
    'post_type' => 'photoes',
    'orderby' => 'date',
    'order' => 'DESC'
  );

  $photoes_query = new WP_Query($photoes_args);
  if ( $photoes_query->have_posts() ) :
    while( $photoes_query->have_posts() ) : $photoes_query->the_post();
?>

      <div class="pf-item">
        <a href="<?php echo get_permalink(); ?>">
          <div class="pf-img">
            <img src="<?php echo get_field('image'); ?>" alt="painting">
          </div>
          <p><?php echo get_field('work-title'); ?></p>
        </a>
      </div>

<?php
    endwhile;
  endif;  
?>   
            <?php
                wp_pagenavi(array('query' => $photoes_query));
                wp_reset_postdata();
            ?> 

  </div>
  </div>  
  
  </section>
</main>