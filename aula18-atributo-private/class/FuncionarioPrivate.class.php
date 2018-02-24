<?php

/**
 * Descrição de FuncionarioPrivate.class
 *
 * @copyright (c) 2018, Douglas Caetano Lima
 */
class FuncionarioPrivate {
    public $Nome;
    private $SalarioPrivate; // acessa somente dentro da classe onde o atributo se encontra
    
    function __construct($Nome, $SalarioPrivate) {
        $this->Nome = $Nome;
        $this->SalarioPrivate = $SalarioPrivate;
    }
    
    public function verFuncionario() {
        return "O funcionario {$this->Nome} tem o salario de R$ {$this->SalarioPrivate}";
    } 

    
}
