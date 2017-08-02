<div class="__block tags-block">
			<h2 class="block__ttl">Tags & Labels</h2>
			<?php $tags = get_tags(); ?>
			 <ul>
			 	<?php /*if($tags): foreach($tags as $tag): ?>
			 		<li><a href="/<?php echo $tag->slug ?>"><?php echo $tag->name ?></a></li>
			 	<?php endforeach; endif;*/ ?>
			 	<?php wp_list_categories('taxonomy=post_tag&hide_empty=1&title_li=') ?>
			 </ul>
		</div>