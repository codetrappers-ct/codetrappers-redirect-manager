<?php
/**
 * Plugin Name: Codetrappers Redirect Manager
 * Description: Starter redirect management plugin with a lightweight rule registry.
 * Version: 0.1.0
 * Author: Codetrappers
 * License: GPL-2.0-or-later
 * Requires at least: 6.4
 * Requires PHP: 7.4
 * Text Domain: codetrappers-redirect-manager
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'COETRAPPERS_REDIRECT_MANAGER_VERSION', '0.1.0' );
define( 'COETRAPPERS_REDIRECT_MANAGER_FILE', __FILE__ );
define( 'COETRAPPERS_REDIRECT_MANAGER_PATH', plugin_dir_path( __FILE__ ) );
define( 'COETRAPPERS_REDIRECT_MANAGER_URL', plugin_dir_url( __FILE__ ) );

require_once COETRAPPERS_REDIRECT_MANAGER_PATH . 'includes/class-codetrappers-redirect-manager.php';

function codetrappers_redirect_manager_bootstrap() {
	$plugin = new \Codetrappers\CodetrappersRedirectManager\CodetrappersRedirectManagerPlugin();
	$plugin->boot();
}

codetrappers_redirect_manager_bootstrap();
