<?php

$server = "localhost:3306";
$username = "root";
$password = "";
$database = "empleados";

global $conn;
$conn = mysqli_connect($server, $username, $password,$database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>