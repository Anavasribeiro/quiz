<?php

foreach ($jogos as $jogo){
    echo "Tipo:" . $jogo["tipo"] . "<br>";
    echo "Total perguntas:" . $jogo["total_perguntas"] . "<br>";
    echo "Pergunta atual id:" . $jogo["pergunta_atual_id"] . "<br>";
    echo "Pontuacao time 1:" . $jogo["pontuacao_time_1"] . "<br>";
    echo "Pontuacao time 2:" . $jogo["pontuacao_time_2"] . "<br>";
    echo "Perguntas Restante:" . $jogo["perguntas_restantes"] . "<br>";
    echo "<br> <hr>";
}

?>
