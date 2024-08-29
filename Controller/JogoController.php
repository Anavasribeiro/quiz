<?php

require_once 'C:/aluno2/xampp/htdocs/tabela_quiz/Model/JogoModel.php';

class JogoController {
    private $jogoModel;

    public function __construct($pdo){
        $this->jogoModel = new JogoModel($pdo);
    }

    public function criarJogo($tipo, $total_perguntas, $pergunta_atual_id, $pontuacao_time_1, $pontuacao_time_2, $perguntas_restantes){
    $this ->jogoModel->criarJogo($tipo,$total_perguntas, $pergunta_atual_id, $pontuacao_time_1, $pontuacao_time_2, $perguntas_restantes);
}

    public function listarJogos(){
        return $this -> jogoModel-> listarJogos();
    }

    public function exibirListaJogo(){
        $jogos = $this->jogoModel->listarJogos();
        include 'C:/aluno2/xampp/htdocs/tabela_quiz/View/jogo/listar.php';
        //estamos retornando os esportes

        }
    //ATUALIZAR ESPORTE

    public function atualizarJogo($tipo, $total_perguntas, $pergunta_atual_id, $pontuacao_time_1, $pontuacao_time_2, $perguntas_restantes, $id_jogo){
        $this->jogoModel->atualizarJogo($tipo, $total_perguntas, $pergunta_atual_id, $pontuacao_time_1, $pontuacao_time_2, $perguntas_restantes, $id_jogo);
    }

    //DELETAR 

    public function deletarJogo($id_jogo){
        $this->jogoModel->deletarJogo($id_jogo);
    }
    //ta criando a função para chamar o deletar esporte no model

}