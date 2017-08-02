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
  <main class="main post-main main-inner post-page" role="main">  
    <h1 class="post-inner__ttl"><?php the_title(); ?></h1>
    <?php get_sidebar('inner'); ?>
      <section class="content" data-block="block-1">
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <article class="post-inner">
          
          <div class="post__image">
            <?php the_post_thumbnail( array(600, 400)) ?>
          </div>
          <div class="post__content">
            <?php the_content(); ?>
          </div>
          <?php if(get_post_meta($post->ID, "linkedin", $single = true) || get_post_meta($post->ID, "facebook", $single = true) || get_post_meta($post->ID, "twitter", $single = true)): ?>
            <nav class="social">
              <a href='<?php echo get_post_meta($post->ID, "linkedin", $single = true); ?>' target="_blank">
                <svg class="icon">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-ln"></use>
                </svg>
            </a>
              <a href='<?php echo get_post_meta($post->ID, "facebook", $single = true); ?>' target="_blank">
                <svg class="icon">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-fc"></use>
                </svg>
              </a>
              <a href='<?php echo get_post_meta($post->ID, "twitter", $single = true); ?>' target="_blank">
                <svg class="icon">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-tw"></use>
                </svg>
              </a>
          <?php endif ?>
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
