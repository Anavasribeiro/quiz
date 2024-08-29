<?php 
require_once 'C:/aluno2/xampp/htdocs/tabela_quiz/config.php';
require_once 'C:/aluno2/xampp/htdocs/tabela_quiz/Controller/ResultadoController.php';

$resultadoController = new ResultadoController($pdo);
$resultados = $resultadoController->listarResultados();

//validacao 


if (isset($_POST['tipo']) && isset($_POST['vencedor']) && isset($_POST['pontuacao_final_time_1' ])
 && isset($_POST['pontuacao_final_time_2']) && isset($_POST['id_resultado'])){

    $resultadoController->atualizarResultado($_POST['tipo'], $_POST ['vencedor'], $_POST ['pontuacao_final_time_1'],
    $_POST ['pontuacao_final_time_2'], $_POST['id_resultado']);
   
    header("Location: ../../index.php");

}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATUALIZAR RESULTADO</title>
</head>
<body>

<form method="POST">
    <select name="id_resultado">
        <?php foreach ($resultados as $resultado):?>
            <option value = "<?php echo $resultado['id'];?>">
            <?php echo $resultado ['id']; //valor pra exibir pro usuario ?> </option>
            <?php endforeach; ?>
    </select>

    
    <input type="text" name="tipo" placeholder="atualize o tipo">
    <input type="text" name="vencedor" placeholder="atualize o vencedor">

    <input type="text" name="pontuacao_final_time_1" placeholder="atualize a pontuacao final do time 1">
    <input type="text" name="pontuacao_final_time_2" placeholder="atualize a pontuacao final do time 2">


    <button type="submit"> ATUALIZAR </button>

</form>
    

<button type=""> <a href="../../index.php">VOLTAR</a></button>

</body>
</html>