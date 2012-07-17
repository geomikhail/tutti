<?php themify_image("field_name=post_image, image, wp_thumb&w=100&h=100&before=<p class='audio-image'><a href='".get_permalink()."'>&after=</a></p>"); ?>

<!-- audio-player -->
<div class="audio-player">
<?php
	$src = themify_get("audio_url");
	$fallbackpl = '<a href="'.$src.'" title="Нажмите, чтобы открыть" id="f-'.$post->ID.'" style="display:none;">Audio MP3</a><script type="text/javascript">AudioPlayer.embed("f-'.$post->ID.'", {soundFile: "'.$src.'"});</script>';
	
	if(strpos(strtolower($src),'.wav')) $format = 'wav';
	if(strpos(strtolower($src),'.m4a')) $format = 'm4a';
	if(strpos(strtolower($src),'.ogg')) $format = 'ogg';
	if(strpos(strtolower($src),'.oga')) $format = 'oga';
	if(strpos(strtolower($src),'.mp3')) $format = 'mp3';
	
	if(strpos($format, 'og')) $html5incompl = false; else $html5incompl = true;
	
	$output = '<div class="audio_wrap html5audio">';
	if ($html5incompl) $output .= '<div style="display:none;">'.$fallbackpl.'</div>';
	$output .= '<audio controls id="' . $post->ID . '" class="html5audio">';
	
	if ($format == 'wav') $output .= '<source src="'.$src.'" type="audio/wav" />';
	if ($format == 'm4a') $output .= '<source src="'.$src.'" type="audio/mp4" />';
	if ($format == 'oga') $output .= '<source src="'.$src.'" type="audio/ogg" />';
	if ($format == 'ogg') $output .= '<source src="'.$src.'" type="audio/ogg" />';
	if ($format == 'mp3') $output .= '<source src="'.$src.'" type="audio/mpeg" />';
	
	$output .= $fallbackpl . '</audio></div>';
	
	if ($html5incompl) $output .= '<script type="text/javascript">if (jQuery.browser.mozilla) {tempaud=document.getElementsByTagName("audio")[0]; jQuery(tempaud).remove(); jQuery("div.audio_wrap div").show()} else jQuery("div.audio_wrap div *").remove();</script>';
	
	echo $output;
?>
</div>
<!-- /audio-player -->

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