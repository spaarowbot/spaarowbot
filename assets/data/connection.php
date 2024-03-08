<?php
$servername = "localhost";
$username = "spaarow";
$password = "Tye858k24.3008";
$dbname = "spaarow_spaarowDB";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>