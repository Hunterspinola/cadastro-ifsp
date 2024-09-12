<?php
include('inicia-sessao.php');
//limpa variavel
session_unset();
//destroi sessao
session_destroy();
//volta para a pagina inicial
header('Location: index.php');
?>