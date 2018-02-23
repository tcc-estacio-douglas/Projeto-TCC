<?php

/**
 * Descrição de Aluno.class
 *
 * @copyright (c) 2018, Douglas Caetano Lima
 */
class Aluno {
    public $Nome;
    public $Nota;
    public $Disciplina;
    
    function __construct($Nome, $Nota, $Disciplina) {
        $this->Nome = (string) $Nome;
        $this->Nota = (int) $Nota;
        $this->Disciplina = (string) $Disciplina;
    }
    
    function setNota($Nota) {
        $this->Nota = $Nota;
    }

    function setDisciplina($Disciplina) {
        $this->Disciplina = $Disciplina;
    }

        
    function verAluno() {
        return print_r($this);
    }
}
