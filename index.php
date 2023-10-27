<?php
function getCurrentDateTime() {
    $currentDateTime = date("Y-m-d H:i:s");
    return $currentDateTime;
}

// Example usage:
$currentDateTime = getCurrentDateTime();
echo "Current Date and Time: " . $currentDateTime;
?>
