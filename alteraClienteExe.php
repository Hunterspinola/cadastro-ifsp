<?php
include('includes/conexao.php');
$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Alteração de Cliente</h1>

    <?php
        $sql = "UPDATE Cliente SET nome = '$nome', email = '$email', senha = '$senha' WHERE id = $id";
        $result = mysqli_query($con, $sql);
        if($result)
        echo "Dados atualizados";
        else
        echo "Erro ao atualizar dados!\n".mysqli_error($con);

    
    ?>
</body>
</html>