<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="listarCliente.css">
    <title>Document</title>
</head>
<body>
    
    <?php

    include('includes/conexao.php');
    $sql = "SELECT cli.id, cli.nome nomecliente, cli.email, cli.ativo, cid.nome nomecidade, cid.estado 
            from cliente cli 
            left join cidade cid on cid.id = cli.cidade_id";
    $result = mysqli_query($con,$sql);
   
    ?>
    <nav>
        <ul>
        <li><a href="cadastrocidade.html">Cadastrar cidades</a></li>
        <li><a href="listarcidade.php">Ver cidades já cadastradas</a></li>
        <li><a href="index.html">MENU</a></li>
        </ul>
        
       
    </nav>

    <h1 align="center">Consulte cliente</h1>
    <table align="center" border="1" width="500">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Ativo</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </tr>
        <?php 
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['nomecliente']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['ativo']."</td>";
            echo "<td>".$row['nomecidade']."</td>";
            echo "<td>".$row['estado']."</td>";            
            echo "<td><a href = 'alteraCliente.php?id=".$row['id']."'>Alterar</a></td>";
            echo "<td><a href = 'deletaCliente.php?id=".$row['id']."'>Deleta</a></td>";
            echo "</tr>";
        }
        ?> 
    </table>
    <div>
        <button><a  href="cadastrarCliente.php">Cadastrar novo cliente</a></button>
    </div><br>
    
    
    
</body>
</html>

