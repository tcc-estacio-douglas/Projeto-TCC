<?php

/**
 * Descrição de ChequeEspecial.class
 *
 * @copyright (c) 2018, Douglas Caetano Lima
 */
class ChequeEspecial extends Cheque {
    
   function __construct($Valor, $Tipo) {
       parent::__construct($Valor, $Tipo);
   }
   
   public function cacularJuros() {
       $this->Valor = $this->Valor * 1.12;
       parent::getValor();
   }
}
