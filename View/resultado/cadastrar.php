<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Resultado</title>
</head>
<body>

<h1>Cadastrar Resultado</h1>
<form method="POST">
    <input type="text" name = "tipo" placeholder = "Tipo" >
    <input type="text" name = "vencedor" placeholder = "Vencedor" >
    <input type="text" name = "pontuacao_final_time_1" placeholder = "Pontuacao final time 1" >
    <input type="text" name = "pontuacao_final_time_2" placeholder = "Pontuacao final time 2" >

    <button type="submit"> Enviar </button>

</form>

</body>
</html>
<?php
require_once 'C:/aluno2/xampp/htdocs/tabela_quiz/config.php';
require_once 'C:/aluno2/xampp/htdocs/tabela_quiz/Controller/ResultadoController.php';


if (isset($_POST["tipo"]) &&
isset($_POST["vencedor"]) &&
isset($_POST["pontuacao_final_time_1"]) &&
isset($_POST["pontuacao_final_time_2"]) 
){
    $esporteController = new ResultadoController($pdo);
    $esporteController->criarResultado($_POST ["tipo"], $_POST ["vencedor"], $_POST ["pontuacao_final_time_1"], $_POST ["pontuacao_final_time_2"]);
    header("Location: ../../index.php");
}

?>

