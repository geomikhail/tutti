<?php global $post_query_category, $post_layout, $display_content, $hide_title, $unlink_title, $hide_meta, $hide_date, $hide_image, $image_width, $image_height, $height, $width; ?>

<!-- post-video -->
<div class="post-video">
	<?php echo apply_filters('the_content', themify_get("video_url")); ?>
</div>
<!-- /post-video -->

<!-- post-content -->
<div class="post-content">
	<?php if($display_content == 'excerpt'): ?>
	
		<?php the_excerpt(); ?>
	
	<?php elseif($display_content == 'none'): ?>
	
	<?php else: ?>
	
		<?php the_content(__((themify_check('setting-default_more_text')) ? themify_get('setting-default_more_text') : 'Больше &rarr;','themify')); ?>
	
	<?php endif; ?>
</div>
<!-- /post-content -->