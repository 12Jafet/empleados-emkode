<?php
require 'conn.php';

$conn = $GLOBALS['conn'];
$id = $_POST["id"];

if($conn -> query("delete from empleado where id=".$id)){
    echo json_encode(true);
}else
    echo json_encode(false);

?>