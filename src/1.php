<?php
// Simple School Project
$name = 'John';
$age = 25;

function calculateAge($age) {
    $today = date('Y');
    $birthYear = date("Y", strtotime("-{$age} years"));
    return $today - $birthYear;
}

echo "My name is {$name}, and I am {$calculateAge($age)} years old.";
?>