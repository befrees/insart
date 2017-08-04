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

get_header('index'); ?>
  <main class="main post-main main-inner" role="main">  
    <h1 class="post-inner__ttl"><?php single_term_title(); ?></h1>
    <?php get_sidebar('inner'); ?>
      <section class="content">
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <article class="post">
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
    <?php endif; ?>
    </section>  
    <section class="sidebar">
      
      <?php get_template_part('parts/block-feautured'); ?>
    </section>    
  </main>      

<?php get_footer(); ?>
