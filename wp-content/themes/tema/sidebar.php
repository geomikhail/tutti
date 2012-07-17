<aside id="sidebar">

	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Боковая панель') ) : ?>

		<section class="widget">
			<h4 class="widgettitle"><?php _e('Страницы','themify'); ?></h4>
			<ul>
			<?php wp_list_pages('title_li=' ); ?>
			</ul>
		</section>

		<section class="widget">
			<h4 class="widgettitle"><?php _e('Рубрики','themify'); ?></h4>
			<ul>
			<?php wp_list_categories('show_count=1&title_li='); ?>
			</ul>
		</section>

	<?php endif; ?>

</aside>
<!-- /#sidebar -->
