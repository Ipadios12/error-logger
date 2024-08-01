<?php
/*
Plugin Name: Error Logger
Description: Capturează și loghează erorile PHP și le afișează pe pagină.
Version: 1.1
Author: Constantinescu Valentin
*/



function log_and_display_php_errors($errno, $errstr, $errfile, $errline) {
    $log_file = plugin_dir_path(__FILE__) . 'error-log.txt';
    $message = "[" . date('Y-m-d H:i:s') . "] Error: $errstr in $errfile on line $errline\n";
    error_log($message, 3, $log_file);

    
    if (!headers_sent()) {
        header('Content-Type: text/html; charset=UTF-8');
    }
    echo "<div style='border:2px solid red; padding: 10px; margin: 10px 0; background: #fdd;'>";
    echo "<strong>Error:</strong> $errstr in <strong>$errfile</strong> on line <strong>$errline</strong>";
    echo "</div>";
}


set_error_handler('log_and_display_php_errors');


function log_and_display_unhandled_exceptions($exception) {
    log_and_display_php_errors(E_ERROR, $exception->getMessage(), $exception->getFile(), $exception->getLine());
}


set_exception_handler('log_and_display_unhandled_exceptions');


function log_and_display_fatal_errors() {
    $error = error_get_last();
    if ($error && ($error['type'] === E_ERROR || $error['type'] === E_PARSE || $error['type'] === E_CORE_ERROR || $error['type'] === E_COMPILE_ERROR)) {
        log_and_display_php_errors($error['type'], $error['message'], $error['file'], $error['line']);
    }
}


register_shutdown_function('log_and_display_fatal_errors');

?>