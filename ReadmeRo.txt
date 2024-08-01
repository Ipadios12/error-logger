=== Error Logger ===
Contributors: Valentin Constantinescu
Tags: error, logging, debug, development
Requires at least: 4.6
Tested up to: 6.2
Stable tag: 1.1
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Capturează și loghează erorile PHP și le afișează pe pagină.

== Description ==

Pluginul "Error Logger" este conceput pentru a captura și a loga erorile PHP, afișându-le pe pagină pentru a facilita procesul de depanare. Acesta loghează erorile într-un fișier și le afișează într-un div roșu pe pagină, evidențiind detalii importante despre eroare.

== Installation ==

1. Descarcă fișierul `error-logger.php` sau creează un nou fișier cu acest nume.
2. Creează un director nou în `wp-content/plugins/` denumit `error-logger`.
3. Plasează fișierul `error-logger.php` în directorul `error-logger`.
4. Activează pluginul din meniul „Plugins” din WordPress.

== Frequently Asked Questions ==

= Cum pot testa pluginul? =

Adaugă următorul cod în fișierul `functions.php` al temei tale pentru a provoca o eroare intenționată:

```php
function test_error_logger() {
    echo $undefined_variable;
}
add_action('wp_footer', 'test_error_logger');