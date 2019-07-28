<?php
/**
 * Plugin Name: NetlifyPress
 * Plugin URI: https://nahid.dev/project/netlifypress
 * Description: Seamlessly trigger deploys in Netlify from WordPress
 * Author: Nahid Ferdous Mohit
 * Version: 1.0
 * Author URI: https://nahid.dev
 * Text Domain: netlifypress
 *
 * @since      1.0
 * @package    NetlifyPress
 * @author     Nahid Ferdous Mohit
 */

/*
 * If this file is called directly, abort.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/*
 * Call the plugin core file
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/core.php';
