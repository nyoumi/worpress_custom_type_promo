<?php
/**
 * Plugin Name: Custom Post Type Codes
 * Plugin URI: 
 * Description: Manage codes
 * Version: 1.0.0
 * Author: Nyoumi paul
 * Author URI: 
 * Text Domain: custom-post-type-codes
 * Domain Path: /languages/
 * License: GPL2
 */

require( 'classes/custom-post-type-codes.php' );
require( 'includes/template-tags.php');
if (is_admin()) {
    require( 'classes/custom-post-type-codes.admin.php' );
}
