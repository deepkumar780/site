<?php
// Database configuration
$host = "localhost";
$username = "root";
$password = "";
$database = "site";

// Create a new MySQLi connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("❌ Database connection failed: " . $conn->connect_error);
}

// Set character encoding to UTF-8
$conn->set_charset("utf8");

// ✅ Connected successfully
// You can now use $conn to run queries
?>

