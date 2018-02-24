<?php

/**
 * Descrição de Cheque.class
 *
 * @copyright (c) 2018, Douglas Caetano Lima
 */
abstract class Cheque {
    public $Valor;
    public $Tipo;
    
    function __construct($Valor, $Tipo) {
        $this->Valor = $Valor;
        $this->Tipo = $Tipo;
    }
    
    abstract function calcularJuros(); // com este método abstrado, determina que todas as classes filhas ttambem tenham este método.

    public function getValor() {
        echo "Valor do cheque {$this->Tipo}: {$this->Real($this->Valor)} <hr>";
    }
    
    public function Real($Valor) {
        return "R$". number_format($Valor, '2', ',', '.');
    }

}
