<?php
session_start();
$sql = "SELECT * FROM pessoa ";
$resultado = mysqli_query($connect, $sql);


while ($dados = mysqli_fetch_array($resultado)) {

?>
    <tbody>
        
        <tr>
            <td><?php echo $dados['cpf']; ?></td>
            <td><?php echo $dados['nome']; ?></td>
            <td><?php echo $dados['sobrenome'] ?></td>
            <td><?php echo $dados['email'] ?></td>
            <td><?php echo $dados['sexo'] ?></td>
            <td><?php echo $dados['telefone'] ?></td>

            
            <td><a class="btn btn-secondary btn-sm" href="main/editar.php?id=<?php echo $dados['cpf']?>" role="button" style="margin:2%;">Editar</a>

            <a class="btn btn-secondary btn-sm btn-danger" role="button" href="main/apagar.php?id=<?php echo $dados['cpf'];?>" style="margin:2%;">Apagar</a></td>
        </tr>
    </tbody>
<?php } ?>