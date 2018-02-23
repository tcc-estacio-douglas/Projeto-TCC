<?php

/**
 * Descrição de ClientePessoaFisica.class
 *
 * @copyright (c) 2018, Douglas Caetano Lima
 */
class ClientePessoaFisica extends Cliente {
    public $Cpf;
    public $Nome;
    
    function __construct($Endereco, $Bairro, $Cpf, $Nome) {
        parent::__construct($Endereco, $Bairro);
        $this->Cpf = $Cpf;
        $this->Nome = $Nome;
    }
    
    function verEnderecoPessoaFisica() {
        return "<p>Dados de Pessoa Física: <br> Endereço: {$this->Endereco} <br> Bairro: {$this->Bairro} <br> CPF: {$this->Cpf} <br> Nome: {$this->Nome} <hr></p>";
    }

}
