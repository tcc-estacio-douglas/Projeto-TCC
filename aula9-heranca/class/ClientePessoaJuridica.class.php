<?php

/**
 * Descrição de ClientePessoaJuridica.class
 *
 * @copyright (c) 2018, Douglas Caetano Lima
 */
class ClientePessoaJuridica extends Cliente {
    public $Cnpj;
    public $NomeFantasia;
    
    function __construct($Endereco, $Bairro, $Cnpj, $NomeFantasia) {
        parent::__construct($Endereco, $Bairro);
        $this->Cnpj = $Cnpj;
        $this->NomeFantasia = $NomeFantasia;
    }
    
    function verEnderecoPessoaJuridica() {
        return "<p>Dados de Pessoa Jurídica: <br> Endereço: {$this->Endereco} <br> Bairro: {$this->Bairro} <br> CNPJ: {$this->Cnpj} <br> Nome Fantasia: {$this->NomeFantasia} <hr></p>";
    }

}
