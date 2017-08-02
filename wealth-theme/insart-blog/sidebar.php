<?php

/**
 * Sidebar Influence
 */

?>
<section class="sidebar sidebar--left" data-block="block-2">
	<?php //get_template_part('parts/block-experts'); ?>
	<?php get_template_part('parts/block-industry'); ?>
	<?php get_template_part('parts/block-tags'); ?>
		<?php
			if (!dynamic_sidebar('left-sidebar')) {
					echo '<!-- left-sidebar -->';
			}
			?>
</section>
