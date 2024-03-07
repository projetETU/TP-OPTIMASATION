<?php
$servername = "localhost";
$username = "men";
$password = "123";
$dbname = "ebuybd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Your code here

// Close connection
$conn->close();
?>
