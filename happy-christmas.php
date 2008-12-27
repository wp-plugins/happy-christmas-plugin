<?php
/*
Plugin Name: Happy Christmas
Plugin URI: http://www.melihguney.com/2008/12/26/wordpress-yeni-yil-eklentisi-v20/
Description: This plugin will create a good skin in your wordpress blog.
Author: Melih Guney
Version: 2.0
Author URI: http://www.melihguney.com
*/ 

function happy_christmas() { 

/*  Path for snow */
	$snowPath = get_option('siteurl').'/wp-content/plugins/happy-christmas/';

	$snowJS = "\n".'<script type="text/javascript"> sitePath = "'.$snowPath.'"; </script>'."\n";
	$snowJS .= '<script type="text/javascript" src="'.$snowPath.'happy-christmas.js"></script>'."\n";
	print($snowJS);



?>
	<!-- Happy Christmas Plugin Start -->
		<style type="text/css">
		<!--
		.happy-christmas {
			position:fixed;	
			left:0px;
			top: 0px;
			z-index:1
		}
		-->
		</style>
		<img src="/wp-content/plugins/happy-christmas/happy-christmas.png" alt="Happy Christmas" border="0" usemap="#happy-christmas" class="happy-christmas" />
		
<EMBED src="/wp-content/plugins/happy-christmas/happy-christmas.swf" pluginspage="http://www.macromedia.com/shockwave/download/" type="application/x-shockwave-flash" width="0" height="0" autostart="1" showcontrols="0"></EMBED> 

<!-- Happy Christmas Plugin End -->
<?php }
add_action(wp_head, 'happy_christmas');
?>