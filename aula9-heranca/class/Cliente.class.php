<?php

/**
 * Descrição de Cliente.class
 *
 * @copyright (c) 2018, Douglas Caetano Lima
 */
class Cliente {
    public $Endereco;
    public $Bairro;
    
    function __construct($Endereco, $Bairro) {
        $this->Endereco = $Endereco;
        $this->Bairro = $Bairro;
    }
    
    function verEndereco() {
        return "<p>Endereço: {$this->Endereco} <br> Bairro: {$this->Bairro} <hr></p>";
    }

}
