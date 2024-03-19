<?php
$servername = "localhost";
$username = "lost1found";
$password = "Tye858k24.";
$dbname = "lost1found_lost1DB";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>