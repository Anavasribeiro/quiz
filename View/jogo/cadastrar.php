<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Jogo</title>
</head>
<body>

<h1>Cadastrar Jogo</h1>
<form method="POST">
<input type="text" name = "tipo" placeholder = "Tipo" >
    <input type="text" name = "total_perguntas" placeholder = "Total de perguntas" >
    <input type="text" name = "pergunta_atual_id" placeholder = "Pontuação atual id" >
    <input type="text" name = "pontuacao_time_1" placeholder = "Pontuação time 1" >
    <input type="text" name = "pontuacao_time_2" placeholder = "Pontuação time 2" >
    <input type="text" name = "perguntas_restante" placeholder = "Perguntas restantes" >

    <button type="submit"> Enviar </button>

</form>

</body>
</html>
<?php
require_once 'C:/aluno2/xampp/htdocs/tabela_quiz/config.php';
require_once 'C:/aluno2/xampp/htdocs/tabela_quiz/Controller/JogoController.php';


if (isset($_POST["tipo"]) &&
isset($_POST["total_perguntas"]) &&
isset($_POST["pergunta_atual_id"]) &&
isset($_POST["pontuacao_time_1"]) &&
isset($_POST["pontuacao_time_2"]) &&
isset($_POST["perguntas_restante"])
){
    $esporteController = new JogoController($pdo);
    $esporteController->criarJogo($_POST ["tipo"], $_POST ["total_perguntas"], $_POST ["pergunta_atual_id"], $_POST ["pontuacao_time_1"], 
    $_POST ["pontuacao_time_2"], $_POST ["perguntas_restante"]);
    header("Location: ../../index.php");
}

?>