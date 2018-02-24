<?php

/**
 * Descrição de FuncionarioProtected.class
 *
 * @copyright (c) 2018, Douglas Caetano Lima
 */
class FuncionarioProtected {
    public $Nome; // acesso de qualquer lugar
    private $SalarioPrivate; // acesso somente dentro da classe
    protected $Bonus; // acesso somente detro da classe ou classe filha
    
    function __construct($Nome, $SalarioPrivate, $Bonus) {
        $this->Nome = $Nome;
        $this->SalarioPrivate = $SalarioPrivate;
        $this->Bonus = $Bonus;
    }
    
    public function verFuncionario() {
        echo "O funcionario {$this->Nome} ganha R$ {$this->SalarioPrivate} + bonus de R$ {$this->Bonus}";
    }
    
    protected function setBonus($Bonus) {
        $this->Bonus = $Bonus;
    }



}
