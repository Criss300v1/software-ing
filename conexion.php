<?php
function conexion(){
$server = "localhost";
$user = "root";
$pass = "";
$db = "software-ing";

$conexion = new mysqli($server,$user,$pass,$db);

if($conexion->connect_error){
    die("la conexion a fallado" . $conexion->connect_error);
}
}

?>