
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="estilo.css"></script>

</head>
<body>
<h1>PERGUNTAS</h1>

<body>
<?php

require_once 'C:/aluno2/xampp/htdocs/tabela_quiz/config.php';
require_once 'C:/aluno2/xampp/htdocs/tabela_quiz/Controller/JogoController.php';
require_once 'C:/aluno2/xampp/htdocs/tabela_quiz/Controller/PerguntaController.php';
require_once 'C:/aluno2/xampp/htdocs/tabela_quiz/Controller/ResultadoController.php';



$perguntaController = new PerguntaController($pdo);
//$resultadoController = new ResultadoController($pdo);
//$jogoController = new JogoController($pdo);
//criamos a váriavel esportes parar usar a função listar esportes

$perguntaController->exibirListaPergunta();
//$jogoController->exibirListaJogo();
//$resultadoController->exibirListaResultados();


?>

    <script src="questions.js"></script>
    <script src="app.js"></script>
</body>

</html>



</body>

</html>
