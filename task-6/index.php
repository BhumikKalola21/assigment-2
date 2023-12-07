<?php

// Custom error handler function
function customErrorHandler($errno, $errstr, $errfile, $errline) {
    // Define colors for different types of errors
    $colors = [
        E_NOTICE  => "#3498db", // Blue
        E_WARNING => "#e74c3c", // Red for warnings
        E_ERROR   => "#e74c3c", // Red for errors
    ];

    // Check if running in CLI mode
    if (php_sapi_name() === 'cli') {
        // Output plain text for CLI
        echo "Error: [$errno] $errstr\n";
        echo "Error on line $errline in $errfile\n";
    } else {
        // Get the color for the current error type
        $color = isset($colors[$errno]) ? $colors[$errno] : "#95a5a6"; // Default: Gray

        // Output the error with formatted HTML
        echo "<div style='color: $color;'>";
        echo "<b>Error:</b> [$errno] $errstr<br>";
        echo "Error on line $errline in $errfile<br>";
        echo "</div>";
    }

    // You can log the error to a file or perform additional actions here
}

// Set custom error handler
set_error_handler("customErrorHandler");

// Trigger some notices, warnings, and errors
echo $undefinedVariable; // Notice: Undefined variable
file_get_contents("nonexistentfile.txt"); // Warning: file_get_contents(): Filename cannot be empty
trigger_error("This is a custom error", E_USER_ERROR); // Custom error

// Restore the default error handler
restore_error_handler();

?>