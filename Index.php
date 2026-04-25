<?php
header("Content-Type: application/json");

$request = $_SERVER['REQUEST_URI'];

if (strpos($request, 'products') !== false) {
    require 'products.php';
} else {
    echo json_encode(["message" => "Endpoint not found!! T^T"]);
}
?>