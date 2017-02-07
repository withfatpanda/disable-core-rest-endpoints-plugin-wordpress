<?php
/*
Plugin Name: Disable Core REST Endpoints
Plugin URI: http://github.com/withfatpanda/disable-core-rest-endpoints-plugin-wordpress/
Description: Disable all WordPress core REST endpoints: posts, pages, and attachments
Version: 1.0.0
Author: Aaron Collegeman
Author UIR: http://aaroncllegeman.com
License: GPLv2 or later
*/

add_action('init', function() {
  global $wp_post_types;

  $wp_post_types['post']->show_in_rest = 0;
  $wp_post_types['attachment']->show_in_rest = 0;
  $wp_post_types['page']->show_in_rest = 0;
});
