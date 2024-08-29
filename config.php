<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>configuracoes</title>
</head>
<body>
    <?php

//CONFIGURAÇÕES BÁSICAS
$host = 'localhost';
$dbname = 'tabela_quiz';
$username = 'root';
$password = '';

// host / nome do banco / nome do user / senha.

//CONEXÃO PDO - padrão de conexão

try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname; charset=utf8", $username, $password);
    $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //confg do propio pdo
} catch (PDOException $e){
    die("ERRO AO CONECTAR:" . $e ->getMessage());
    
}
//catch (e)= exessão
?>
