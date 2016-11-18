<?php
/**
 * Starter WordPress Plugin
 *
 * @package     KnowTheCode\SandboxWorkspace
 * @author      hellofromTonya
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: Sandbox Workspace WordPress Plugin
 * Plugin URI:  https://knowthecode.io/
 * Description: This plugin gives you a workspace to write code, test it, and learn.  This is your playground.
 * Version:     1.0.0
 * Author:      hellofromTonya
 * Author URI:  https://knowthecode.io
 * Text Domain: sandbox
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

namespace KnowTheCode\SandboxWorkspace;

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Cheatin&#8217; uh?' );
}

define( 'SANDBOX_WORKSPACE_URL', plugin_dir_url( __FILE__ ) );

require_once( __DIR__. '/src/support/load-assets.php' );
