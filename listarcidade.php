<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lista.css">
    <title>Document</title>
</head>
<body>
    <?php 
    include('includes/conexao.php');
    $sql = "SELECT * FROM cidade";
    $result = mysqli_query($con,$sql);
    
    ?>
      <nav>
        <ul>
        <li><a href="cadastrarCliente.php">Cadastrar cliente</a></li>
        <li><a href="listarCliente.php">Ver clientes já cadastrados</a></li>
        <li><a href="index.html">MENU</a></li>
        </ul>
        
       
    </nav>
    <h1 align="center">Consulte cidade</h1>
    <table align="center" border="1" width="500">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Estado</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </tr>
        <?php 
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['nome']."</td>";
            echo "<td>".$row['estado']."</td>";
            echo "<td><a href = 'alteraCidade.php?id=".$row['id']."'>Alterar</a></td>";
            echo "<td><a href = 'deletaCidade.php?id=".$row['id']."'>Deleta</a></td>";
            echo "</tr>";
        }
        ?> 
    </table>

    <a  href="cadastrocidade.html">Cadastrar nova cidade</a>
    
</body>
</html>