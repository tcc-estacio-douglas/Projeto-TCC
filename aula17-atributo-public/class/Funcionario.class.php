<?php

/**
 * Descrição de Funcionario.class
 *
 * @copyright (c) 2018, Douglas Caetano Lima
 */
class Funcionario {

    public $Nome;
    public $Salario;

    function __construct($Nome, $Salario) {
        $this->Nome = $Nome;
        $this->setSalario($Salario);
    }

    public function verFuncionario() {
        return "O funcionario {$this->Nome} ganha R$ {$this->Salario}";
    }

    public function setSalario($Salario) { // metodo para validar salario
        if (is_numeric($Salario) and ( $Salario > 0)):
            $this->Salario = number_format($Salario, '2', ',', '.');
        else:
            die('Sálario inválido!');
        endif;
    }

}
