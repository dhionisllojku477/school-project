<?php
// Define variables and constants
global $db;
$db = new mysqli("localhost", "username", "password", "database_name");

if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}
?>
