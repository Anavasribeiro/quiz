<?php 
require_once 'C:/aluno2/xampp/htdocs/tabela_quiz/config.php';
require_once 'C:/aluno2/xampp/htdocs/tabela_quiz/Controller/PerguntaController.php';

$perguntaController = new PerguntaController($pdo);
$perguntas = $perguntaController->listarPerguntas();

//validacao 


if (isset($_POST['tipo']) && isset($_POST['texto_pergunta']) && isset($_POST['resposta_correta' ])
 && isset($_POST['opcao_1']) && isset($_POST['opcao_2' ]) && isset($_POST['opcao_3' ]) && isset($_POST['opcao_4']) && isset($_POST['id_pergunta'])){

    $perguntaController->atualizarPergunta($_POST['tipo'], $_POST ['texto_pergunta'], $_POST ['resposta_correta'],
    $_POST ['opcao_1'], $_POST ['opcao_2'],  $_POST ['opcao_3'], $_POST ['opcao_4'], $_POST ['id_pergunta']);
   
    header("Location: ../../index.php");

}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATUALIZAR PERGUNTA</title>
</head>
<body>

<form method="POST">
    <select name="id_pergunta">
        <?php foreach ($perguntas as $pergunta):?>
            <option value = "<?php echo $pergunta['id'];?>">
            <?php echo $pergunta ['id']; //valor pra exibir pro usuario ?> </option>
            <?php endforeach; ?>

            
    </select>
    <input type="text" name="tipo" placeholder="atualize o tipo">
    <input type="text" name="texto_pergunta" placeholder="atualize o texto da pergunta">

    <input type="text" name="resposta_correta" placeholder="atualize a resposta correta">
    <input type="text" name="opcao_1" placeholder="atualize a opção 1">

    <input type="text" name="opcao_2" placeholder="atualize a opção 2">
    <input type="text" name="opcao_3" placeholder="atualize a opção 3">
    <input type="text" name="opcao_4" placeholder="atualize a opção 4">

    <button type="submit"> ATUALIZAR </button>
    
</form>
    

<button type=""> <a href="../../index.php">VOLTAR</a></button>

</body>
</html>