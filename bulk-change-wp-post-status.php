<?php
/*
Plugin Name:  Danger Activate this and it changes all posts from trash to publish
Plugin URI:   https://developer.wordpress.org/plugins/the-basics/
Description:  Back up - Danger Activate this and it changes all posts from trash to publish every page load
Version:      1
Author:       alan
Author URI:   https://fullworks/
License:      GPL2
License URI:  https://fullworks/

Absolutely no liability accepted ever
*/
global $wpdb;
$result = $wpdb->query( "UPDATE wp_posts SET post_status = 'publish' WHERE post_status = 'trash' AND post_type = 'post'" );