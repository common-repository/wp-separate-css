<?php
/*
Plugin Name: WP Separate CSS
Plugin URI: http://bitbucket.org/enethrie/wp-separate-css
Description: This small plugin allows you to write separate CSS with your favorite editor without having to affect the theme CSS directly. Just create .css files in the plugin directory (wp-content/plugins/*.css) and they will automatically be included with the theme's CSS.
Author: Aubrey Portwood
Version: 0.3
Author URI: http://enethrie.com/
*/

add_action('wp_head','WPSeparateCSS');
function WPSeparateCSS(){
	foreach (glob(dirname(__FILE__)."/../*.css") as $filename){
		?><!-- WP Custom CSS --><link rel="stylesheet" href="<?php echo plugins_url()."/".basename(dirname(__FILE__))."/../".basename($filename); ?>"><?php
	}
}
?>