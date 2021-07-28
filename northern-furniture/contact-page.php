<?php get_header(); ?>
<!-- main -->
<main>

<!-- main visual -->
<div id="mv">
  <img src="<?php echo get_template_directory_uri(); ?>/furniture-img/spoon1.jpg" alt="spoon">
</div>
<!-- /main visual -->

<!-- news page -->
<section id="contact-list" class="container">
  <h2 class="section-title">CONTACT</h2>
  <form action="">
    <?php echo do_shortcode('[contact-form-7 id="108" title="contact"]'); ?>
  </form>
</section> 
<!--/news page  -->

</main>  

<?php get_footer(); ?>