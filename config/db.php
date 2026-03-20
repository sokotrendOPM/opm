<?php
$conn = new mysqli("localhost", "root", "", "sokotrend");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>