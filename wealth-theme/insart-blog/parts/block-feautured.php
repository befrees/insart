<section class="feautured-post" data-block="block-3">
        <h2 class="sidebar__ttl">Featured Articles</h2>
        <?php $_posts = new WP_Query('cat=5&posts_per_page=-1');
        $i=0;
        while ($_posts->have_posts()) : 
          $_posts->the_post();
          $i++;
           if($i==4):
       ?>
       <div class="hidden-block hidden-feautured-post" id="hidden-feautured-post">
      <?php endif; ?>
        <article>
          <header>
             <?php the_post_thumbnail( array(320, 140));
            /* $img = get_field('image'); ?>
             <img src="<?php echo wp_get_attachment_image_url($img['id'], array(80,80)) ?>" alt="" class="circle-img">*/ ?>
            <h4><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
            <p>
              <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('j F Y'); ?></time>
              <span class="author"><?php echo get_post_meta($post->ID, "post-author", $single = true); ?></span>
            </p>
          </header>
          <div class="post__content">
            <p>
              <?php the_field('entry');?>
            </p>
            <a href="<?php echo get_permalink(); ?>" class="more"> > More details</a>
          </div>  
          </article>
        <?php endwhile; ?>
      <?php if($i>=4): ?>
      </div> <!-- .hidden-block -->
      <button class="btn open-hidden-block view-more" data-target="#hidden-feautured-post" data-open="VIEW LESS" data-close="VIEW MORE">VIEW MORE</button>
    <?php endif; ?>
      </section>