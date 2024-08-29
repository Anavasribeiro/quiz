<?php

class PerguntaModel{

    private $pdo;
    public function __construct($pdo){
        $this->pdo= $pdo;
    }

    public function criarPergunta($tipo, $texto_pergunta, $resposta_correta, $opcao_1, $opcao_2, $opcao_3, $opcao_4){
        $sql = "INSERT INTO quiz(tipo, texto_pergunta, resposta_correta, opcao_1, opcao_2, opcao_3, opcao_4) VALUES (?, ?, ?, ?, ?, ?, ? )";
        //colocamos interrogação pois vai referenciar ao cifrao, ele ira pegar as respostas que serao dadas por alguem no input do cifrao

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$tipo, $texto_pergunta, $resposta_correta, $opcao_1, $opcao_2, $opcao_3, $opcao_4]);
    }

    public function listarPerguntas(){
        $sql = "SELECT * FROM quiz ";
        //selecionamos todas as colunas
        $stmt = $this->pdo->query($sql);
        //query = consulta o banco de dados se existe
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    
    public function atualizarPergunta($tipo, $texto_pergunta, $resposta_correta, $opcao_1, $opcao_2, $opcao_3, $opcao_4, $id_pergunta){
          $sql = "UPDATE quiz SET tipo = ?, texto_pergunta = ?, resposta_correta = ?, opcao_1 = ?, opcao_2 = ?, opcao_3 = ?,
          opcao_4 = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$tipo, $texto_pergunta, $resposta_correta, $opcao_1, $opcao_2, $opcao_3, $opcao_4, $id_pergunta]);
    }

     //DELETAR 

     public function deletarPergunta($id_pergunta){
     $sql = "DELETE FROM quiz WHERE id =?";
     $stmt = $this->pdo-> prepare($sql);
     //prepare estapreparando a ação
     $stmt->execute([$id_pergunta]);
    }
}