<?php

if (!defined('ABSPATH')) {
    exit;
}

define('WPBS_VERSION', '1.0.3');

/**
 * Plugin Name: WP Business Status
 * Plugin URI: https://github.com/SelenoDev/WP-Business-Status-Plugin
 * Description: A WordPress plugin for managing and displaying business availability status.
 * Version: 1.0.3
 * Author: Seleno Development
 * Author URI: https://selenodev.com
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: wp-business-status
 * Requires at least: 6.0
 * Requires PHP: 8.0
 */

require_once plugin_dir_path(__FILE__) . 'includes/settings.php';
require_once plugin_dir_path(__FILE__) . 'includes/shortcode.php';

function wpbs_enqueue_styles()
{
    wp_enqueue_style(
    'wpbs-styles',
    plugin_dir_url(__FILE__) . 'assets/css/wp-business-status.css',
    [],
    WPBS_VERSION
);
}

function wpbs_enqueue_admin_styles()
{
    if (
        !isset($_GET['page']) ||
        sanitize_key(wp_unslash($_GET['page'])) !== 'wpbs-business-status'
    ) {
        return;
    }

    wp_enqueue_style(
        'wpbs-admin-styles',
        plugin_dir_url(__FILE__) . 'assets/css/admin.css',
        [],
        WPBS_VERSION
    );

    // Load the frontend card styles here too so the admin preview matches the site.
    wp_enqueue_style(
        'wpbs-styles',
        plugin_dir_url(__FILE__) . 'assets/css/wp-business-status.css',
        [],
        WPBS_VERSION
    );
}

add_action('admin_enqueue_scripts', 'wpbs_enqueue_admin_styles');

add_action('wp_enqueue_scripts', 'wpbs_enqueue_styles');