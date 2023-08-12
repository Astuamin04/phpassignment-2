<?php
$servername = "172.31.22.43";
$username = "Astu200543616";
$password = "Ni1ecV3PZD";
$dbname = "Astu200543616";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>