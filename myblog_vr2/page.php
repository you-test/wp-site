<?php get_header(); ?>

<?php
  if (is_page('blog')): 
    get_template_part('blog', 'page');
  elseif (is_page('portfolio')):
    get_template_part('portfolio', 'page');  
  elseif (is_page('contact')):
    get_template_part('contact', 'page');
  else:    
?>

<?php
  if ( have_posts() ) :
    while ( have_posts() ) : the_post();

    the_content();

    endwhile;
  endif;
?>

<?php endif; ?>


<?php get_footer(); ?>