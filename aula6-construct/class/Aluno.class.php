<?php

/**
 * Descrição de Aluno.class
 *
 * @copyright (c) 2018, Douglas Caetano Lima
 */
class Aluno {
    public $Nome;
    public $Nota;
    
    function __construct($Nome, $Nota) {
        $this->Nome = (string) $Nome;
        $this->Nota = (int) $Nota;
    }
    
    function verAluno() {
        return print_r($this);
    }
}
