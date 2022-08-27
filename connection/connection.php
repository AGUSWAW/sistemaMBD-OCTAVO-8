<?php

//Datos de la db

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'tienda';

//query para conexion a DB
// variables se pone el valor pedo $

$connection = mysqli_connect($hostname,$username,$password,$database);

//validador de conexxion

if (mysqli_connect_error()){
    echo 'conexion fallida';
}else {
    //echo 'conexion exitosa';
}


?>