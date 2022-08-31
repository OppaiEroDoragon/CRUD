<?php

require_once "../inc/connect.php"; 
require_once "../action/clearInput.php";

$id = mysqli_escape_string($connect, $_POST['cpf']);
$sql = "DELETE FROM pessoa WHERE cpf = '$id' ";

if(mysqli_query($connect,$sql) ){
    
    header("location: ../index.php");
}