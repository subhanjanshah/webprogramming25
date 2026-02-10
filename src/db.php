<?php
$servername = "localhost"; // Replace with your MySQL server hostname
$username = "amk1012141";     // Replace with your MySQL username
$password = "u4vgjCYx";     // Replace with your MySQL password
$dbname = "wp_amk1012141";       // Replace with the name of your MySQL database

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>