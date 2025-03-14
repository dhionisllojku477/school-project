<?php
// Get the current timestamp and convert it to a readable format
$timestamp = time();
$current_time = date("h:i A", $timestamp);

// Display the current time on the page
echo "Current Time is: $current_time";
?>