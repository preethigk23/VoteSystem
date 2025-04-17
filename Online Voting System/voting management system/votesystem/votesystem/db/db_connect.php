<?php
$servername = "localhost";
$username = "root";
$password = ""; // leave this empty if using XAMPP
$database = "votesystem"; // or your actual DB name

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
