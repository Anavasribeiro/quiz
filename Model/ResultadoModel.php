<?php

class ResultadoModel{

    private $pdo;
    public function __construct($pdo){
        $this->pdo= $pdo;
    }

    public function criarResultado($tipo, $vencedor, $pontuacao_final_time_1, $pontuacao_final_time_2){
        $sql = "INSERT INTO quiz($tipo, $vencedor, $pontuacao_final_time_1, $pontuacao_final_time_2) VALUES (?, ?, ?, ?)";
        //colocamos interrogação pois vai referenciar ao cifrao, ele ira pegar as respostas que serao dadas por alguem no input do cifrao

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$tipo, $vencedor, $pontuacao_final_time_1, $pontuacao_final_time_2]);
    }

    public function listarResultados(){
        $sql = "SELECT * FROM quiz WHERE tipo = 'resultado' ";
        //selecionamos todas as colunas
        $stmt = $this->pdo->query($sql);
        //query = consulta o banco de dados se existe
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    
    public function atualizarResultado($tipo, $vencedor, $pontuacao_final_time_1, $pontuacao_final_time_2, $id_resultado){
          $sql = "UPDATE quiz SET tipo = ?, vencedor = ?, pontuacao_final_time_1 = ?, pontuacao_final_time_2 = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$tipo, $vencedor, $pontuacao_final_time_1, $pontuacao_final_time_2, $id_resultado]);
    }

     //DELETAR 

     public function deletarResultado($id_resultado){
     $sql = "DELETE FROM quiz WHERE id =?";
     $stmt = $this->pdo-> prepare($sql);
     //prepare estapreparando a ação
     $stmt->execute([$id_resultado]);
    }
}