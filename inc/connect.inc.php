<?php
$servername = "mysql-itu.alwaysdata.net";
$username = "itu_men";
$password = "MENDRIKAmalal";
$dbname = "itu_ebuybd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
