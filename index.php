<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include('includes/conexao.php');
    include('inicia-sessao.php');
    if(empty($_SESSION['login'])){
        header("Location: Login.html");
    }

   include('menu.php');
  ?>
</body>
</html>