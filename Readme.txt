=== Error Logger ===
Contributors: Valentin Constantinescu
Tags: error, logging, debug, development
Requires at least: 4.6
Tested up to: 6.2
Stable tag: 1.1
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Captures and logs PHP errors and displays them on the page.

== Description ==

The "Error Logger" plugin is designed to capture and log PHP errors, displaying them on the page to facilitate the debugging process. It logs errors to a file and displays them in a red div on the page, highlighting important error details.

== Installation ==

1. Download the `error-logger.php` file or create a new file with this name.
2. Create a new directory in `wp-content/plugins/` named `error-logger`.
3. Place the `error-logger.php` file in the `error-logger` directory.
4. Activate the plugin from the "Plugins" menu in WordPress.

== Frequently Asked Questions ==

= How can I test the plugin? =

Add the following code to your theme's `functions.php` file to intentionally trigger an error:

```php
function test_error_logger() {
    echo $undefined_variable;
}
add_action('wp_footer', 'test_error_logger');