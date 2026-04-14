<?php
$conn = new mysqli("localhost", "root", "", "ihris");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>