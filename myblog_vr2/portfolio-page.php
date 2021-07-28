<?php get_header(); ?>

<!-- main -->
<main>
  <section id="portfolio-page">
    <div class="container">    
      <div class="section-wrapper">
        <h3 class="section-title">
          <span class="slush">＼  </span>
          <span>W</span>orks
          <span class="slush">  ／</span>
        </h3>

        <div class="section-contents">
          <?php
            $paged = get_query_var('paged', 1);
            $pf_args = array(
              'paged' => $paged,
              'posts_per_page' => '6',
              'post_status' => 'publish',
              'post_type' => 'pf',
              'orderby' => 'date',
              'order' => 'DESC'
            );

            $pf_query = new WP_Query($pf_args);
            if ( $pf_query->have_posts() ) :
              while ( $pf_query->have_posts() ) : $pf_query->the_post();
          ?>
                <div class="item">
                  <a href="<?php echo get_field('works-url'); ?>">
                    <div class="item-img">
                      <img src="<?php echo get_field('works-image'); ?>" alt="works">
                    </div>
                    <h4><?php echo get_field('works-title') ?></h4>
                    <p class="works-description"><?php echo get_field('works-description'); ?></p>
                </a>      
              </div>
          <?php
              endwhile; 
            endif;
          ?>
        </div>
      </div>
      <?php get_sidebar(); ?>
    </div>  
    
  </section>
</main>
<!-- / main -->
<?php get_footer(); ?>  