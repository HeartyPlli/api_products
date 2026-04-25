<?php
$host = "localhost";
$database   = "appdev_api";
$user = "root";
$pass = "";

$conn = new mysqli($host, $user, $pass, $database);

if ($conn->connect_error) {
    die(json_encode(["error" => "**Database connection failed.!  T^T "]));
}
?>