<?php 
/*
 * Plugin Name: Buddypress Activity Share
 * Plugin URI: https://github.com/Volnus/Buddypress-Activity-Share/
 * Description: Adds social share buttons to BuddyPress activity pages and member profiles. (Very well optimized)
 * Version: 1.0
 * Author: Scott Hartley
 * Author URI: https://arcademill.com
 * Based On: BuddyPress Social
 */

function bp_social_init() {
	require( dirname( __FILE__ ) . '/includes/activity-sharing.php' );
}
add_action( 'bp_include', 'bp_social_init' );

    /**
     * Enqueue buddy social styles
     */
    function buddy_social_icons_stylesheet() {
      if (is_buddypress() ) {
        // Respects SSL, Style.css is relative to the current file
        wp_register_style( 'buddy-social', plugins_url('css/buddy-social.css', __FILE__) );
        wp_enqueue_style( 'buddy-social' );
      }
    }

    add_action( 'wp_enqueue_scripts', 'buddy_social_icons_stylesheet' );

    // include the js for to toggle the social buttons
    function buddy_social_scripts_method() {
      if (is_buddypress() ) {
        wp_enqueue_script(
            'custom-script',
            plugins_url('/js/buddy-social.js', __FILE__),
            array( 'jquery' ),
          	'1.0', 
          	true
        );
    	}
    }      
    // enqueue the buddy social js
    add_action( 'wp_enqueue_scripts', 'buddy_social_scripts_method' );

?>
