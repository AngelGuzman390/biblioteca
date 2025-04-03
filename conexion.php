<?php
$host ="127.0.0.1";
$user ="root";
$password= "";
$database = "biblioteca";

$conn = new mysqli($host,  $user, $password, $database);

if($conn->connect_error){
    die("ERROR DE CONEXION: " .$conn->connect_error);
}
?>