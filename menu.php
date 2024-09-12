<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
 
    <nav>
        <ul>
            <li><a href="index.php">HOME</a></li>
        <?php
            if(!empty($_SESSION['login'])):
        ?>
        <li><a href="Login.html">Fazer login</a></li>
        <li><a href="cadastrocidade.html">Cadastrar cidades</a></li>
        <li><a href="listarcidade.php">Ver cidades já cadastradas</a></li>
        <li><a href="cadastrarCliente.php">Cadastrar cliente</a></li>
        <li><a href="listarCliente.php">Ver clientes já cadastrados</a></li>
        <li><a href="logout.php">Logout</a></li>
        <?php
            echo "<li><a> Olá  ". $_SESSION['login']['nome'] ."</a></li>";
            endif;
        ?>
        </ul>
        
       
    </nav>
        
   
</body>
</html>