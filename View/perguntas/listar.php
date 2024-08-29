<?php

foreach ($perguntas as $pergunta){
    echo "Tipo:" . $pergunta["tipo"] . "<br>";
    echo "Texto pergunta:" . $pergunta["texto_pergunta"] . "<br>";
    echo "Resposta correta:" . $pergunta["resposta_correta"] . "<br>";
    echo "Opcao 1:" . $pergunta["opcao_1"] . "<br>";
    echo "Opcao 2:" . $pergunta["opcao_2"] . "<br>";
    echo "Opcao 3:" . $pergunta["opcao_3"] . "<br>";
    echo "Opcao 4:" . $pergunta["opcao_4"] . "<br>";
    echo "<br> <hr>";
}

?>
