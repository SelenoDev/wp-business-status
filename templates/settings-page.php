<?php
if (!defined('ABSPATH')) {
    exit;
}
?>

<div class="wrap">
        <h1>WP Business Status</h1>
        
        <div class="wpbs-shortcode-box">
            <strong>Shortcode</strong>
            <p>Use this shortcode to display your business status:</p>
            <code>[wpbs_business_status]</code>
        </div>

        <h2>Business Settings</h2>

        <form method="post" action="options.php">
            <?php settings_fields('wpbs_business_status_group'); ?>

            <div class="wpbs-setting-row">
                <label for="wpbs_business_name">
                    Business Name
                </label>
                
                <input
                type="text"
                id="wpbs_business_name"
                name="wpbs_business_name"
                value="<?php echo esc_attr(get_option('wpbs_business_name', 'My Business')); ?>">
            </div>

            <div class="wpbs-setting-row">
                <label for="wpbs_business_status_value">
                    Current Status
                </label>

                <?php $current_status = get_option('wpbs_business_status_value', 'accepting'); ?>

                <select
                id="wpbs_business_status_value"
                name="wpbs_business_status_value">

                <option value="accepting" <?php selected($current_status, 'accepting'); ?>>
                    Accepting New Clients
                </option>

                <option value="limited" <?php selected($current_status, 'limited'); ?>>
                    Limited Availability
                </option>

                <option value="unavailable" <?php selected($current_status, 'unavailable'); ?>>
                    Not Accepting New Clients
                </option>
            </select>
        </div>

        <div class="wpbs-setting-row">
            <label for="wpbs_response_time">
                Typical Response Time
            </label>

            <input
            type="text"
            id="wpbs_response_time"
            name="wpbs_response_time"
            value="<?php echo esc_attr(get_option('wpbs_response_time', '1–2 business days')); ?>">
        </div>

            <h2>Appearance</h2>

            <div class="wpbs-setting-row">
                <label for="wpbs_text_alignment">
                    Text Alignment
                </label>

                <?php $text_alignment = get_option('wpbs_text_alignment', 'left'); ?>

                <select
                id="wpbs_text_alignment"
                name="wpbs_text_alignment">

                <option value="left" <?php selected($text_alignment, 'left'); ?>>
                    Left
                </option>

                <option value="center" <?php selected($text_alignment, 'center'); ?>>
                    Center
                </option>

                <option value="right" <?php selected($text_alignment, 'right'); ?>>
                    Right
                </option>
            </select>
        </div>

        <div class="wpbs-setting-row">
            <label for="wpbs_text_color">
                Text Color
            </label>

            <input
            type="color"
            id="wpbs_text_color"
            name="wpbs_text_color"
            value="<?php echo esc_attr(get_option('wpbs_text_color', '#333333')); ?>">
        </div>

        <div class="wpbs-setting-row">
            <label for="wpbs_font_style">
                Font Style
            </label>

            <?php $font_style = get_option('wpbs_font_style', 'default'); ?>

            <select
            id="wpbs_font_style"
            name="wpbs_font_style">

            <option value="default" <?php selected($font_style, 'default'); ?>>
                Site Default
            </option>

            <option value="normal" <?php selected($font_style, 'normal'); ?>>
                Normal
            </option>

            <option value="italic" <?php selected($font_style, 'italic'); ?>>
                Italic
            </option>
            
            <option value="bold" <?php selected($font_style, 'bold'); ?>>
                Bold
            </option>
        </select>
    </div>

            <?php submit_button(); ?>

            <div class="wpbs-preview-section">
                <h2>Preview</h2>
                <p>See how your business status will appear on the site.</p>
                
                <div class="wpbs-preview">
                    <?php echo wpbs_business_status(); ?>
                </div>
            </div>

        </form>
    </div>
