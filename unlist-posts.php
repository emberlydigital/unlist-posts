<?php
/**
 * Plugin Name:     Unlist Posts & Pages
 * Description:     Hide posts, pages or  custom items from your site and make them accessible only with the direct link.
 * Author:          Clarion
 * Text Domain:     unlist-posts
 * Version:         2.0.0
 * License:         GPLv2
 * License URI:     https://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 *
 * @package         Hide_Post
 */

defined( 'ABSPATH' ) or exit;

define( 'UNLIST_POSTS_DIR', plugin_dir_path( __FILE__ ) );
define( 'UNLIST_POSTS_URI', plugins_url( '/', __FILE__ ) );
define( 'UNLIST_POSTS_VER', '2.0.0' );

require_once UNLIST_POSTS_DIR . 'class-unlist-posts.php';
