<?php

$servername = "gastrako_yoboredbeer";
$username = "gastrako_chris";
$password = "1q0p2w9o";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

?>