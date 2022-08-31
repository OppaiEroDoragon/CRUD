<?php

include_once "../inc/connect.php";
session_start(); 


require_once "../action/clearinput.php";

if( isset($_POST['btn-cadastro']) == true ){
    
   
    $cpf = clear($_POST['cpf']);
    $nome = clear($_POST['nome']);
    $sobrenome = clear($_POST['sobrenome']);
    $email = clear($_POST['email']);
    $sexo = clear($_POST['sexo']);
    $telefone = clear($_POST['telefone']);

    
    if( empty($_POST['cpf'])|| empty($_POST['nome']) || empty($_POST['sobrenome']) || empty($_POST['email']) || empty($_POST['sexo']) || empty($_POST['telefone'])){
        echo " erro ao cadastrar ";
    } else {
        
        $sql = "INSERT INTO pessoa (cpf,nome,sobrenome,email,sexo,telefone) VALUES ('$cpf','$nome','$sobrenome','$email','$sexo','$telefone')" ;
        echo $sql;
    }
        if( mysqli_query($connect, $sql)){
            echo " inserido com sucesso";
            header("location: ../index.php");
        } else {
            header("location: ../index.php");
        }
    }
