
<div class="__block experts-block">
	<h2 class="sidebar__ttl">Our Experts</h2>
		<?php 
		$experts = getChilds();
		$i=0; 
		while ($experts->have_posts()) : 
			$experts->the_post();
			$i++;
			if($i==4):
			 ?>
			 <div class="hidden-block hidden-experts" id="hidden-experts">
			<?php endif; ?>
			 <article class="post post-experts">
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
        </article>
		<?php endwhile; ?>
		<?php if($i>=4): ?>
			</div> <!-- .hidden-experts -->
			<button class="btn open-hidden-block view-more" data-target="#hidden-experts" data-open="VIEW LESS" data-close="VIEW MORE">VIEW MORE</button>
		<?php endif; ?>
		</div>