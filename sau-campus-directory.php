<?php
/*
Plugin Name: SAU Magnolia Campus Directory
Plugin URI: https://github.com/joshjenkinsAR/campus-directory
Description: Displays the directory information in a custom template
Version: 1.0.2
Author: Josh Jenkins, Curtiss Grymala, Shelley Keith
Author URI: http://www.joshdjenkins.com
License: GPL2
GitHub Plugin URI: https://github.com/joshjenkinsAR/campus-directory
GitHub Branch: master
*/

if ( ! class_exists( 'SAU_Campus_Directory' ) )
	require_once( plugin_dir_path( __FILE__ ) . 'classes/class-sau-campus-directory.php' );

add_action( 'genesis_init', 'inst_sau_campus_directory' );
function inst_sau_campus_directory() {
	global $sau_campus_directory_obj;
	$sau_campus_directory_obj = new SAU_Campus_Directory;
}

add_action( 'admin_notices', 'sau_campus_directory_no_genesis' );
function sau_campus_directory_no_genesis() {
?>
<div class="updated fade">
	<p><?php _e( 'Genesis is not being used on this site, therefore the SAU Campus Directory plugin is not active' ) ?></p>
</div>
<?php
}