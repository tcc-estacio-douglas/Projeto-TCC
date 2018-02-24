<?php

/**
 * Descrição de Carrinho.class
 *
 * @copyright (c) 2018, Douglas Caetano Lima
 */
class Carrinho {
    public $Produto;
    public $Valor;
    public $Metodo;
    
    function __construct($Produto, $Valor, $Metodo) {
        $this->Produto = $Produto;
        $this->Valor = $Valor;
        $this->Metodo = $Metodo;
    }
    
    public function Pagamento() { // metodo - pagamento
        echo "Produto {$this->Produto} tem o valor {$this->Valor} ao pagar com {$this->Metodo} <hr>";
    }

}
