<?php get_header(); ?>

<main>
  <div class="header-block"></div>

  <section id="graphicspage" class="page">
  <div class="container">
    <div class="page-title">
      <div class="section-title">Portfolio</div>
      <div class="section-title-category">-graphics</div>
    </div>
    
    <div class="pfpage-content fadein-page">
      
<?php
  $paged = get_query_var('paged', 1);
  $graphics_args = array(
    'paged' => $paged,
    'posts_per_page' => '6',
    'post_status' => 'publish',
    'post_type' => 'graphics',
    'orderby' => 'date',
    'order' => 'DESC'
  );

  $graphics_query = new WP_Query($graphics_args);
  if ( $graphics_query->have_posts() ) :
    while( $graphics_query->have_posts() ) : $graphics_query->the_post();
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
                wp_pagenavi(array('query' => $graphics_query));
                wp_reset_postdata();
            ?> 

  </div>
  </div>  
  
  </section>
</main>