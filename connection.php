<?php
$servername = "localhost";
$username = "root";
$password = "itv";
$dbname = "registered_users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} ?>