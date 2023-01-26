<?php get_header(); ?>

<main>
  
    <div class="container">
   <p class="card-title fs-1 text-center"><?php echo get_the_title(); ?></p>
        <div class="card-body">
          
          <p class="card-text"><?php echo get_the_content(); ?></p>
          
        </div>
      </div>

   


  </main>

<?php get_footer(); ?>
