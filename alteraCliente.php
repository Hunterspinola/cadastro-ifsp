<?php
include('includes/conexao.php');
$id = $_GET['id'];
$sql = "SELECT * FROM cliente WHERE id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> <link rel="stylesheet" href="alteraCliente.css">
</head>
<body>
<form action="alteraClienteExe.php" method="post">
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
                <button type="submit">Cadastrar</button>
            </div>
            <div>
                <button><a href="index.html">voltar</a></button>
            </div>
</body>
</html>