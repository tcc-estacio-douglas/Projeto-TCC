<?php

/**
 * Descrição de ConfigView
 *
 * @copyright (c) 2018, Douglas Caetano Lima
 */
class ConfigView {

    private $Nome;
    private $Dados;

    public function __construct($Nome, array $Dados = null) {
        $this->Nome = (string) $Nome;
        $this->Dados = $Dados;
    }

    public function renderizar() {
        if (file_exists('views/' . $this->Nome . '.php')):
            include 'views/' . $this->Nome . '.php';
        else:
            echo "Erro ao carrgar a VIEW: {$this->Nome}";
        endif;
    }
    
    public function getDados() {
        return $this->Dados;
    }

}
