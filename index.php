<?php get_header(); ?>

<main>
  <section class="py-5 text-center container border showcase">
    <?php if(get_theme_mod('header_image')): ?>
      <img src="<?php echo esc_url(get_theme_mod('header_image')) ?>" alt="banner area" >
      <?php endif;?>

    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <?php if(get_theme_mod('header_text_field')): ?>
          <h1 class="fw-light">
            <?php echo get_theme_mod('header_text_field') ?> 
          </h1>
          <?php endif;?>

          <?php if(get_theme_mod('header_desc_field')): ?>
            <p class="lead text-muted">
              <?php echo get_theme_mod('header_desc_field') ?> 
          </p>
          <?php endif;?>

          <a href="<?php echo get_theme_mod('header_btn_url') ?>" class="btn btn-primary my-2">
            <?php echo get_theme_mod('header_btn_text') ?>
          </a>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <?php get_template_part('templates/template-parts/post', 'content')?>
      </div>
    </div>
  </div>

  </main>

<?php get_footer(); ?>
