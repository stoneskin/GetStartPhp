<?php
$server_name = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($server_name, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>