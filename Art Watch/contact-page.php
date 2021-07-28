<?php get_header(); ?>

<main>
  <div class="header-block"></div>
  <section id="contactpage" class="page">
    <div class="container">
      <div class="section-title">Contact</div>
      <div class="form-wrapper fadein-page">
      <?php echo do_shortcode('[contact-form-7 id="152" title="contact-artwatch"]'); ?>
      </div>
    </div>
    <div class="back-img">
      <img src="<?php echo get_template_directory_uri(); ?>/img/graphic1.jpg" alt="graphic">
    </div>
  </section>
</main>

<?php get_footer(); ?>