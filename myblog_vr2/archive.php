<?php get_header(); ?>

<!-- main -->
<main>
  <section id="blog-archive-page">
    <div class="container">    
      <div class="section-wrapper">
        <h3 class="section-title">
          <span class="slush">＼  </span>
          <span>B</span>log 
          <span class="slush">  ／</span>
        </h3>
        <div class="sub-title">
          <h4><?php echo get_the_date('Y年m月') ?></h4>
        </div>
        <div class="section-contents">
          <?php
            if ( have_posts() ) :
              while ( have_posts() ) : the_post();
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

        <div class="pagination-page">
          <?php wp_pagenavi(); ?>
        </div>

      </div>
      <?php get_sidebar(); ?>
    </div>  
    
  </section>
</main>
<!-- / main -->
<?php get_footer(); ?>  