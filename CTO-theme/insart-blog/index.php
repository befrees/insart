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
    <h1 class="post-inner__ttl"><?php the_title(); ?></h1>
    <?php get_sidebar('inner'); ?>
      <section class="content" data-block="block-1">
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <article class="post-inner">
          <header class="post__header">
            <p>
            <time datetime="2017-07-25"><?php the_date('j F Y'); ?></time>
            <span class="author"><?php echo get_post_meta($post->ID, "post-author", $single = true); ?></span>
          </p>
          </header>
          <div class="post__image">
            <?php the_post_thumbnail( array(600, 400)) ?>
          </div>
          <div class="post__content">
            <?php the_excerpt(); ?>
          </div>
            <div class="footer__btns post-btns">
              <div class="btn btn--L"><?php previous_post_link('%link', 'PREVIOUS POST',  TRUE, '5,4,3'); ?></div>
              <div class="btn btn--L"><?php next_post_link( '%link', 'Next Post', TRUE, '5,4,3' ); ?></div>
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
