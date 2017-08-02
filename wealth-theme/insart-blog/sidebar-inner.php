<?php

/**
 * Sidebar Influence
 */

?>
	<section class="sidebar" data-block="block-2">
      <h2 class="sidebar__ttl">Join club</h2>
      <div class="promo__controls sidebar__controls">
        <?php /*query_posts(array('post_type' => 'post', 'page_id'=> 54));?>
            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>
                <?php the_content();?>
              <?php endwhile; ?>
            <?php endif; ?>
          <?php wp_reset_query();*/ ?>
          <?php //echo do_shortcode('[mailpoet_form id="1"]'); ?>
          <?php get_template_part('parts/form-1'); ?>
        </div>
        <?php get_template_part('parts/block-industry'); ?>
	<?php get_template_part('parts/block-tags'); ?>
		<?php
			if (!dynamic_sidebar('left-sidebar')) {
					echo '<!-- left-sidebar -->';
			}
			?>
</section>
