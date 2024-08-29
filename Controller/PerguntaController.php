<?php

require_once 'C:/aluno2/xampp/htdocs/tabela_quiz/Model/PerguntaModel.php';

class PerguntaController {
    private $perguntaModel;

    public function __construct($pdo){
        $this->perguntaModel = new PerguntaModel($pdo);
    }

    public function criarPergunta($tipo, $texto_pergunta, $resposta_correta, $opcao_1, $opcao_2, $opcao_3, $opcao_4){
    $this ->perguntaModel->criarPergunta($tipo, $texto_pergunta, $resposta_correta, $opcao_1, $opcao_2, $opcao_3, $opcao_4);
}

    public function listarPerguntas(){
        return $this -> perguntaModel-> listarPerguntas();
    }

    public function exibirListaPergunta(){
        $perguntas= $this->perguntaModel->listarPerguntas();
        include 'C:/aluno2/xampp/htdocs/tabela_quiz/View/perguntas/listar.php';
        //estamos retornando os esportes

        }
    //ATUALIZAR PERGUNTA

    public function atualizarPergunta($tipo, $texto_pergunta, $resposta_correta, $opcao_1, $opcao_2, $opcao_3, $opcao_4, $id_pergunta){
        $this->perguntaModel->atualizarPergunta ($tipo, $texto_pergunta, $resposta_correta, $opcao_1, $opcao_2, $opcao_3, $opcao_4, $id_pergunta);
    }

    //DELETAR 

    public function deletarPergunta($id_pergunta){
        $this->perguntaModel->deletarPergunta($id_pergunta);
    }
    //ta criando a função para chamar o deletar esporte no model
    

}