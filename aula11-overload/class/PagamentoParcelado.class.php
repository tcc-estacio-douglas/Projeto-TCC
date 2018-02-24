<?php

/**
 * Descrição de PagamentoParcelado.class
 *
 * @copyright (c) 2018, Douglas Caetano Lima
 */
class PagamentoParcelado extends Carrinho {
    public $Juros;
    public $Encargos;
    public $Parcelas;
    public $NumeroParcelas;
    
    function __construct($Produto, $Valor, $Metodo, $Juros) {
        parent::__construct($Produto, $Valor, $Metodo);
        $this->Juros = $Juros;
    }
    
    public function Pagamento($Parcelas = null) { // null para não apresentar erros
        $this->setNumeroParcelas($Parcelas);
        $this->setEncargos();
        
        $this->Valor = $this->Valor + $this->Encargos;
        $this->Parcelas = $this->Valor / $this->NumeroParcelas;
        
        echo "Produto {$this->Produto} tem o valor de {$this->Valor} ao pagar com {$this->Metodo} em {$this->NumeroParcelas}x de R$ {$this->Parcelas}";
    }
            
    function setJuros($Juros) {
        $this->Juros = $Juros;
    }

    function setEncargos() {
        $this->Encargos = ($this->Valor * ($this->Juros / 100) * $this->NumeroParcelas);
    }

    function setNumeroParcelas($NumeroParcelas) {
        $this->NumeroParcelas = ((int) $NumeroParcelas >= 1 ? $NumeroParcelas : 1);
    }


}
