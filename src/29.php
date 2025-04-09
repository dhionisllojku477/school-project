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

  // Get user inputs
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];

  // Update the student record
  $sql = "UPDATE students SET fname = ?, lname = ? WHERE id = ?";
  if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }

  // Close the connection
  $conn->close();
?>
