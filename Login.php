
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> <link rel="stylesheet" href="php.css">
</head>
<body>
<?php
include('includes/conexao.php');
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM cliente WHERE email = '$email'";

$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_array($result);
    if($row['senha'] == $senha){
        include('inicia-sessao.php');
        $_SESSION['login'] = $row;
       header('Location: index.php');
    }
    else{
        echo "<h3>Senha invalida... seu BURRO!!!</h3>";
    }
}
else{
    echo "<h3>Usuario não encontrado</h3>";
}
?>
</body>
</html>