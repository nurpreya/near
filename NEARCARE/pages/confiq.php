<?php
$hostname = "localhost";
$username = "your_db_username";
$password = "your_db_password";
$database = "hospital_db";

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}