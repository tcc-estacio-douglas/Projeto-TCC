<?php

/**
 * Descrição de PagamentoDinheiro.class
 *
 * @copyright (c) 2018, Douglas Caetano Lima
 */
class PagamentoDinheiro extends Carrinho {
    public $Desconto;
    
    function __construct($Produto, $Valor, $Metodo, $Desconto) {
        parent::__construct($Produto, $Valor, $Metodo);
        $this->Desconto = $Desconto;
    }
    
    function setDesconto($Desconto) {
        $this->Desconto = $Desconto;
    }

    public function Pagamento() { // metodo - pagamento (sobreescrito - polimorfismo)
        $this->Valor = ($this->Valor / 100) * 100 - $this->Desconto;
        parent::Pagamento();
    }

}
