    
    
   <?php if(have_posts()): ?>
    <?php while(have_posts()):the_post(); ?>

    <div class="col">
      <div class="card shadow-sm">
       <a href="<?php echo the_permalink(); ?>">
          <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Post Image" width="100%" height="225"/>
        </a>
        <div class="card-body">
          <p class="card-title fs-3"><?php echo get_the_title(); ?></p>
          <p class="card-text"><?php echo get_the_excerpt(); ?></p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
              <?php get_template_part('templates/template-parts/post', 'categories')?>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
    
    
    

    <?php endwhile; ?>
    <?php else: ?>
    <?php echo wpautop('Sorry, No Posts were found...'); ?>
    <?php endif; ?> 


    
    
    
    