<?php
require_once 'C:/aluno2/xampp/htdocs/tabela_quiz/Controller/PerguntaController.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BRASILQUIZ - INICIO</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <h1> QUIZ - VEJA O QUANTO VOCÊ CONHECE SOBRE O BRASIL</h1>
    <br><br>


    <div class="containergeral">
        <div class="conteudo">
            <p> Selecione a quantidade de perguntas:</p>

            <form action="quiz.php" method="POST">
            <select name="quantidade_pergunta" id="quantidade_pergunta">
                <option value="2">2</option>
                <option value="4">4</option>
                <option value="6">6</option>
                <option value="8">8</option>
                <option value="10">10</option>
            </select> <button type="submit"> INICIO </button></form>
        </div>
</body>

</html>