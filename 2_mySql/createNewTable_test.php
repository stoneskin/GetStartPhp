<?php
$server_name = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($server_name, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE Questions (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
body VARCHAR(30) NOT NULL,
description TEXT NOT NULL,
level INT(6),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

echo "this only could run once, please create/delete table from phpAdmin<br>";

if ($conn->query($sql) === TRUE) {
  echo "Table Questions created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>