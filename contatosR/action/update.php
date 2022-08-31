<?php
require_once "../inc/connect.php";
require_once "../action/clearInput.php";


if( isset($_POST['btn-editar']) ){
    
    $id = mysqli_escape_string($connect, $_POST['cpf']);


    $cpf = clear($_POST['cpf']);
    $nome = clear($_POST['nome']);
    $sobrenome = clear($_POST['sobrenome']);
    $email = clear($_POST['email']);
    $sexo = clear($_POST['sexo']);
    $telefone = clear($_POST['telefone']);

    
    $sql = "UPDATE pessoa SET cpf = '$cpf', nome = '$nome' , sobrenome = '$sobrenome' , email = '$email' , sexo = '$sexo'  telefone = '$telefone' WHERE id = '$id' ";

    
    if(mysqli_query($connect , $sql) ){
        echo " editado com sucesso";
        header("location: ../index.php");
    }    
   
}