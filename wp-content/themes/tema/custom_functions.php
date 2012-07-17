<?php	

/* 	Custom Write Panels
/***************************************************************************/

	///////////////////////////////////////
	// Setup Write Panel Options
	///////////////////////////////////////
	
	// Post Meta Box Options
	$post_meta_box_options = array(
									
									// Layout
									array(
										  "name" 		=> "layout",	
										  "title" 		=> "Вариант боковой панели", 	
										  "description" => "", 				
										  "type" 		=> "layout",			
										  "meta"		=> array(
										  						array("value" => "default", "img" => "images/layout-icons/default.png", "selected" => true),

																 array("value" => "sidebar1", 	"img" => "images/layout-icons/sidebar1.png"),
																 array("value" => "sidebar1 sidebar-left", 	"img" => "images/layout-icons/sidebar1-left.png"),
																 array("value" => "sidebar-none",	 	"img" => "images/layout-icons/sidebar-none.png")
																 )			
										),
									// Post Layout Color
									array(
										  "name"		=> "post_color",
										  "title"		=> "Цвет записи",
										  "description" => "",
										  "type"		=> "layout",
										  "meta"		=> array(
																array("value" => 'default', "img" => 'images/layout-icons/color-default.png', "selected" => true),
																array("value" => 'yellow', "img" => 'images/layout-icons/color-yellow.png'),
																array("value" => 'orange', "img" => 'images/layout-icons/color-orange.png'),
																array("value" => 'pink', "img" => 'images/layout-icons/color-pink.png'),
																array("value" => 'lavender', "img" => 'images/layout-icons/color-lavender.png'),
																array("value" => 'blue', "img" => 'images/layout-icons/color-blue.png'),
																array("value" => 'green', "img" => 'images/layout-icons/color-green.png'),
										  						array("value" => 'black', "img" => 'images/layout-icons/color-black.png'),
																array("value" => 'gray', "img" => 'images/layout-icons/color-grey.png'),
																array("value" => 'white', "img" => 'images/layout-icons/color-white.png')
										  					)
										  ),
								   	// Post Image
									array(
										  "name" 		=> "post_image",
										  "title" 		=> "Изображение записи",
										  "description" => "",
										  "type" 		=> "image",
										  "meta"		=> array()
										),
									// Image Width
									array(
										  "name" 		=> "image_width",	
										  "title" 		=> "Ширина изображения", 
										  "description" => "", 				
										  "type" 		=> "textbox",			
										  "meta"		=> array("size"=>"small")			
										),
									// Image Height
									array(
										  "name" 		=> "image_height",	
										  "title" 		=> "Высота изображения", 
										  "description" => "", 				
										  "type" 		=> "textbox",			
										  "meta"		=> array("size"=>"small")			
										),
								   	// Video URL
									array(
										  "name" 		=> "video_url",
										  "title" 		=> "Ссылка на видео",
										  "description" => "Для записи видео формата (напр. YouTube, Vimeo ссылкки и прочие)",
										  "type" 		=> "textbox",
										  "meta"		=> array()
										),
								   	// Audio URL
									array(
										  "name" 		=> "audio_url",
										  "title" 		=> "Ссылка на аудио",
										  "description" => "Для записи аудио формата (напр. mp3)",
										  "type" 		=> "textbox",
										  "meta"		=> array()
										),
								   	// Quote Author
									array(
										  "name" 		=> "quote_author",
										  "title" 		=> "Цитата автора",
										  "description" => "Для записи формата цитаты",
										  "type" 		=> "textbox",
										  "meta"		=> array()
										),
								   	// Quote Author Link
									array(
										  "name" 		=> "quote_author_link",
										  "title" 		=> "Ссылка на Цитату",
										  "description" => "Для записи формата цитаты",
										  "type" 		=> "textbox",
										  "meta"		=> array()
										),
									// Link URL
									array(
										  "name" 		=> "link_url",	
										  "title" 		=> "Ссылка", 	
										  "description" => "Для записи формата ссылки", 				
										  "type" 		=> "textbox",			
										  "meta"		=> array()			
										),
									// Hide Post Title
									array(
										  "name" 		=> "hide_post_title",	
										  "title" 		=> "Скрыть заголовок записи", 	
										  "description" => "", 				
										  "type" 		=> "dropdown",			
										  "meta"		=> array(
										  						array("value" => "default", "name" => "", "selected" => true),

																 array("value" => "yes", "name" => "Да"),
																 array("value" => "no",	"name" => "Еет")
																 )			
										),
									// Unlink Post Title
									array(
										  "name" 		=> "unlink_post_title",	
										  "title" 		=> "Расцепить заголовок записи", 	
										  "description" => "Расцепите заголовок записи (он выведет на экран заголовок записи без ссылки)", 				
										  "type" 		=> "dropdown",			
										  "meta"		=> array(
										  						array("value" => "default", "name" => "", "selected" => true),

																 array("value" => "yes", "name" => "Да"),
																 array("value" => "no",	"name" => "Нет")
																 )			
										),

									// Hide Post Meta
									array(
										  "name" 		=> "hide_post_meta",	
										  "title" 		=> "Скрыть мета записи", 	
										  "description" => "", 				
										  "type" 		=> "dropdown",			
										  "meta"		=> array(
										  						array("value" => "default", "name" => "", "selected" => true),

																 array("value" => "yes", "name" => "Да"),
																 array("value" => "no",	"name" => "Нет")
																 )			
										),
									// Hide Post Date
									array(
										  "name" 		=> "hide_post_date",	
										  "title" 		=> "Скрыть дату записи", 	
										  "description" => "", 				
										  "type" 		=> "dropdown",			
										  "meta"		=> array(
										  						array("value" => "default", "name" => "", "selected" => true),

																 array("value" => "yes", "name" => "Да"),
																 array("value" => "no",	"name" => "Нет")
																 )			
										),
									// Hide Post Image
									array(
										  "name" 		=> "hide_post_image",	
										  "title" 		=> "Скрыть изображение записи", 	
										  "description" => "", 				
										  "type" 		=> "dropdown",			
										  "meta"		=> array(
										  						array("value" => "default", "name" => "", "selected" => true),

																 array("value" => "yes", "name" => "Да"),
																 array("value" => "no",	"name" => "Нет")
																 )			
										),
									// External Link
									array(
										  "name" 		=> "external_link",	
										  "title" 		=> "Внешняя ссылка", 	
										  "description" => "Ссылка изображения записи, на внешний ресурс", 				
										  "type" 		=> "textbox",			
										  "meta"		=> array()			
										),
									// Lightbox Link
									array(
										  "name" 		=> "lightbox_link",	
										  "title" 		=> "Ссылка лайтбокса", 	
										  "description" => "Даже незнаю что это такое (:", 				
										  "type" 		=> "textbox",			
										  "meta"		=> array()			
										)
								);
									
	// Page Meta Box Options
	$page_meta_box_options = array(
								  	// Page Layout
									array(
										  "name" 		=> "page_layout",
										  "title"		=> "Вариант боковой панели",
										  "description"	=> "",
										  "type"		=> "layout",
										  "meta"		=> array(
										  						array("value" => "default", "img" => "images/layout-icons/default.png", "selected" => true),
																 array("value" => "sidebar1", 	"img" => "images/layout-icons/sidebar1.png"),
																 array("value" => "sidebar1 sidebar-left", 	"img" => "images/layout-icons/sidebar1-left.png"),
																 array("value" => "sidebar-none",	 	"img" => "images/layout-icons/sidebar-none.png")
																 )
										),
									// Hide page title
									array(
										  "name" 		=> "hide_page_title",
										  "title"		=> "Скрыть заголовок страницы",
										  "description"	=> "",
										  "type" 		=> "dropdown",			
										  "meta"		=> array(
										  						array("value" => "default", "name" => "", "selected" => true),
																 array("value" => "yes", "name" => "Да"),
																 array("value" => "no",	"name" => "Нет")
																 )	
										),
								   // Query Category
									array(
										  "name" 		=> "query_category",
										  "title"		=> "Рубрика запросов",
										  "description"	=> "Выберите рубрику или введите несколько кодов рубрик (напр, 2,5,6). Введите 0, чтобы отобразить все категории.",
										  "type"		=> "query_category",
										  "meta"		=> array()
										),
									// Section Categories
									array(
										  "name" 		=> "section_categories",	
										  "title" 		=> "Разделы рубрики", 	
										  "description" => "Отображение нескольких рубрик запросов отдельно", 				
										  "type" 		=> "dropdown",			
										  "meta"		=> array(
										  						array("value" => "default", "name" => "", "selected" => true),

																 array("value" => "yes", "name" => "Да"),
																 array("value" => "no",	"name" => "Нет")
																 )			
										),
									// Post Layout
									array(
										  "name" 		=> "layout",
										  "title"		=> "Макет запроса записи",
										  "description"	=> "",
										  "type"		=> "layout",
										  "meta"		=> array(
																array("value" => "list-post", "img" => "images/layout-icons/list-post.png", "selected" => true),
																array("value" => "grid4", "img" => "images/layout-icons/grid4.png"),
																array("value" => "grid3", "img" => "images/layout-icons/grid3.png"),
																array("value" => "grid2", "img" => "images/layout-icons/grid2.png")
																 )
										),
									// Posts Per Page
									array(
										  "name" 		=> "posts_per_page",
										  "title"		=> "Записей на страницу",
										  "description"	=> "",
										  "type"		=> "textbox",
										  "meta"		=> array("size" => "small")
										),
									
									// Display Content
									array(
										  "name" 		=> "display_content",
										  "title"		=> "Отображать",
										  "description"	=> "",
										  "type"		=> "dropdown",
										  "meta"		=> array(
										  						 array("name"=>"Отрывок","value"=>"excerpt","selected"=>true),
																 array("name"=>"Содержание","value"=>"content"),
																 array("name"=>"Ничего","value"=>"none")
																 )
										),
									// Hide Title
									array(
										  "name" 		=> "hide_title",
										  "title"		=> "Скрыть заголовок записи",
										  "description"	=> "",
										  "type" 		=> "dropdown",			
										  "meta"		=> array(
										  						array("value" => "default", "name" => "", "selected" => true),

																 array("value" => "yes", "name" => "Да"),
																 array("value" => "no",	"name" => "Нет")
																 )
										),
									// Unlink Post Title
									array(
										  "name" 		=> "unlink_title",	
										  "title" 		=> "Расцепить заголовок записи", 	
										  "description" => "Расцепить заголовок записи (it will display the post title without link)", 				
										  "type" 		=> "dropdown",			
										  "meta"		=> array(
										  						array("value" => "default", "name" => "", "selected" => true),

																 array("value" => "yes", "name" => "Да"),
																 array("value" => "no",	"name" => "Нет")
																 )			
										),
									// Hide Post Date
									array(
										  "name" 		=> "hide_date",
										  "title"		=> "Скрыть дату записи",
										  "description"	=> "",
										  "type" 		=> "dropdown",			
										  "meta"		=> array(
										  						array("value" => "default", "name" => "", "selected" => true),
																 array("value" => "yes", "name" => "Да"),
																 array("value" => "no",	"name" => "Нет")
																 )
										),
									// Hide Post Meta
									array(
										  "name" 		=> "hide_meta",
										  "title"		=> "Скрыть мета записи",
										  "description"	=> "",
										  "type" 		=> "dropdown",			
										  "meta"		=> array(
										  						array("value" => "default", "name" => "", "selected" => true),
																 array("value" => "yes", "name" => "Да"),
																 array("value" => "no",	"name" => "Нет")
																 )
										),
									// Hide Post Image
									array(
										  "name" 		=> "hide_image",	
										  "title" 		=> "Скрыть изображение записи", 	
										  "description" => "", 				
										  "type" 		=> "dropdown",			
										  "meta"		=> array(
										  						array("value" => "default", "name" => "", "selected" => true),
																 array("value" => "yes", "name" => "Да"),
																 array("value" => "no",	"name" => "Нет")
																 )			
										),
									// Unlink Post Image
									array(
										  "name" 		=> "unlink_image",	
										  "title" 		=> "Расцепить изображение записи", 	
										  "description" => "Расцепить изображение записи (он выведет на экран заголовок записи без ссылки)", 				
										  "type" 		=> "dropdown",			
										  "meta"		=> array(
										  						array("value" => "default", "name" => "", "selected" => true),

																 array("value" => "yes", "name" => "Да"),
																 array("value" => "no",	"name" => "Нет")
																 )			
										),
									// Page Navigation Visibility
									array(
										  "name" 		=> "hide_navigation",
										  "title"		=> "Скрыть навигацию страницы",
										  "description"	=> "",
										  "type" 		=> "dropdown",			
										  "meta"		=> array(
										  						array("value" => "default", "name" => "", "selected" => true),
																 array("value" => "yes", "name" => "Да"),
																 array("value" => "no",	"name" => "Нет")
																 )
										),
									// Image Width
									array(
										  "name" 		=> "image_width",	
										  "title" 		=> "Ширина изображения", 
										  "description" => "", 				
										  "type" 		=> "textbox",			
										  "meta"		=> array("size"=>"small")			
										),
									// Image Height
									array(
										  "name" 		=> "image_height",	
										  "title" 		=> "Высота изображения", 
										  "description" => "", 				
										  "type" 		=> "textbox",			
										  "meta"		=> array("size"=>"small")			
										)
									);
									
	
	///////////////////////////////////////
	// Build Write Panels
	///////////////////////////////////////
	themify_build_write_panels(array(
									array(
										 "name"		=> "Опции Записи",
										 "options"	=> $post_meta_box_options,
										 "pages"	=> "post"	
										 ),
									array(
										 "name"		=> "Опции Страницы",	
										 "options"	=> $page_meta_box_options, 		
										 "pages"	=> "page"
										 )
									)
								);
	
	
/* 	Custom Functions
/***************************************************************************/	

	///////////////////////////////////////
	// Enable WordPress feature image
	///////////////////////////////////////
	add_theme_support( 'post-thumbnails');

	///////////////////////////////////////
	// Add WordPress post formats
	///////////////////////////////////////
	add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat') );
	
	///////////////////////////////////////
	// Add wmode Transparent
	///////////////////////////////////////	
	function themify_add_video_wmode_transparent($html, $url, $attr) {
   		if (strpos($html, "<embed src=" ) !== false) {
	    	$html = str_replace('</param><embed', '</param><param name="wmode" value="transparent"></param><embed wmode="transparent" ', $html);
	   		return $html;
	   } else {
	        return $html;
	   }
	}
	add_filter('embed_oembed_html', 'themify_add_video_wmode_transparent');

	///////////////////////////////////////
	// Filter RSS Feed to include Custom Fields
	///////////////////////////////////////
	add_filter('the_content', 'themify_post_format_custom_fields');

	function themify_post_format_custom_fields( $content ) {
	
		global $post, $id, $themify_check;
		if(!is_feed() || $themify_check == true){
			return $content;
		}
		$post_format = themify_get('post_format');
		
		if($post_format == 'image' && themify_check('post_image')) { 
			$content .= "<img src='".themify_get('post_image')."'>";
		} elseif($post_format == 'quote' && themify_check('quote_author')) {
			$content = '"'.$content.'" '.themify_get('quote_author')." - <a href='".themify_get('quote_author_link')."'>".themify_get('quote_author_link')."</a>";
		} elseif($post_format == 'link' && themify_check('link_url')) {
			$content .= "<a href='".themify_get('link_url')."'>".themify_get('link_url')."</a>";
		} elseif($post_format == 'audio' && themify_check('audio_url')) {
			$content .= "<p><img src='".themify_get('post_image')."'></p>";
			$content .= themify_get('audio_url');
		} elseif($post_format == 'video' && themify_check('video_url')) {
			$themify_check = true;
			$content = apply_filters('the_content', themify_get('video_url')) . $content;
		}
		$themify_check = false;
		return $content;
	}

	///////////////////////////////////////
	// Adds a rel="prettyPhoto" tag to all linked image files
	///////////////////////////////////////
	add_filter('the_content', 'addlightboxrel_replace', 12);
	add_filter('the_excerpt', 'addlightboxrel_replace');
	add_filter('widget_text', 'addlightboxrel_replace');
	add_filter('get_comment_text', 'addlightboxrel_replace');
	function addlightboxrel_replace ($content)
	{   global $post;
		$pattern = "/<a(.*?)href=('|\")([^>]*).(bmp|gif|jpeg|jpg|png)('|\")(.*?)>(.*?)<\/a>/i";
		$replacement = '<a$1href=$2$3.$4$5 rel="prettyPhoto['.$post->ID.']"$6>$7</a>';
		$content = preg_replace($pattern, $replacement, $content);
		return $content;
	}

	// Register Custom Menu Function
	function register_custom_nav() {
		if (function_exists('register_nav_menus')) {
			register_nav_menus( array(
				'main-nav' => __( 'Основная навигация', 'themify' ),
				'footer-nav' => __( 'Навигация подвала', 'themify' ),
			) );
		}
	}
	
	// Register Custom Menu Function - Action
	add_action('init', 'register_custom_nav');
	
	// Default Main Nav Function
	function default_main_nav() {
		echo '<ul id="main-nav" class="main-nav clearfix">';
		wp_list_pages('title_li=');
		echo '</ul>';
	}

	// Register Widgets
	if ( function_exists('register_sidebar') ) {
		register_sidebar(array(
			'name' => 'Боковая панель',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="widgettitle">',
			'after_title' => '</h4>',
		));
	}

	///////////////////////////////////////
	// Footer Widgets
	///////////////////////////////////////
	if ( function_exists('register_sidebar') ) {
		$data = get_data();
		$columns = array('footerwidget-4col' 			=> 4,
						'footerwidget-3col'			=> 3,
						'footerwidget-2col' 		=> 2,
						'footerwidget-1col' 		=> 1,
						'none'			 		=> 0, );
		$option = ($data['setting-footer_widgets'] == "" || !isset($data['setting-footer_widgets'])) ?  "footerwidget-3col" : $data['setting-footer_widgets'];
		for($x=1;$x<=$columns[$option];$x++){
			register_sidebar(array(
				'name' => 'Виджет подвала '.$x,
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget' => '</div>',
				'before_title' => '<h4 class="widgettitle">',
				'after_title' => '</h4>',
			));			
		}
	}
	
	// Custom Theme Comment
	function custom_theme_comment($comment, $args, $depth) {
	   $GLOBALS['comment'] = $comment; 
	   ?>
		<li id="comment-<?php comment_ID() ?>">
			<p class="comment-author">
				<?php echo get_avatar($comment,$size='60'); ?>
				<?php printf(__('<cite>%s</cite>'), get_comment_author_link()) ?><br />
				<small class="comment-time"><strong><?php comment_date('M d, Y'); ?></strong> @ <?php comment_time('H:i:s'); ?><?php edit_comment_link('Изменить',' [',']') ?></small>
			</p>
			<div class="commententry">
				<?php if ($comment->comment_approved == '0') : ?>
				<p><em><?php _e('Ваш комментарий ожидает модерации.') ?></em></p>
				<?php endif; ?>
			
				<?php comment_text() ?>
			</div>
			<p class="reply">
			<?php comment_reply_link(array_merge( $args, array('add_below' => 'comment', 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
			</p>
		<?php
	}

?>