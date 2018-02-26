<?php

/**
 * Descrição de Usuario.class
 *
 * @copyright (c) 2018, Douglas Caetano Lima
 */
class Usuario {
    private $Dados;
    private $Msg;
    private $Resultado;
    
    const Entity = 'users'; // constante não pode ser modificado
    
    public function ExeCreate(array $Dados) {
        $this->Dados = $Dados;
        $this->validarDados();
        if($this->Resultado):
        $this->Cadastrar();
        endif;
    }
    
    public function getResultado() {
        return $this->Resultado;
    }
    
    public function getMsg() {
        return $this->Msg;
    }


    // metodo para validar os dados
    private function validarDados() {
        $this->Dados = array_map('strip_tags', $this->Dados); // tira as tag (html) digitadas pelo usuario
        $this->Dados = array_map('trim', $this->Dados); // tiras os espacos em brancos digitados pelo usuario
        // verificar se algum campo está vazio ou não foi preenchido
        if(in_array('', $this->Dados)):
        $this->Resultado = false;
        $this->Msg = "<p style='color:red'><b>Erro ao cadastrar: </b>Para cadastrar usuario preencha todos os campos!</p>";
        else:
            $this->Dados['password'] = md5($this->Dados['password']); // criptografado md5
            $this->Resultado = true;
        endif;
    }
    
    private function Cadastrar() {
        $Create = new Create;
        $Create->ExeCreate(self::Entity, $this->Dados);
        if($Create->getResultado()):
        $this->Resultado = $Create->getResultado();
        $this->Msg = "<p style='color:green'><b>Sucesso: </b>O usuário <b>{$this->Dados['name']}</b> foi cadastrado!</p>";
        endif;
    }
}
