<?php 
require_once "inc/header.php";
require_once "inc/connect.php"; ?>

<body>
    <br>
    <div class="container">
        <h1 class="mx-auto" style="width: 200px;"> Agenda de Clientes </h1>
        <br>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">CPF</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Sobrenome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Telefone</th>
                </tr>
            </thead>

            <?php require_once "action/read.php"; ?>            
        </table>        

        <a href="main/cadastrar.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"> Cadastrar</a>

        <?php require_once "inc/footer.php"; ?>
        