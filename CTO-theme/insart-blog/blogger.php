<?php
/*
Template Name: Blogger
*/

get_header(); ?>


<section class="content">
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
            <?php the_content(); ?>
          </div>
            <div class="footer__btns post-btns">
                  <div class="btn btn--L"><?php previous_post_link('%link', 'PREVIOUS POST',  TRUE, '5,4,3'); ?></div>
              <div class="btn btn--L"><?php next_post_link( '%link', 'Next Post', TRUE, '5,4,3' ); ?></div>
            </div>
        </article>
        <?php endwhile; ?>
    <?php endif; ?>
    </section>
<?php get_footer(); ?>