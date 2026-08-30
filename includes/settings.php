<?php

if (!defined('ABSPATH')) {
    exit;
}

function wpbs_sanitize_status($value)
{
    $allowed_statuses = [
        'accepting',
        'limited',
        'unavailable'
    ];

    if (in_array($value, $allowed_statuses, true)) {
        return $value;
    }

    return 'accepting';
}

function wpbs_sanitize_alignment($value)
{
    $allowed_alignments = [
        'left',
        'center',
        'right'
    ];

    if (in_array($value, $allowed_alignments, true)) {
        return $value;
    }

    return 'left';
}

function wpbs_sanitize_font_style($value)
{
    $allowed_font_styles = [
        'default',
        'normal',
        'italic',
        'bold'
    ];

    if (in_array($value, $allowed_font_styles, true)) {
        return $value;
    }

    return 'default';
}

function wpbs_register_settings()
{
    register_setting(
        'wpbs_business_status_group',
        'wpbs_business_name',
        [
            'sanitize_callback' => 'sanitize_text_field',
            'default' => 'My Business'
        ]
    );

    register_setting(
        'wpbs_business_status_group',
        'wpbs_response_time',
        [
            'sanitize_callback' => 'sanitize_text_field',
            'default' => '1–2 business days'
        ]
    );

    register_setting(
        'wpbs_business_status_group',
        'wpbs_business_status_value',
        [
            'sanitize_callback' => 'wpbs_sanitize_status',
            'default' => 'accepting'
        ]
    );

    register_setting(
        'wpbs_business_status_group',
        'wpbs_text_alignment',
        [
            'sanitize_callback' => 'wpbs_sanitize_alignment',
            'default' => 'left'
        ]
    );

    register_setting(
        'wpbs_business_status_group',
        'wpbs_text_color',
        [
            'sanitize_callback' => 'sanitize_hex_color',
            'default' => '#333333'
        ]
    );

    register_setting(
        'wpbs_business_status_group',
        'wpbs_font_style',
        [
            'sanitize_callback' => 'wpbs_sanitize_font_style',
            'default' => 'default'
        ]
    );
}

add_action('admin_init', 'wpbs_register_settings');

function wpbs_add_settings_page()
{
    add_options_page(
        'WP Business Status',
        'WP Business Status',
        'manage_options',
        'wpbs-business-status',
        'wpbs_settings_page_html'
    );
}

add_action('admin_menu', 'wpbs_add_settings_page');

function wpbs_settings_page_html()
{
    if (!current_user_can('manage_options')) {
        return;
    }

    require plugin_dir_path(__DIR__) . 'templates/settings-page.php';
}