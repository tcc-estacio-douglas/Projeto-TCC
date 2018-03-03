<?php

/**
 * Descrição de ModelsUsuario
 *
 * @copyright (c) 2018, Douglas Caetano Lima
 */
class ModelsUsuario {

    private $Resulado;
    private $UserId;
    private $Dados;
    private $Msg;

    const Entity = 'users';

    function getResulado() {
        return $this->Resulado;
    }

    function getMsg() {
        return $this->Msg;
    }

    public function listar() {
        $Listar = new ModelsRead();
        $Listar->ExeRead('users', 'LIMIT :limit', "limit=12");
        $this->Resulado = $Listar->getResultado();

        return $this->Resulado;
    }

    public function visualizar($UserId) {
        $this->UserId = (int) $UserId;
        $Visualizar = new ModelsRead();
        $Visualizar->ExeRead('users', 'WHERE id = :id LIMIT :limit', "id={$this->UserId}&limit=1");
        $this->Resulado = $Visualizar->getResultado();
        return $this->Resulado;
    }

    public function cadastrar(array $Dados) {
        $this->Dados = $Dados;
        $this->ValidarDados();
        if ($this->Resultado):
            $this->inserir();
        endif;
    }

    // metodo para validar os dados
    private function validarDados() {
        $this->Dados = array_map('strip_tags', $this->Dados); // tira as tag (html) digitadas pelo usuario
        $this->Dados = array_map('trim', $this->Dados); // tiras os espacos em brancos digitados pelo usuario
        // verificar se algum campo está vazio ou não foi preenchido
        if (in_array('', $this->Dados)):
            $this->Resultado = false;
            $this->Msg = "<p style='color:red'><b>Erro ao cadastrar: </b>Para cadastrar usuario preencha todos os campos!</p>";
        else:
            $this->Dados['password'] = md5($this->Dados['password']); // criptografado md5
            $this->Resultado = true;
        endif;
    }

    private function inserir() {
        $Create = new ModelsCreate();
        $Create->ExeCreate(self::Entity, $this->Dados);
        if ($Create->getResultado()):
            $this->Resultado = $Create->getResultado();
            $this->Msg = "<p style='color:green'><b>Sucesso: </b>O usuário <b>{$this->Dados['name']}</b> foi cadastrado!</p>";
        endif;
    }

}
