<?php
// database connection
$conn = new mysqli('localhost', 'root', '', 'school');

// sql to delete a record
$sql = "DELETE FROM students WHERE id='5';";

// check for successful insertion
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// close the connection
$conn->close();
?>