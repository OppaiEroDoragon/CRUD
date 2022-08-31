<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "agenda";

$connect = mysqli_connect($server,$user,$password,$database);

if( mysqli_connect_error() ){
    echo "erro na conexao: ".mysqli_connect_error();
}