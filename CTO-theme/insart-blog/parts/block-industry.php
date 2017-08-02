<section class="feautured-post" data-block="block-3">
        <h2 class="sidebar__ttl home-hide">CTO Insights</h2>
        <?php $_posts = new WP_Query('cat=70&posts_per_page=-1');
       
        $i=0;
        while ($_posts->have_posts()) : 
          $_posts->the_post();
          $i++;
           if($i==4):
       ?>
       <div class="hidden-block hidden-industry-post" id="hidden-industry-post">
      <?php endif; ?>
        <article class="industry-item">
          <header>
             <?php //the_post_thumbnail( array(320, 140))
             $img = get_field('image'); ?>
             <img src="<?php echo wp_get_attachment_image_url($img['id'], 'img_80_80') ?>" alt="" class="circle-img">
            <h4><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?><br>
            <?php if(get_field('post')) the_field('post') ?></a></h4>
            <p class="publish-post">
              <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('j F Y'); ?></time>
               | <span class="author"><?php echo get_post_meta($post->ID, "post-author", $single = true); ?></span>
            </p>
          </header>
          <div class="post__content">
          
              <?php the_field('entry');?>

            <a href="<?php echo get_permalink(); ?>" class="more"> // Read More</a>
            <?php if(get_field('link_in') || get_field('link_fb') || get_field('link_tw')): ?>
              <div class="soc-expert">
                <?php if(get_field('link_in')): ?>
                  <a href="<?php the_field('link_in') ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                  <?php endif; ?>
                <?php if(get_field('link_fb')): ?>
                  <a href="<?php the_field('link_fb') ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                  <?php endif; ?>
                <?php if(get_field('link_tw')): ?>
                  <a href="<?php the_field('link_tw') ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                  <?php endif; ?>
              </div>
            <?php endif; ?>
          </div>  
          </article>
        <?php endwhile; ?>
      <?php if($i>=4): ?>
      </div> <!-- .hidden-block -->
      <button class="btn open-hidden-block view-more" data-target="#hidden-industry-post" data-open="VIEW LESS" data-close="VIEW MORE">VIEW MORE</button><br><br>
    <?php endif; ?>
      </section>