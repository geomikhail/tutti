<?php if(!is_single()) : global $more; $more = 0; endif; //enable more link ?>

<?php global $post_query_category, $post_layout, $display_content, $hide_title, $unlink_title, $hide_meta, $hide_date, $hide_image, $image_width, $image_height, $height, $width; ?>

<?php $post_color_class = (themify_check('post_color') && themify_get('post_color') != 'default') ? themify_get('post_color') : themify_get('setting-default_color');  ?>

<!-- post -->
<article id="post-<?php the_ID(); ?>" <?php post_class("clearfix $post_color_class"); ?>>

	<div class="post-inner">
		
		<?php $link = themify_get('link_url'); ?>
		<?php if ($link == '') { ?>
			<?php $link = get_permalink(); ?>
		<?php } ?>
		
		<span class="post-icon"></span><!-- /post-icon -->
	
		<?php if($hide_date != "yes"): ?>
			<time datetime="<?php the_time('o-m-d') ?>" class="post-date" pubdate><?php the_time('M j, Y') ?></time>
		<?php endif; ?>
	
		<!-- post-title -->
		<?php if($hide_title != "yes"): ?>
			<?php if($unlink_title == "yes"): ?>
				<h1 class="post-title"><?php the_title(); ?></h1>
			<?php else: ?>
				<h1 class="post-title"><a href="<?php echo $link; ?>"><?php the_title(); ?></a></h1>
			<?php endif; //unlink post title ?> 
		<?php endif; //post title ?>    
		<!-- /post-title -->
		
		<?php $post_format = themify_get('post_format'); ?>
		
		<?php if($post_format == 'quote' || has_post_format( 'quote' )) {
			get_template_part( 'includes/loop-quote');
		} elseif($post_format == 'audio' || has_post_format( 'audio' )) {
			get_template_part( 'includes/loop-audio');
		} elseif($post_format == 'video' || has_post_format( 'video' )) {
			get_template_part( 'includes/loop-video');
		} else {
			get_template_part( 'includes/loop-default');
		} ?>
		
		<?php if($hide_meta != 'yes'): ?>
			<!-- post-meta -->
			<p class="post-meta"> 
				<span class="post-author"><?php the_author() ?></span>
				<span class="post-category"><?php the_category(', ') ?></span>
				<?php if(comments_open()) : ?><span class="post-comment"><?php comments_popup_link('0', '1', '%', 'comments-link', ''); ?></span><?php endif; ?>
				<?php the_tags(' <span class="post-tag">', ', ', '</span>'); ?>
			</p>
			<!-- /post-meta -->
		<?php endif; ?>    
	
		<?php edit_post_link('Отредактировать', '[', ']'); ?>	
		
	</div>
	<!-- /.post-inner -->

</article>
<!-- /post -->