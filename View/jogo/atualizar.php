<?php 
require_once 'C:/aluno2/xampp/htdocs/tabela_quiz/config.php';
require_once 'C:/aluno2/xampp/htdocs/tabela_quiz/Controller/JogoController.php';

$jogoController = new JogoController($pdo);
$jogos = $jogoController->listarJogos();

//validacao 


if (isset($_POST['tipo']) && isset($_POST['total_perguntas']) && isset($_POST['pergunta_atual_id' ])
 && isset($_POST['pontuacao_time_1']) && isset($_POST['pontuacao_time_2' ]) && isset($_POST['perguntas_restante' ]) && isset($_POST['id_jogo' ])){

    $jogoController->atualizarJogo($_POST['tipo'], $_POST ['total_perguntas'], $_POST ['pergunta_atual_id'],
    $_POST ['pontuacao_time_1'], $_POST ['pontuacao_time_2'], $_POST ['perguntas_restante'], $_POST ['id_jogo']);
   
    header("Location: ../../index.php");

}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATUALIZAR JOGO</title>
</head>
<body>

<form method="POST">
    <select name="id_jogo">
        <?php foreach ($jogos as $jogo):?>
            <option value = "<?php echo $jogo['id'];?>">
            <?php echo $jogo ['id']; //valor pra exibir pro usuario ?> </option>
            <?php endforeach; ?>    
    </select>
    
    <input type="text" name="tipo" placeholder="atualize o tipo">
    <input type="text" name="total_perguntas" placeholder="total de perguntas">

    <input type="text" name="pergunta_atual_id" placeholder="pergunta atual id">
    <input type="text" name="pontuacao_time_1" placeholder="pontuação time 1">

    <input type="text" name="pontuacao_time_2" placeholder="pontuação time">
    <input type="text" name="perguntas_restante" placeholder="perguntas restantes">

    <button type="submit"> ATUALIZAR </button>
    
</form>
    

<button type=""> <a href="../../index.php">VOLTAR</a></button>

</body>
</html>