<?php
$students = array();
$students[] = "John";
$students[] = "Jane";
$students[] = "Bob";
$students[] = "Alice";
$students[] = "Alex";
$grades = array();
$grades["John"] = 95;
$grades["Jane"] = 85;
$grades["Bob"] = 70;
$grades["Alice"] = 90;
$grades["Alex"] = 80;
asort($grades);
foreach ($grades as $student => $grade) {
    echo "$student had a grade of $grade.\n";
}
?>