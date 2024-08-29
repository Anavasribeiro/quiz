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
    echo '<label> '.'<input type="radio" id="A" name="opcao">' . $item ['opcao_1']. '</label> ';
    echo '<br>';
    echo '<label> '.'<input type="radio" id="B" name="opcao">' . $item ['opcao_2'] . '</label> ';
    echo '<br>';
    echo '<label> '.'<input type="radio" id="C" name="opcao">' . $item ['opcao_3']. '</label> ';
    echo '<br>';
    echo '<label> '.'<input type="radio" id="D" name="opcao">' . $item ['opcao_4']. '</label> ';
    echo '<br>';

}

?>


