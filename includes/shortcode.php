<?php

if (!defined('ABSPATH')) {
    exit;
}

function wpbs_business_status()
{
    $business_name = get_option('wpbs_business_name', 'My Business');
    $status = get_option('wpbs_business_status_value', 'accepting');
    $response_time = get_option('wpbs_response_time', '1–2 business days');
    $text_alignment = get_option('wpbs_text_alignment', 'left');
    $text_color = get_option('wpbs_text_color', '#333333');
    $font_style = get_option('wpbs_font_style', 'default');
    
    $status_labels = [
        'accepting' => 'Currently Accepting New Clients',
        'limited' => 'Limited Availability',
        'unavailable' => 'Not Accepting New Clients'
    ];
    
    $status_text = $status_labels[$status] ?? 'Status unavailable';

    ob_start();
    require plugin_dir_path(__DIR__) . 'templates/status-card.php';
    return ob_get_clean();
    
}

add_shortcode('wpbs_business_status', 'wpbs_business_status');