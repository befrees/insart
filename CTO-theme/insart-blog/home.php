<?php

$about_page = get_page(129 );;

get_header(); ?>
<!-- home page -->
  <div class="promo">
    <div class="promo__inner">
      <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
      <h1 class="promo__ttl"><?php the_title(); ?></h1>
      <h6><?php echo get_post_meta($post->ID, "caption", $single = true); ?></h6>
      <div class="form-controls controls-promo">
      <?php get_template_part('parts/form-1'); ?>
      <?php //echo do_shortcode('[mailpoet_form id="1"]'); ?>
        <?php /*query_posts(array('post_type' => 'post', 'page_id'=> 54));?>
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <?php the_content();?>
            <?php endwhile; ?>
          <?php endif; ?>
        <?php wp_reset_query();*/ ?>
      </div>
      <?php endwhile; ?>
    <?php endif; ?>
    </div>
    <button type="button" class="btn btn--has-icon btn-to-bottom" data-ui="to-bottom">
      <svg class="icon">
        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-down-ar"></use>
      </svg>
  </button>
  </div>
  <main class="main" role="main">
    <?php get_sidebar(); ?>
    <section class="content post-custom-container" id="main" data-block="block-1">
    <div class="news-home">
      
        <?php 
        $p = $_GET['p'] ? $_GET['p'] : 0;
        $offset = $_GET['offset'] ? $_GET['offset'] : 0;
        $per_page = isset($_GET['per_page']) ? $_GET['per_page'] : 6;
        // echo $per_page;
        $_posts = new WP_Query('cat=2&posts_per_page='.$per_page.'&offset='.$offset); 
        $_posts2 = new WP_Query('cat=2&posts_per_page='.($per_page+1).'&offset='.$offset); 
        // print_r($_posts2);
        //echo $_posts2->post_count;
        while ($_posts->have_posts()) : $_posts->the_post(); ?>

         <article class="post post-news-item post-<?php the_id(); ?>">
            <header class="post__header">
              <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
              <p>
                <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('j F Y'); ?></time>
                <span class="author"><?php echo get_post_meta($post->ID, "post-author", $single = true); ?></span>
              </p>
            </header>
            <div class="post__image">
              <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail( array(800, 600)) ?></a>
            </div>
            <div class="post__content">
              <p>
                <?php the_excerpt(); ?>
              </p>
            </div>
             <a href="<?php echo get_permalink(); ?>" class="more"> > More details</a>
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
      <a href="<?php echo get_category_link(2) ?>" class="btn btn--L btn-more-post view-more _post-load">More Posts</a>

    <?php endif; ?>
    </section>
    <section class="sidebar">
      <div class="about" data-block="block-4">
        <h2 class="sidebar__ttl"><a href="<?php echo get_permalink($about_page->ID ); ?>"><?php echo $about_page->post_title; ?></a></h2>
           <article class="post">
              <header>
                <div class="">
                  <a href="<?php echo get_permalink($about_page->ID ); ?>"><img src="<?php echo get_the_post_thumbnail_url($about_page->ID, array(800, 600)) ?>" ></a>
                </div>
              </header>
              <div class="post__content">
                <p>
                  <?php the_field('entry', $about_page->ID);?>
                </p>
              </div>
              <nav class="social">
                <a href='<?php echo get_post_meta($about_page->ID, "linkedin", $single = true); ?>' target="_blank">
                  <svg class="icon">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-ln"></use>
                  </svg>
                </a>
                <a href='<?php echo get_post_meta($about_page->ID, "facebook", $single = true); ?>' target="_blank">
                  <svg class="icon">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-fc"></use>
                  </svg>
                </a>
                <a href='<?php echo get_post_meta($about_page->ID, "twitter", $single = true); ?>' target="_blank">
                  <svg class="icon">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-tw"></use>
                  </svg>
                </a>
              </nav>
              <a href="<?php echo get_permalink($about_page->ID) ?>" class="more"> > More Details</a>
            </article>
      </div> 
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
