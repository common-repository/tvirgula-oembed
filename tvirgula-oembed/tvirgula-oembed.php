<?php
/*
Plugin Name: Tvirgula Oembed
Plugin URI: http://virgula.uol.com.br/
Description: Simple plugin to embed videos from the site http://www.tvirgula.com.br - To use it, just copy URL directed from Tvirgula to your post/page

Version: 1.0
Author: Virgula, Rene Weiss, Michael Granados
Author URI: http://automattic.com/wordpress-plugins/
License: http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution-ShareAlike 3.0 Unported License.
*/


/* YES, it´s only this */
wp_oembed_add_provider( 'http://virgula.uol.com.br/ver/video/*', 'http://virgula.uol.com.br/ver/video/oembed.json' );


