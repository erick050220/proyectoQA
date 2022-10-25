<?php
session_start();

// $conn = mysqli_connect(
//   'localhost',
//   'root',
//   'password123',
//   'phpcrud'
// ) or die(mysqli_erro($mysqli));

$server="localhost";
$user="root";
$pass="";
$basedatos="phpcrud";

// $tabla1="ejercicios";
// $tabla2="soluciones";
// $tabla3="usuarios";
// $tabla4="cursos";
error_reporting(0);

$conexion=new mysqli($server,$user,$pass,$basedatos);

if($conexion->connect_errono){
    echo "fallo en el servidor";
    exit();
}