<?php
require 'conn.php';

$conn = $GLOBALS['conn'];
$res = $conn -> query("select * from empleado");
$array = array();
$i=0;
while ($registro = $res->fetch_array()) {
    $array[$i]["id"] = $registro["id"];
    $array[$i]["name"] = $registro["name"];
    $array[$i]["last_name"] = $registro["last_name"];
    $array[$i]["email"] = $registro["email"];
    $array[$i]["phone"] = $registro["phone"];
    $i++;
}
echo json_encode($array);

?>