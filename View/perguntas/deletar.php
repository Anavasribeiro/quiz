<?php 
require_once 'C:/aluno2/xampp/htdocs/tabela_quiz/config.php';
require_once 'C:\aluno2\xampp\htdocs\tabela_quiz\Controller\PerguntaController.php';

$perguntaController = new PerguntaController($pdo);
$perguntas = $perguntaController->listarPerguntas();

if(isset($_POST['deletar_pergunta_id'])){
    $perguntaController->deletarPergunta($_POST['deletar_pergunta_id']);
    header("Location: ../../index.php");
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>deletar pergunta</title>
</head>
<body>

    <h1>DELETAR PERGUNTA</h1>
    <form method="POST"> 
        <select name = "deletar_pergunta_id">
            <?php
            foreach($perguntas as $pergunta):?>
            <option value="<?php echo $pergunta['id'] ?>"> <?php echo $pergunta ['texto_pergunta']; ?> </option>

            <?Php endforeach; ?>
        </select>
        <button type="submit">EXCLUIR PERGUNTA</button>
    </form>


</body>
</html>