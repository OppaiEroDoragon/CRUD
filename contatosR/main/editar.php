<?php require_once "../inc/header.php";   
require_once "../inc/connect.php";

if (isset($_GET['cpf'])) {
    $id = mysqli_escape_string($connect , $_GET['cpf']) ;
    $sql = "SELECT * FROM pessoa WHERE cpf = '$id' ";
    $resultado = mysqli_query($connect , $sql);
    $dados = mysqli_fetch_array($resultado);
}
?>

<body>
    <br>
    <div class="container">
        <h1 style="text-align: center;"> Editar Contato </h1>
        <br>

        <form action="../action/update.php" method="post">
            <input type="hidden"  value="<?php echo $id;?>" name="cpf">

            <div class="form-group">
                <label class="col-md-2 control-label" for="cpf">CPF <h11>*</h11></label>
                <div class="col-md-8">
                    <input id="cpf" name="cpf" placeholder="Ex: 55112712378" class="form-control input-md" required="" type="text" value="<?php echo $dados['cpf']?>">
                </div>
            </div>

                <label class="col-md-2 control-label" for="nome">Nome <h11>*</h11></label>
                <div class="col-md-8">
                    <input id="nome" name="nome" placeholder="Ex: Marcos" class="form-control input-md" required="" type="text" value="<?php echo $dados['nome']?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label" for="sobrenome">Sobrenome <h11>*</h11></label>
                <div class="col-md-8">
                    <input id="sobrenome" name="sobrenome" placeholder="Ex: Andrade" class="form-control input-md" required="" type="text" value="<?php echo $dados['sobrenome']?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label" for="email">Email <h11>*</h11></label>
                <div class="col-md-5">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input id="email" name="email" class="form-control" placeholder="email@email.com" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="<?php echo $dados['email']?>">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label" for="sexo">Sexo <h11>*</h11></label>
                <div class="col-md-3">
                    <input id="sexo" name="sexo" placeholder="Ex:M/F" class="form-control input-md" required="" type="text" value="<?php echo $dados['sexo']?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label" for="telefone">Telefone<h11>*</h11></label>
                <div class="col-md-3">
                    <input id="telefone" name="telefone" placeholder="Ex:(17)99171-6564" class="form-control input-md" required="" type="tel" value="<?php echo $dados['telefone']?>">
                </div>
            </div>

            <button type="submit" class="btn btn-success" name="btn-editar">Editar</button>
            <a href="../index.php" class="btn btn-primary"> Voltar</a>
        </form>
    </div>
</body>

<?php require_once "../inc/footer.php"; ?>