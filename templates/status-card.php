<?php
if (!defined('ABSPATH')) {
    exit;
}
?>

<div
    class="wpbs-status-card wpbs-status-<?php echo esc_attr($status); ?> wpbs-font-<?php echo esc_attr($font_style); ?>"
    style="
        --wpbs-text-align: <?php echo esc_attr($text_alignment); ?>;
        --wpbs-text-color: <?php echo esc_attr($text_color); ?>;
    ">

    <h3>
        <?php echo esc_html($business_name); ?>
    </h3>

    <p class="wpbs-status-text">
        <?php echo esc_html($status_text); ?>
    </p>

    <p class="wpbs-response-time">
        Typical response time:
        <?php echo esc_html($response_time); ?>
    </p>
</div>