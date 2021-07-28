<?php get_header(); ?>

<main>
  <div class="header-block"></div>

  <section id="paintingspage" class="page">
  <div class="container">
    <div class="page-title">
      <div class="section-title">Portfolio</div>
      <div class="section-title-category">-paintings</div>
    </div>
    
    <div class="pfpage-content fadein-page">
      
<?php
  $paged = get_query_var('paged', 1);
  $paintings_args = array(
    'paged' => $paged,
    'posts_per_page' => '6',
    'post_status' => 'publish',
    'post_type' => 'paintings',
    'orderby' => 'date',
    'order' => 'DESC'
  );

  $paintings_query = new WP_Query($paintings_args);
  if ( $paintings_query->have_posts() ) :
    while( $paintings_query->have_posts() ) : $paintings_query->the_post();
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
                wp_pagenavi(array('query' => $paintings_query));
                wp_reset_postdata();
            ?> 

    </div>
  </div>  
  
  </section>
</main>