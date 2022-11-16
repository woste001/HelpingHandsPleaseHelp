<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "helpinghands123";
$dbPassword = "handshelping";
$dbName     = "HHTest";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>