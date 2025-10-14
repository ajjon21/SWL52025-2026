<?php
    $servername = "localhost";
    $username = "Aaron";
    $password = "Password123";
    $dbname = "SWLW4";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>