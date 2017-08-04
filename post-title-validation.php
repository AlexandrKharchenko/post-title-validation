<?php
/*Plugin Name: Post Title Validation
Plugin URI: https://github.com/AlexandrKharchenko
Description: This plugin validate post and page title field. It will also work for custom content type.
Author: Alexandr Kharchenko
Version: 1.0
Author URI: https://github.com/AlexandrKharchenko
*/

/**  Copyright 2017  Alexandr Kharchenko
 *
 *    This program is free software; you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License, version 2, as 
 *    published by the Free Software Foundation.
 *
 *    This program is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU General Public License
 *    along with this program; if not, write to the Free Software
 *    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */


add_action( 'admin_enqueue_scripts', 'post_title_validation_function' );

function post_title_validation_function($hook){
	if( 'post.php' != $hook && 'edit.php' != $hook && 'post-new.php' != $hook)
        return false;
	wp_enqueue_script( 'custom_admin_script',  plugins_url('/js/post-title-validation.js', __FILE__));
}
