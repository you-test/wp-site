<?php get_header(); ?>

<!-- main -->
<main>
  <section id="top-page">
    <div class="container">    
      <div class="section-wrapper">
        <h3 class="section-title">
          <span class="slush">＼  </span>
          <span>N</span>ew <span>B</span>log
          <span class="slush">  ／</span>
        </h3>

        <div class="section-contents">
          <?php
            $paged = get_query_var('paged', 1);
            $news_args = array(
              'paged' => $paged,
              'posts_per_page' => '6',
              'post_status' => 'publish',
              'post_type' => 'post',
              'orderby' => 'date',
              'order' => 'DESC'
            );

            $news_query = new WP_Query($news_args);
            if ( $news_query->have_posts() ) :
              while ( $news_query->have_posts() ) : $news_query->the_post();
          ?>
                <div class="item">
                  <a href="<?php echo get_permalink(); ?>">
                    <div class="item-img">
                      <?php if ( has_post_thumbnail() ) :
                        the_post_thumbnail();
                      endif; ?>  
                    </div>
                    <h4><?php the_title(); ?></h4>
                    <p class="post-time"><?php the_time('Y-m-d'); ?></p>
                </a>      
              </div>
          <?php
              endwhile; 
            endif;
          ?>
        </div>
        <a href="<?php echo get_permalink(get_page_by_path('blog')->ID); ?>" class="more-btn">more</a>
      </div>
      <?php get_sidebar(); ?>
    </div>  
    
  </section>
</main>
<!-- / main -->
<?php get_footer(); ?>  