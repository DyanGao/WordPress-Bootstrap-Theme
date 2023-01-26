<?php get_header(); ?>

<main>
  
    <div class="container">
     <p class="card-title fs-1 text-center"><?php echo get_the_title(); ?></p>
    <?php if(have_posts()): ?>
    <?php while(have_posts()):the_post(); ?>

    <div class="col">
      <div class="card shadow-sm">
       <a href="<?php echo the_permalink(); ?>">
          <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Post Image" width="100%"/>
        </a>
        <div class="card-body">
          
          <p class="card-text"><?php echo get_the_content(); ?></p>
          
        </div>
      </div>

    
    
    
    
    

    <?php endwhile; ?>
    <?php else: ?>
    <?php echo wpautop('Sorry, No Posts were found...'); ?>
    <?php endif; ?> 
      </div>
    </div>


  </main>

<?php get_footer(); ?>
