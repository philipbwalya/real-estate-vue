<?php
// Database credentials
$host = "localhost";
$username = "root";
$password = "";
$dbname = "real_estate_db";
// Create connection using mysqli
$conn = new mysqli($host, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
