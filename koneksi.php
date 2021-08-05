<?php
$servername = "localhost";
$username = "ifscxyz1_18102124";
$password = "zSzxudZgoHwW";
$dbname = "ifscxyz1_covana";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}