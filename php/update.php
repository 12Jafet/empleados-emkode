<?php
require 'conn.php';

$conn = $GLOBALS['conn'];

$id = $_POST["id"];
$name = $_POST["name"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];
$phone = $_POST["phone"];



if($conn -> query("update empleado set name='".$name."', last_name='".$last_name."', email='".$email."', phone='".$phone."'  where id=".$id)){
    echo json_encode(true);
}else
    echo json_encode(false);

?>