<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Pergunta</title>
</head>
<body>

<h1>Cadastrar Pergunta</h1>
<form method="POST">
    <input type="text" name = "tipo" placeholder = "Pergunta" >
    <input type="text" name = "texto_pergunta" placeholder = "Texto pergunta" >
    <input type="text" name = "resposta_correta" placeholder = "Resposta Correta" >
    <input type="text" name = "opcao_1" placeholder = "Opcao 1" >
    <input type="text" name = "opcao_2" placeholder = "Opcao 2" >
    <input type="text" name = "opcao_3" placeholder = "Opcao 3" >
    <input type="text" name = "opcao_4" placeholder = "Opcao 4" >
    <button type="submit"> Enviar </button>

</form>

</body>
</html>
<?php
require_once 'C:/aluno2/xampp/htdocs/tabela_quiz/config.php';
require_once 'C:/aluno2/xampp/htdocs/tabela_quiz/Controller/PerguntaController.php';


if (isset($_POST["tipo"]) &&
isset($_POST["texto_pergunta"]) &&
isset($_POST["resposta_correta"]) &&
isset($_POST["opcao_1"]) &&
isset($_POST["opcao_2"]) &&
isset($_POST["opcao_3"]) &&
isset($_POST["opcao_4"]) 
){
    $esporteController = new PerguntaController($pdo);
    $esporteController->criarPergunta($_POST ["tipo"], $_POST ["texto_pergunta"], $_POST ["resposta_correta"], $_POST ["opcao_1"],
    $_POST ["opcao_2"], $_POST ["opcao_3"], $_POST ["opcao_4"]);
    header("Location: ../../index.php");
}

?>
