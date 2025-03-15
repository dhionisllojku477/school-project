<?php
function getRandomCode() {
    // Generate a random code between 100 and 999
    $code = rand(100, 999);
    
    // Return the code as a string
    return (string) $code;
}
?>
