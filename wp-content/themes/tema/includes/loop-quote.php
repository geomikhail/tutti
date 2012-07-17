<?php global $post_query_category, $post_layout, $display_content, $hide_title, $unlink_title, $hide_meta, $hide_date, $hide_image, $image_width, $image_height, $height, $width; ?>

<?php $quote_author = themify_get('quote_author'); ?>
<?php $quote_author_link = themify_get('quote_author_link'); ?>

<!-- quote-content -->
<div class="quote-content">
	
	<?php if($display_content == 'excerpt'): ?>
	
		<?php the_excerpt(); ?>
	
	<?php elseif($display_content == 'none'): ?>
	
	<?php else: ?>
	
		<?php the_content(__((themify_check('setting-default_more_text')) ? themify_get('setting-default_more_text') : 'More &rarr;','themify')); ?>
	
	<?php endif; ?>
</div>
<!-- /quote-content -->

<!-- quote-author -->
<p class="quote-author">
	&#8212; <?php if($quote_author_link != '') { echo '<a href="'.$quote_author_link.'">'; } ?><?php echo $quote_author; ?><?php if($quote_author_link != '') { echo '</a>'; } ?>
</p>
<!-- /quote-author -->