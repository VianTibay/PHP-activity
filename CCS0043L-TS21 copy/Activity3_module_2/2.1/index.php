<?php
for ($i = 0; $i < 100; $i++) {
    // Print comma if not the first number
    if ($i > 0) {
        echo ", ";
    }
    // Always print 2-digit format (e.g., 01, 09, etc.)
    echo str_pad($i, 2, "0", STR_PAD_LEFT);
}
?>
