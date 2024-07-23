<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastroCliente.css">
    <title>Document</title>
</head>
<body>
    <form action="CadastroClienteExe.php" method="post">
        <fieldset>
            <legend>Cadastro de cliente</legend>
            <div>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha">
            </div>
            <div>
                <label id="text" for="ativo">Situação do cliente</label>
                <input type="radio" name="ativo" id="ativo" value="1">Ativo
                <input type="radio" name="nao-ativo" id="nao-ativo" value="0" checked>Não Ativo
            </div><br>
            <div>
                <label for="cidade">Cidade</label>
                <select name="cidade" id="cidade"> <br>
                    <?php 
                    include('includes/conexao.php');
                    $sql = "SELECT * FROM cidade ";
                    $result = mysqli_query($con,$sql);
                    while($row = mysqli_fetch_array($result)){
                        echo "<option value='".$row['id']."'>".$row['nome']."/".$row['estado']."</option>";
                    }
                    ?>
                </select>
            </div> <br>
            <div>
                <button type="submit">Cadastrar</button>
            </div> <br>
            <div>
                <button><a href="index.html">voltar</a></button>
            </div>
</body>
</html>