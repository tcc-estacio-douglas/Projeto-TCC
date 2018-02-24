<?php

/**
 * Descrição de Curso.class
 *
 * @copyright (c) 2018, Douglas Caetano Lima
 */
class Curso implements ICurso {
    public $NomeDisciplina;
    public $NomeProfessor;
    
    public function Disciplina($NomeDisciplina) {
        $this->NomeDisciplina = $NomeDisciplina;
        return "Disciplina: {$this->NomeDisciplina} <br>";
    }

    public function Professor($NomeProfessor) {
        $this->NomeProfessor = $NomeProfessor;
        return "Professor: {$this->NomeProfessor} <hr>";
    }

}
