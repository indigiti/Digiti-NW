<?php
/*
Plugin Name: Digiti- Shortcodes
Plugin URI: http://example.com
Description: A very basic test plugin for subscriptions
Version: 1.0
Author: ThemeXpert
Author URI: http://example.com
License: GPL2
*/



function pdf_function($attr, $url) {
   extract(shortcode_atts(array(
       'width' => '640',
       'height' => '480'
   ), $attr));
   return '<iframe src="http://docs.google.com/viewer?url=' . $url . '&embedded=true" style="width:' .$width. '; height:' .$height. ';">Your browser does not support iframes</iframe>';
}
add_shortcode('pdf', 'pdf_function');


function bc($atts, $content = null) {
	extract(shortcode_atts(array(
		"cite" => 'Unknown',
		"pdf" => 'pdf',
		"url" => 'url'
	), $atts));
	if ( $cite == 'Unknown' ) {
		return '<blockquote class="bc-full"><p>'.$content.'</p></blockquote>';
	} elseif ( $url == 'url' ) {
		return '<blockquote class="bc-full"><p>'.$content.'</p><p class="bc-cite">- '.$cite.'</p></blockquote>';
	} else {		
		return '<div style=" height: 40px; width: 100%; padding: 5px;">
<div class="section-heading sh-t6 sh-s4" style="width: 20%; float: left;"><span class="h-text">'.$content.'</span></div>
<div style="float: right; width: 120px; box-shadow: #800000 4px 0px 0px; text-align: center;"><a href="'.$url.'" target="_blank" rel="noopener">वेबसाईट लिंक</a></div>
<div style="float: right; width: 120px; box-shadow: #800000 4px 0px 0px; text-align: center;"><a href="'.$pdf.'" target="_blank" rel="noopener">अधिक माहिती</a></div>
</div>';

	}
}
add_shortcode("_sc", "bc");

?>
