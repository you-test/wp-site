<?php echo get_header(); ?>

<?php
if ( is_page('news-page') ) :
    get_template_part('news', 'page');
elseif ( is_page('paintings-page') ) :
    get_template_part('paintings', 'page');
elseif ( is_page('graphics-page') ) :
    get_template_part('graphics', 'page');
elseif ( is_page('photoes-page') ) :
    get_template_part('photoes', 'page');
elseif ( is_page('contact-page') ) :
    get_template_part('contact', 'page');
else :
?>            

<?php
    if ( have_posts() ) :
        while( have_posts() ) : the_post();

        the_content();

        endwhile;
    endif
?>    

<?php endif; ?>

<?php echo get_footer(); ?>