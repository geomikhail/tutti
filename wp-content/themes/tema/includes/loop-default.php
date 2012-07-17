<?php global $post_query_category, $post_layout, $display_content, $hide_title, $unlink_title, $hide_meta, $hide_date, $hide_image, $unlink_image, $image_width, $image_height, $height, $width; ?>

<?php if ( themify_get('external_link') != ''): ?>
	<?php $link = themify_get("external_link"); ?>
<?php elseif ( themify_get('lightbox_link') != ''): ?>
	<?php $link = themify_get("lightbox_link")."' class='lightbox' rel='prettyPhoto[post]"; ?>
<?php else: ?>
	<?php $link = get_permalink(); ?>
<?php endif; ?>

<!-- post-image -->
<?php if(is_single() && $hide_image != "yes"): ?>				

	<?php if($unlink_image == "yes"):  ?>
		<?php themify_image("field_name=post_image, image, wp_thumb&setting=image_post_single&w=".$width."&h=".$height."&before=<figure class='post-image ".themify_get('setting-image_post_single_align')."'>&after=</figure>"); ?>
	<?php else: ?>
		<?php themify_image("field_name=post_image, image, wp_thumb&setting=image_post_single&w=".$width."&h=".$height."&before=<figure class='post-image ".themify_get('setting-image_post_single_align')."'><a href='".$link."'>&after=</a></figure>"); ?>
	<?php endif; ?>   

<?php elseif($post_query_category != "" && $hide_image != "yes"): ?>
				
	<?php if($unlink_image == "yes"):  ?>			
		<?php themify_image("field_name=post_image, image, wp_thumb&setting=image_post&w=".$width."&h=".$height."&before=<figure class='post-image'>&after=</figure>"); ?>
	<?php else: ?>
		<?php themify_image("field_name=post_image, image, wp_thumb&setting=image_post&w=".$width."&h=".$height."&before=<figure class='post-image'><a href='".$link."'>&after=</a></figure>"); ?>
	<?php endif; ?>   

<?php else: ?>
		
	<?php if($hide_image != "yes"): ?>
		<?php if($unlink_image == "yes"):  ?>		
			<?php themify_image("field_name=post_image, image, wp_thumb&setting=image_post&w=".$width."&h=".$height."&before=<figure class='post-image'>&after=</figure>"); ?>
		<?php else: ?>
			<?php themify_image("field_name=post_image, image, wp_thumb&setting=image_post&w=".$width."&h=".$height."&before=<figure class='post-image'><a href='".$link."'>&after=</a></figure>"); ?>
		<?php endif; ?>  
	<?php endif; ?>
		
<?php endif; //post image ?>
<!-- /post-image -->

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