<?php
// Database connection details (replace with your actual credentials)
$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "awtoulag";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

mysqli_set_charset($conn, "utf8");
?>