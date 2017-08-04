<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
$cat_cto = 70;
?>
<?php get_header(); ?>
<?php //die('arch'); ?>
  <main class="main post-main main-inner" role="main">  
    <h1 class="post-inner__ttl"><?php single_term_title(); ?></h1>
    <?php get_sidebar('inner'); ?>
      <section id="main" class="content">
      <div class="news-home">
        <?php

        $cat_ID = get_query_var('cat');
        $default_per_page = $cat_ID == $cat_cto ? 2 : 3;

        $p = $_GET['p'] ? $_GET['p'] : 0;
        $offset = $_GET['offset'] ? $_GET['offset'] : 0;
        $per_page = isset($_GET['per_page']) ? $_GET['per_page'] : $default_per_page;
        // echo $per_page;
        $_posts = new WP_Query('cat='.$cat_ID.'&posts_per_page='.$per_page.'&offset='.$offset); 
        $_posts2 = new WP_Query('cat='.$cat_ID.'&posts_per_page='.($per_page+1).'&offset='.$offset); 
        // print_r($_posts2);
        //echo $_posts2->post_count;

         if ($_posts->have_posts()) : ?>
        <?php while ($_posts->have_posts()) : $_posts->the_post(); ?>
        <article class="post post-news-item">
              <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?><?php if(get_field('post')) {
                echo "<br>";
                the_field('post');
                } ?></a></h2>
              <p class="publish-post">
                <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('j F Y'); ?></time>
                <span class="author"><?php echo get_post_meta($post->ID, "post-author", $single = true); ?></span>
              </p>
                
            <header class="post__header">
              <?php if($cat_ID == $cat_cto && $img = get_field('image')): ?>
              <img src="<?php echo wp_get_attachment_image_url($img['id'], 'img_80_80') ?>" alt="" class="circle-img expert-img">
            <?php else: ?>
              <div class="post__image">
              <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail( array(800, 600)) ?></a>
            </div>
              <?php endif; ?>
              <br>
            </header>
            <div class="post__content">
              <p>
                <?php the_excerpt(); ?>
              </p>
            </div>
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
            <?php if($cat_ID != $cat_cto): ?>
             <div class="post-tags">
               <?php 
               $posttags = get_the_tags();
                if ($posttags) {
                  foreach($posttags as $tag) { ?>
                  <a href="<?php echo get_category_link($tag->term_id) ?>"><?php echo $tag->name ?></a>
                 <?php }
                } ?>
             </div>
            <?php endif; ?>
          </article>
        <?php endwhile; ?>
    <?php endif; ?>
    </div>
    <?php if($_posts2->post_count > $_posts->post_count): ?>
      <a href="<?php echo get_category_link($cat_ID) ?>" class="btn btn--L btn-more-post view-more _post-load">More Posts</a>

    <?php endif; ?>
    </section> 

    <section class="sidebar">
      
      <?php get_template_part('parts/block-feautured'); ?>
    </section>    
  </main>      

<?php get_footer(); ?>
