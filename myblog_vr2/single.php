<?php get_header(); ?>

<?php
  $posttype = get_post_type();
  if ( $posttype !== 'post') :
    get_template_part($posttype, 'single');
  elseif ( $posttype == 'post') :
?>


<main>
  <section id="single">
    <div class="container">
      <div class="section-wrapper">
        <?php
          if ( have_posts() ) :
            while ( have_posts() ) : the_post();
        ?>
          <div class="single-title">
            <h1><?php the_title(); ?></h1>
            <div class="title-info">
              <p><?php the_time('Y-m-d'); ?></p>
              <div class="single-category">
                <?php 
                  $categories = get_the_category();
                  foreach ($categories as $cat) :
                ?>
                  <span><?php echo $cat->name ?></span>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
          <?php the_content(); ?>
        <?php endwhile; endif; ?>
        
          <?php 
          $pagination_args = array(
            'prev_text' => '＜ BACK',
            'next_text' => 'NEXT ＞',
          )
         ?>
         <div class="pagination-single">
           <?php the_post_navigation($pagination_args); ?>
        </div>
      </div>    
      <?php get_sidebar(); ?>
    </div>  
    
  </section>
</main>

<?php endif; ?>
<?php get_footer(); ?>