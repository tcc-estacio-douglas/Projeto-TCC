<?php

/**
 * Descrição de Bonus.class
 *
 * @copyright (c) 2018, Douglas Caetano Lima
 */
class Bonus extends FuncionarioProtected {
    
    public function __construct($Nome, $SalarioPrivate, $Bonus) {
        parent::__construct($Nome, $SalarioPrivate, $Bonus);
        parent::setBonus(500);
    }
    
    public function verFuncionario() {
        parent::verFuncionario();
    }
    
    
}
