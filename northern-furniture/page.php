<?php echo get_header(); ?>

<?php
  //お知らせページならnews-page.phpを読み込む
  if ( is_page("news") ) : 
    get_template_part('news', 'page'); 
  elseif ( is_page("companypage") ) :
    get_template_part('company', 'page');
  elseif ( is_page("contactpage") ) :
    get_template_part('contact', 'page');
  elseif ( is_page("chairpage") ) :
    get_template_part('chair', 'page');
  elseif ( is_page("tablepage") ) :
    get_template_part('table', 'page');
  elseif ( is_page("bedpage") ):
    get_template_part('bed', 'page');
  elseif ( is_page("otherspage") ):
    get_template_part('others', 'page');    
  else :
  ?>

  <?php
  if ( have_posts() ) :
    while ( have_posts()) : the_post();
      the_content();
    endwhile;  
  endif;
  ?>
<?php endif; ?>
<?php echo get_footer(); ?>