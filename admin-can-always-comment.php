<?php
/*
Plugin Name: Admin Can Always Comment
Plugin URI: https://github.com/MikkoVirenius/admin-can-always-comment
Description: Admin Can Comment Even If Thread Is Closed
Version: 1.0
Author: Mikko Virenius
Author URI: http://twitter.com/MikkoVirenius
License: GPL2
*/

add_filter( 'comments_open', 'admin_can_always_comment', 10, 2 );

/**
 * If current user is an admistrator, set commenting status to open
 * @param  boolean $open Default status
 * @param  int $post_id Post ID
 * @return boolean $open Filtered status
 */
function admin_can_always_comment( $open, $post_id ) {

	if ( current_user_can('manage_options') )
		$open = true;

	return $open;
	
}