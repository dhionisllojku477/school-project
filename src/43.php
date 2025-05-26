<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "school_project";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Your code goes here

    $conn->close();
