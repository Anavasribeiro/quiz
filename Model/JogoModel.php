<?php

class JogoModel{

    private $pdo;
    public function __construct($pdo){
        $this->pdo= $pdo;
    }

    public function criarJogo($tipo, $total_perguntas, $pergunta_atual_id, $pontuacao_time_1, $pontuacao_time_2, $perguntas_restantes){
        $sql = "INSERT INTO quiz(tipo, total_perguntas, pergunta_atual_id, pontuacao_time_1, pontuacao_time_2, perguntas_restantes) VALUES ( ?, ?, ?, ?, ?, ? )";
        //colocamos interrogação pois vai referenciar ao cifrao, ele ira pegar as respostas que serao dadas por alguem no input do cifrao

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$tipo,$total_perguntas, $pergunta_atual_id, $pontuacao_time_1, $pontuacao_time_2, $perguntas_restantes]);
    }

    public function listarJogos(){
        $sql = "SELECT * FROM quiz WHERE tipo = 'jogo' ";
        //selecionamos todas as colunas
        $stmt = $this->pdo->query($sql);
        //query = consulta o banco de dados se existe
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    
    public function atualizarJogo($tipo, $total_perguntas, $pergunta_atual_id, $pontuacao_time_1, $pontuacao_time_2, $perguntas_restantes, $id_jogo){
          $sql = "UPDATE quiz SET tipo = ?, total_perguntas = ?, pergunta_atual_id = ?, pontuacao_time_1 = ?, pontuacao_time_2 = ?, perguntas_restantes = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$tipo, $total_perguntas, $pergunta_atual_id, $pontuacao_time_1, $pontuacao_time_2, $perguntas_restantes, $id_jogo]);
    }

     //DELETAR 

     public function deletarJogo($id_jogo){
     $sql = "DELETE FROM quiz WHERE id =?";
     $stmt = $this->pdo-> prepare($sql);
     //prepare estapreparando a ação
     $stmt->execute([$id_jogo]);
    }
}