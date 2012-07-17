	</div>
	<!-- /body -->
	
	<div id="footerwrap">
		<footer id="footer" class="pagewidth clearfix">
			
			<div class="footer-widgets clearfix">

				<?php 
					$footer_widget_option = (themify_get('setting-footer_widgets') == "") ? "footerwidget-3col" : themify_get('setting-footer_widgets');
					if($footer_widget_option != ""){ ?>
						  <?php
						  $columns = array('footerwidget-4col' 	=> array('col col4-1','col col4-1','col col4-1','col col4-1'),
												 'footerwidget-3col'	=> array('col col3-1','col col3-1','col col3-1'),
												 'footerwidget-2col' 	=> array('col col4-2','col col4-2'),
												 'footerwidget-1col' 	=> array('') );
						  $x=0;
						  ?>
						<?php foreach($columns[$footer_widget_option] as $col): ?>
								<?php 
									 $x++;
									 if($x == 1){ 
										  $class = "first"; 
									 } else {
										  $class = "";	
									 }
								?>
								<div class="<?php echo $col;?> <?php echo $class; ?>">
									 <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Виджет подвала '.$x) ) ?>
								</div>
						  <?php endforeach; ?>
				<?php } ?>

			</div>
			<!-- /.footer-widgets -->
	
			<p class="back-top"><a href="#header">&uarr;</a></p>
		
			<?php if (function_exists('wp_nav_menu')) {
				wp_nav_menu(array('theme_location' => 'footer-nav' , 'fallback_cb' => '' , 'container'  => '' , 'menu_id' => 'footer-nav' , 'menu_class' => 'footer-nav')); 
			} ?>
	
			<div id="footer-logo">
				<?php if(themify_get('setting-footer_logo') == 'image' && themify_check('setting-footer_logo_image_value')){ ?>
					<?php themify_image("src=".themify_get('setting-footer_logo_image_value')."&w=".themify_get('setting-footer_logo_width')."&h=".themify_get('setting-footer_logo_height')."&alt=".get_bloginfo('name')."&before=<a href='".get_option('home')."'>&after=</a>"); ?>
				<?php } else { ?>
					 <a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a>
				<?php } ?>
			</div>
			<!-- /footer-logo -->

			<div class="footer-text clearfix">
				<div class="one"><?php if(themify_get('setting-footer_text_left') != ""){ echo themify_get('setting-footer_text_left'); } else { echo '&copy; <a href="'.get_option('home').'">'.get_bloginfo('name').'</a> '.date('Y'); } ?></div>
				<div class="two"><a href="http://themify.me">Themify</a> / <a href="http://geckon.in">Geckon</a> / <a href="http://wp-templates.ru/">WordPress темы</a></div>
			</div>
			<!-- /footer-text --> 
	
		</footer>
		<!-- /#footer --> 
	</div>
	<!-- /#footerwrap -->
	
</div>
<!-- /#pagewrap -->

<!-- jquery -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script type='text/javascript'>
	!window.jQuery && document.write('<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"><\/script>')
</script>

<!-- prettyphoto -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.prettyPhoto.js"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/prettyPhoto.css" type="text/css" media="screen" />
<script type="text/javascript">
	if (screen.width>=480) {
		jQuery(function($) {
			$("a[rel^='prettyPhoto']").prettyPhoto({ deeplinking: false });
		});
	}	
</script>

<!-- isotope -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.isotope.min.js"></script>
<script type="text/javascript">
	$(window).load(function(){
	
		$('.grid4 .loops-wrapper, .grid3 .loops-wrapper, .grid2 .loops-wrapper').isotope({
		  itemSelector : '.post'
		});
	
	});
</script>

<!-- theme function script -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script> 

<!-- wp_footer -->
<?php wp_footer(); ?>

</body>
</html>