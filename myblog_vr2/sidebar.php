<section id="sidebar">
  <!-- category -->
  <div class="category">
    <img src="<?php echo get_template_directory_uri(); ?>/image/smartphone.png" alt="smartphone">
    <h4 class="sidebar-title">Category</h4>
    <div class="sidebar-wrapper">
      <?php
        $args = array(
          'type' => 'post',
          'orderby' => 'count',
          'order' => 'DESC'
        );

        $categories = get_categories($args);
        foreach( $categories as $category) :
      ?>
          <li>
            <a href="<?php echo get_category_link($category->term_id); ?>">
              <?php echo $category->name ?>
            </a>
          </li>
      <?php 
        endforeach;
        wp_reset_postdata();
      ?>
    </div>        
  </div>
  <!-- / category -->
  <!-- archive -->
  <div class="archive">
    <img src="<?php echo get_template_directory_uri(); ?>/image/clock.png" alt="clock">
    <h4 class="sidebar-title">Archive</h4>
    <div class="sidebar-wrapper">
        <?php
          $args = array(
            'type' => 'monthly',
            'limit' => '10',
            'order' => 'DESC',
            'post_type' => 'post'
          );
          wp_get_archives($args);
        ?>  
    </div>
  </div>
  <!-- / archive -->
  <!-- profile -->
  <div class="profile">
    <img src="<?php echo get_template_directory_uri(); ?>/image/pc.png" alt="pc">
    <h4 class="sidebar-title">Profile</h4>
    <div class="sidebar-wrapper">
        <h4><?php the_author(); ?></h4>
        <p><?php the_author_meta('user_description'); ?></p>
    </div>
  </div>
  <!-- / profile -->
</section>