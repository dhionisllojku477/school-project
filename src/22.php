<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "school_project";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Example code to display a simple message

    echo "Hello, this is a PHP code.";
    $conn->close();
?>
