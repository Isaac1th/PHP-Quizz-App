<?php

$host_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "quizzer";

// Create connection
$conn = new mysqli($host_name, $user_name, $password, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";