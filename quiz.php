<?php
require_once 'C:\aluno2\xampp\htdocs\tabela_quiz\config.php';
require_once 'C:/aluno2/xampp/htdocs/tabela_quiz/Controller/PerguntaController.php';

$quantidade_pergunta = $_POST["quantidade_pergunta"];



$perguntaController = new PerguntaController($pdo);
$chamar = $perguntaController->chamarPerguntas($quantidade_pergunta);

foreach($chamar as $item){
    echo $item ['texto_pergunta'];
    echo '<br>';
    echo '<br>';
    echo $item ['opcao_1'];
    echo '<br>';
    echo $item ['opcao_2'];
    echo '<br>';
    echo $item ['opcao_3'];
    echo '<br>';
    echo $item ['opcao_4'];
    echo '<br>';
    
}

?>