<?php
require 'conn.php';

$conn = $GLOBALS['conn'];

$name = $_POST["name"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];
$phone = $_POST["phone"];

if($conn -> query("insert into empleado (name,last_name,email,phone) values ('".$name."','".$last_name."','".$email."','".$phone."')")){
    echo json_encode(true);
}else
    echo json_encode(false);

?>