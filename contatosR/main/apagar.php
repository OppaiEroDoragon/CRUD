<?php

require_once "../inc/header.php"; 
require_once "../inc/connect.php"; 
require_once "../action/clearInput.php";

$id = mysqli_escape_string($connect, $_GET['id']);
$sql = "SELECT * FROM pessoa WHERE cpf = '$id' ";
$resultado = mysqli_query($connect,$sql);
$dados = mysqli_fetch_array($resultado);
?>

<body>
    <br>
    <div class="container"> 
        <h1 style="text-align: center;"> Você realmente deseja apagar?</h1>
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

            <tbody>
                <tr>
                    <td><?php echo $dados['cpf'] ?></td>
                    <td><?php echo $dados['nome'] ?></td>
                    <td><?php echo $dados['sobrenome'] ?></td>
                    <td><?php echo $dados['email'] ?></td>
                    <td><?php echo $dados['sexo'] ?></td>
                    <td><?php echo $dados['telefone'] ?></td>
                </tr>
            </tbody>
        </table>

        <form action="../action/delete.php  " method="post">
            <input type="hidden">
            <button  class="btn btn-danger btn-lg active" role="button" aria-pressed="true" type="submit" value="<?php echo $id;?>" name="cpf"> Sim, quero deletar</button>

            <a href="../index.php" class="btn btn-success btn-lg active" role="button" aria-pressed="true"> Não, não quero deletar</a>
        </form>      

        <?php require_once "../inc/footer.php"; ?>
