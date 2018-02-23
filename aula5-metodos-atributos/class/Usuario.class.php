<?php

/**
 * Descrição de Usuario.class
 *
 * @copyright (c) 2018, Douglas Caetano Lima
 */
class Usuario {
    public $Nome;
    public $Email;
    
    function setClass($Nome, $Email) {
        $this->Nome = $Nome;
        $this->Email = $Email;
    }
    
    function getClass() {
        return "Nome do Aluno: {$this->Nome} | E-mail do Aluno: {$this->Email}";
    }
}
