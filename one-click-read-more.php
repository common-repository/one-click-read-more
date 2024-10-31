<?php
/**
* Plugin Name: One Click Read More
* Plugin URI: https://webdev101.xyz/
* Description: This plugin allows to add "read more" tag by one click
* Version: 1.0
* Author: Ham Rono
* Author URI: https://profiles.wordpress.org/hamrono/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
**/

if ( ! defined( 'ABSPATH' ) ) {
exit; // Exit if accessed directly
   }

if( !defined( 'HOCRM_DIR' ) ) {
define( 'HOCRM_DIR', dirname( __FILE__ ) ); // Plugin dir
	}

function hocrm_modify_read_more_link() {
    return '<a class="more-link" href="' . get_permalink() . '">Read more</a>';
}
add_filter( 'the_content_more_link', 'hocrm_modify_read_more_link' );