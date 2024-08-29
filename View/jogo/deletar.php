<?php 
require_once 'C:/aluno2/xampp/htdocs/tabela_quiz/config.php';
require_once 'C:/aluno2/xampp/htdocs/tabela_quiz/Controller/JogoController.php';

$jogoController = new JogoController($pdo);
$jogos = $jogoController->listarJogos();

if(isset($_POST['deletar_jogo_id'])){
    $jogoController->deletarJogo($_POST['deletar_jogo_id']);
    header("Location: ../../index.php");
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>deletar jogo</title>
</head>
<body>

    <h1>DELETAR JOGO</h1>
    <form method="POST"> 
        <select name = "deletar_jogo_id">
            <?php
            foreach($jogos as $jogo):?>
            <option value="<?php echo $jogo['id'] ?>"> <?php echo $jogo ['total_perguntas']; ?> </option>

            <?Php endforeach; ?>
        </select>
        <button type="submit">EXCLUIR JOGO</button>
    </form>


</body>
</html>