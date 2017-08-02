<?php
/**
 * Template name: Parent page
 */

get_header('index'); ?>
  <main class="main post-main main-inner" role="main">  
    <h1 class="post-inner__ttl"><?php the_title(); ?></h1>
    <?php get_sidebar('inner'); ?>
      <section class="content" data-block="block-1">
        <?php $_childs = getChilds($post->ID); if ($_childs->have_posts()) : ?>
        <?php while ($_childs->have_posts()) : $_childs->the_post(); ?>
        <article class="post-inner">
          <!-- <article class="post post-experts"> -->
        <header>
              <div class="person__img">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(80, 80)) ?></a>
              </div>
              <p class="person">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?><br>
                <?php echo get_post_meta($post->ID, "position", $single = true); ?></a>
              </p>
        </header>
        <div class="post__content">
        <p>
          <?php the_field('entry');?>
        </p>
        </div>
        <nav class="social">
              <?php if(get_post_meta($post->ID, "linkedin", $single = true)): ?>
              <a href='<?php echo get_post_meta($post->ID, "linkedin", $single = true); ?>' target="_blank">
                <svg class="icon">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-ln"></use>
                </svg>
            </a>
        <?php endif; ?>
        <?php if(get_post_meta($post->ID, "facebook", $single = true)): ?>
              <a href='<?php echo get_post_meta($post->ID, "facebook", $single = true); ?>' target="_blank">
                <svg class="icon">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-fc"></use>
                </svg>
              </a>
        <?php endif; ?>
        <?php if(get_post_meta($post->ID, "twitter", $single = true)): ?>
              <a href='<?php echo get_post_meta($post->ID, "twitter", $single = true); ?>' target="_blank">
                <svg class="icon">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-tw"></use>
                </svg>
              </a>
        <?php endif; ?>
          </nav>
        <!-- </article> -->
        </article>
        <?php endwhile; ?>
    <?php endif; ?>
    </section>  
    <section class="sidebar">
      
      <?php get_template_part('parts/block-feautured'); ?>
    </section>    
  </main>      

<?php get_footer(); ?>
