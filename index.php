
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
</head>
<body>
<h1>LISTAGEM</h1>
<br>
<?php

require_once 'C:/aluno2/xampp/htdocs/quiz/config.php';
require_once 'C:/aluno2/xampp/htdocs/quiz/Controller/JogoController.php';
require_once 'C:/aluno2/xampp/htdocs/quiz/Controller/PerguntaController.php';
require_once 'C:/aluno2/xampp/htdocs/quiz/Controller/ResultadoController.php';

//importar os arquivos que iremos utilizar

$perguntaController = new PerguntaController($pdo);
$resultadoController = new ResultadoController($pdo);
$jogoController = new JogoController($pdo);
//criamos a váriavel esportes parar usar a função listar esportes

$perguntaController->exibirListaPergunta();
$jogoController->exibirListaJogo();
$resultadoController->exibirListaResultados();




?>


</body>

</html>
