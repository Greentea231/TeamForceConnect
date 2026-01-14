<?php
session_start();
// Database credentials

$host = "localhost"; 
$username = "root"; 
$password = "sharu123"; 
$database = "teamconnectforce"; 

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
