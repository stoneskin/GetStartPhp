<?php
$server_name = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($server_name, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>