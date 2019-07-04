<?php
require 'conn.php';


$conn = $GLOBALS['conn'];
$res=array();
$array = array();

$filter = $_POST["filter"];
$keyWord = $_POST["keyWord"];

switch ($filter) {
    case 'id':
        $res = $conn -> query("select * from empleado where id like '%".$keyWord."%'");
        result($res);
        break;
    case 'name':
        $res = $conn -> query("select * from empleado where name like '%".$keyWord."%'");
        result($res);
        break;
    case 'last_name':
        $res = $conn -> query("select * from empleado where last_name like '%".$keyWord."%'");
        result($res);
        break;
    case 'phone':
        $res = $conn -> query("select * from empleado where phone like '%".$keyWord."%'");
        result($res);
        break;
    case 'email':
        $res = $conn -> query("select * from empleado where email like '%".$keyWord."%'");
        result($res);
        break;
}
// echo $filter;

function result ($res){
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
}
    
?>