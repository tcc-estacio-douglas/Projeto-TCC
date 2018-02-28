<?php

/**
 * Descrição de Usuario.class
 *
 * @copyright (c) 2018, Douglas Caetano Lima
 */
class Usuario {

    private $Dados;
    private $User;
    private $Msg;
    private $Resultado;

    const Entity = 'users';

    public function ExeUpdate($IdUsuario, array $Dados) {
        $this->User = (int) $IdUsuario;
        $this->Dados = $Dados;

        $this->validarDados();
        if ($this->Resultado):
            $this->Alterar();
        endif;
    }

    public function getResultado() {
        return $this->Resultado;
    }

    public function getMsg() {
        return $this->Msg;
    }

    private function validarDados() {
        $this->Dados = array_map('strip_tags', $this->Dados);
        $this->Dados = array_map('trim', $this->Dados);

        if (in_array('', $this->Dados)):
            $this->Resultado = false;
            $this->Msg = "<p style='color:red'><b>Erro ao alterar: </b>Para alterar o usuario preencha todos os campos!</p>";
        else:
            $this->Dados['password'] = md5($this->Dados['password']); // criptografado md5
            $this->Resultado = true;
        endif;
    }

    private function Alterar() {
        $Update = new Update();
        $Update->ExeUpdate(self::Entity, $this->Dados, "WHERE id = :id", "id={$this->User}");
        if ($Update->getResultado()):
            $this->Msg = "<p style='color:green'><b>Sucesso: </b>O usuario {$this->Dados['name']} foi editado no sistema!</p>";
            $this->Resultado = true;
        else:
            $this->Msg = "<p style='color:red'><b>Erro: </b>O usuario {$this->Dados['name']} não foi editado no sistema!</p>";
            $this->Resultado = false;
        endif;
    }

}
