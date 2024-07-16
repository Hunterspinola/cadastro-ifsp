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
    $sql = "SELECT * FROM cliente";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
    ?>
    <h1 align="center">Consulte cliente</h1>
    <table align="center" border="1" width="500">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </tr>
        <?php 
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['nome']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td><a href = 'alteraCliente.php?id=".$row['id']."'>Alterar</a></td>";
            echo "<td><a href = 'deletaCliente.php?id=".$row['id']."'>Deleta</a></td>";
            echo "</tr>";
        }
        ?> 
    </table>

    <a  href="cadastrarCliente.html">Cadastrar novo cliente</a>
</body>
</html>