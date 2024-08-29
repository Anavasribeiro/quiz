<?php 
require_once 'C:/aluno2/xampp/htdocs/tabela_quiz/config.php';
require_once 'C:/aluno2/xampp/htdocs/tabela_quiz/Controller/ResultadoController.php';

$resultadoController = new ResultadoController($pdo);
$resultados = $resultadoController-> listarResultados();

if(isset($_POST['deletar_resultado_id'])){
    $resultadoController->deletarResultado($_POST['deletar_resultado_id']);
    header("Location: ../../index.php");
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>deletar resultado</title>
</head>
<body>

    <h1>DELETAR RESULTADO</h1>
    <form method="POST"> 
        <select name = "deletar_resultado_id">
            <?php
            foreach($resultados as $resultado):?>
            <option value="<?php echo $resultado['id'] ?>"> <?php echo $resultado ['vencedor']; ?> </option>

            <?Php endforeach; ?>
        </select>
        <button type="submit">EXCLUIR RESULTADO</button>
    </form>


</body>
</html>