# WP Business Status

A lightweight WordPress plugin that allows business owners to manage and display their current availability status using a customizable shortcode.

## Features

- Custom business name
- Business availability status
- Typical response time
- Text alignment customization
- Text color customization
- Font style options
- Live status preview
- Shortcode support
- WordPress Settings integration

## Shortcode

Use the following shortcode on any WordPress page or post:

`[wpbs_business_status]`

## Installation

1. Download the plugin ZIP file.
2. Log in to your WordPress dashboard.
3. Go to **Plugins → Add New Plugin → Upload Plugin**.
4. Upload the ZIP file and click **Install Now**.
5. Activate **WP Business Status**.
6. Go to **Settings → WP Business Status** to configure the plugin.

## Usage

1. Enter your business name.
2. Select your current availability status.
3. Enter your typical response time.
4. Customize the text alignment, color, and font style.
5. Click **Save Changes**.
6. Add the shortcode `[wpbs_business_status]` to any page, post, or compatible page builder.

The business status will automatically update wherever the shortcode is used when the settings are changed.

## Project Structure

```text
wp-business-status/
├── assets/
│   └── css/
│       └── wp-business-status.css
├── includes/
│   ├── settings.php
│   └── shortcode.php
├── templates/
│   ├── settings-page.php
│   └── status-card.php
├── README.md
└── wp-business-status.php
```

### File Responsibilities

- `wp-business-status.php` — Main plugin file and asset loading.
- `includes/settings.php` — Registers plugin settings and the WordPress admin settings page.
- `includes/shortcode.php` — Handles the `[wpbs_business_status]` shortcode and status logic.
- `templates/settings-page.php` — Contains the admin settings interface.
- `templates/status-card.php` — Contains the frontend status card markup.
- `assets/css/wp-business-status.css` — Contains frontend and admin styling.

## Requirements

- WordPress 6.0 or higher
- PHP 8.0 or higher

## License

This plugin is licensed under the GPL v2 or later.

## Author

Developed by **Seleno Development**  
https://selenodev.com
