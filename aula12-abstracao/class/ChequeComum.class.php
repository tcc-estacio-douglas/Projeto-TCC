<?php

/**
 * Descrição de ChequeComum.class
 *
 * @copyright (c) 2018, Douglas Caetano Lima
 */
class ChequeComum extends Cheque {
    
    function __construct($Valor, $Tipo) {
        parent::__construct($Valor, $Tipo);
    }
    
    public function calcularJuros() {
        $this->Valor = $this->Valor * 1.25;
        parent::getValor();
    }
}
