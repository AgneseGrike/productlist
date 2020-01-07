<?php

$dbServername = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "product_list";

$conn = mysqli_connect($dbServername, $dbUserName, $dbPassword, $dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


