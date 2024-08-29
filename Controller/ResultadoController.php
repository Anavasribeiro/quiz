<?php

require_once 'C:/aluno2/xampp/htdocs/tabela_quiz/Model/ResultadoModel.php';

class ResultadoController {
    private $resultadoModel;

    public function __construct($pdo){
        $this->resultadoModel = new ResultadoModel($pdo);
    }

    public function criarResultado($tipo, $vencedor, $pontuacao_final_time_1, $pontuacao_final_time_2){
    $this ->resultadoModel->criarResultado($tipo, $vencedor, $pontuacao_final_time_1, $pontuacao_final_time_2);
}

    public function listarResultados(){
        return $this -> resultadoModel->listarResultados();
    }

    public function exibirListaResultados(){
        $resultados = $this->resultadoModel->listarResultados();
        include 'C:/aluno2/xampp/htdocs/tabela_quiz/View/resultado/listar.php';
        //estamos retornando os esportes

        }
    //ATUALIZAR ESPORTE

    public function atualizarResultado($tipo, $vencedor, $pontuacao_final_time_1, $pontuacao_final_time_2, $id_resultado){
        $this->resultadoModel->atualizarResultado($tipo, $vencedor, $pontuacao_final_time_1, $pontuacao_final_time_2, $id_resultado);
    }

    //DELETAR 

    public function deletarResultado($id_resultado){
        $this->resultadoModel->deletarResultado($id_resultado);
    }
    //ta criando a função para chamar o deletar esporte no model
    

}