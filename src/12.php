 <?php
// Set up our database connection information
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school_project";

// Create a new PDO object
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Create a new table in the database if it doesn't already exist
$query = 'CREATE TABLE IF NOT EXISTS students (id INT PRIMARY KEY, name VARCHAR(255), age INT)';
$conn->exec($query);

// Insert some data into the table
$query = "INSERT INTO students (name, age) VALUES ('John Doe', 30)";
$conn->exec($query);

// Retrieve all of the data from the table
$query = 'SELECT * FROM students';
$stmt = $conn->prepare($query);
$stmt->execute();
$students = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Print out the results
echo '<table><tr><th>ID</th><th>Name</th><th>Age</th></tr>';
foreach ($students as $row) {
    echo '<tr>';
    echo '<td>' . $row['id'] . '</td>';
    echo '<td>' . $row['name'] . '</td>';
    echo '<td>' . $row['age'] . '</td>';
    echo '</tr>';
}
echo '</table>';

// Close the database connection
$conn = null;
?>