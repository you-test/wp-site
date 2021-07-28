<?php get_header(); ?>

<main>
    <div class="header-block"></div>
    
    <section id="newspage" class="page">
    <div class="container">
        <div class="section-title">News</div>

        <div class="news-content fadein-page">
            <dl>

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
        while( $news_query->have_posts() ) : $news_query->the_post();
?>        
                <a href="<?php echo get_permalink(); ?>">
                    <dt><?php the_time('Y-m-d'); ?></dt>
                    <dd><?php the_title(); ?></dd>
                </a>                   
<?php
        endwhile;
    endif;
?>
            </dl>

            <?php
                wp_pagenavi(array('query' => $news_query));
                wp_reset_postdata();
            ?>  
        </div>

        

        <div class="back-img news-page-back1">
            <img src="<?php echo get_template_directory_uri() ?>/img/graphic4.jpg" alt="graphic">
        </div>
    </div>    
    </section>
    

</main>



<?php get_footer(); ?>