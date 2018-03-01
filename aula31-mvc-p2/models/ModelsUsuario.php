<?php

/**
 * Descrição de ModelsUsuario
 *
 * @copyright (c) 2018, Douglas Caetano Lima
 */
class ModelsUsuario {
    private $Tabela;
    private $Dados;
    private $Msg;
    
    public function ExeCreate($Tabela, array $Dados) {
        $this->Tabela = (string) $Tabela;
        $this->Dados = $Dados;
        
        $this->Msg = "Models Usuário<br> Tabela {$this->Tabela}<br> DADOS <br>id: {$this->Dados['id']}<br> Nome: {$this->Dados['nome']}";
    }
    
    function getMsg() {
        return $this->Msg;
    }


}
