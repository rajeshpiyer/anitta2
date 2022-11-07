<?php
$servername = "localhost";
$username = "username";
$password = "";

// Create connection
$conn = new mysqli($servername="localhost", $username="root", $password="");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>