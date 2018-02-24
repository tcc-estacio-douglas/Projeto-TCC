<?php

/**
 * Descrição de ChequeComum.class
 *
 * @copyright (c) 2018, Douglas Caetano Lima
 */
final class ChequeComum extends Cheque {
    
    function __construct($Valor, $Tipo) {
        parent::__construct($Valor, $Tipo);
    }
    
    public function calcularJuros() {
        $this->Valor = $this->Valor * 1.25;
        parent::getValor();
    }
    
    /*public function Real($Valor) {
        $this->Valor = $Valor + 200;
        return "R$". number_format($this->Valor, '2', ',', '.');
    }*/
}
