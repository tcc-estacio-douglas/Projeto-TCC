<?php

/**
 * Descrição de Usuario.class
 *
 * @copyright (c) 2018, Douglas Caetano Lima
 */
class Usuario {
    public $Nome;
    public $Email;
    
    function getClass($Nome, $Email) {
        return "O usuario {$Nome} tem o e-mail {$Email}";
    }
}
