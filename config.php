<?php
$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'livros';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// if ($conexao->connect_errno)
// {
//     echo "Erro";
// }
// else{
//     echo "Cadastro reralizado com sucesso!";
// }
?>
