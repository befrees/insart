<?php

$about_page = get_page(129 );;

get_header('front'); ?>
<!-- front page -->

  <main class="main" role="main">
    <?php get_sidebar(); ?>
    <section class="content post-custom-container" id="main" data-block="block-1">
    <div class="news-home">
      
        <?php 
        $p = $_GET['p'] ? $_GET['p'] : 0;
        $offset = $_GET['offset'] ? $_GET['offset'] : 0;
        $per_page = isset($_GET['per_page']) ? $_GET['per_page'] : 2;
        $cat_ID = isset($_GET['c']) ? $_GET['c'] : 2 ;
        // echo $per_page;
        $_posts = new WP_Query('cat='.$cat_ID.'&posts_per_page='.$per_page.'&offset='.$offset); 
        $_posts2 = new WP_Query('cat='.$cat_ID.'&posts_per_page='.($per_page+1).'&offset='.$offset); 
        // print_r($_posts2);
        //echo $_posts2->post_count;
        while ($_posts->have_posts()) : $_posts->the_post(); ?>

         <article class="post post-news-item post-<?php the_id(); ?>">
            <header class="post__header">
              <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
              <p class="publish-post">
                <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('j F Y'); ?></time>
                 | <span class="author"><?php echo get_post_meta($post->ID, "post-author", $single = true); ?></span>
              </p>
            </header>
            <div class="post__image">
              <?php the_post_thumbnail( array(800, 600)) ?>
            </div>
            <div class="post__content">
              
               <?php the_excerpt(); ?>
              
            </div>
             <a href="<?php echo get_permalink(); ?>" class="more"> // Read More</a>
             <div class="post-tags">
               <?php 
               $posttags = get_the_tags();
                if ($posttags) {
                  foreach($posttags as $tag) { ?>
                  <a href="<?php echo get_category_link($tag->term_id) ?>"><?php echo $tag->name ?></a>
                 <?php }
                } ?>
             </div>
          </article>
        <?php endwhile; ?>
      
    </div>
    <?php if($_posts2->post_count > $_posts->post_count): ?>
      <a href="/" data-cat="<?php echo $cat_ID ?>" data-offset="<?php echo $offset ?>" class="btn btn--L btn-more-post view-more _post-load">More Posts</a>

    <?php endif; ?>
    </section>
    <section class="sidebar">
      <?php get_template_part('parts/block-feautured'); ?>
      
    </section>  
    <section class="contacts" data-block="block-5">
      <div class="contacts__inner">
        <?php query_posts(array('post_type' => 'post', 'page_id'=> 45
            ));?>
          <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
          <h4 class="contacts__ttl"><?php the_title(); ?></h4>
          <div class="contacts__box">
            <div class="contacts__box-inner">
              <?php the_content(); ?>
                 <p>
                   <a href="mailto:<?php echo get_post_meta($post->ID, "main-email", $single = true); ?>"><?php echo get_post_meta($post->ID, "main-email", $single = true); ?></a>
                 </p>
                 <p>
                   <a href="tel: <?php echo get_post_meta($post->ID, "main-phone", $single = true); ?>" class="clear-link">P: <?php echo get_post_meta($post->ID, "main-phone", $single = true); ?></a>
                 </p>
              <?php endwhile; ?>
              <?php endif; ?>
            <?php wp_reset_query(); ?>
          </div>
        </div>
      </div>
      <footer>
        <a href="<?php echo get_home_url(); ?>" class="contacts-logo">
          <img src="<?php bloginfo('template_url'); ?>/build/images/logo-bottom.svg" alt="logo">
        </a>
        <div class="copyright">
          <span> © 1993-2017 INSART Ltd. & Copyright © 2015-2017, </span><span> INSART SOFTWARE LLC. All Rights Reserved</span>
        </div>
      </footer>
    </section>  
  </main>

<?php get_footer(); ?>
